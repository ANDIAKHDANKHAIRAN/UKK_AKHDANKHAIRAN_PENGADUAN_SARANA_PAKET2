<?php

namespace App\Filament\Siswa\Widgets;

use App\Models\Pengaduan;
use App\Models\Siswa;
use Filament\Forms\Components\Select;
use Filament\Schemas\Schema;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class GetPengajuan extends StatsOverviewWidget
{
    public ?int $siswa_id = null;

    public function updatedSiswaId(): void
    {
        $this->cachedStats = null;
    }

    public function content(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('siswa_id')
                    ->label('Pilih Siswa')
                    ->placeholder('Pilih Siswa')
                    ->options(
                        Siswa::query()
                            ->get()
                            ->mapWithKeys(fn (Siswa $siswa) => [
                                $siswa->id => "{$siswa->name}" . ($siswa->kelas ? " ({$siswa->kelas})" : ''),
                            ])
                    )
                    ->searchable()
                    ->live(),
                $this->getSectionContentComponent(),
            ]);
    }

    protected function getStats(): array
    {
        $menunggu = 0;
        $proses = 0;
        $selesai = 0;

        if ($this->siswa_id) {
            $menunggu = Pengaduan::where('siswa_id', $this->siswa_id)->where('status', 'menunggu')->count();
            $proses = Pengaduan::where('siswa_id', $this->siswa_id)->where('status', 'proses')->count();
            $selesai = Pengaduan::where('siswa_id', $this->siswa_id)->where('status', 'selesai')->count();
        }

        return [
            Stat::make('Menunggu', $menunggu),
            Stat::make('Proses', $proses),
            Stat::make('Selesai', $selesai),
        ];
    }
}
