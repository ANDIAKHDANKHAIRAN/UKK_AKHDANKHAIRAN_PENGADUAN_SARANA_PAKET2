<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Pengaduan;

class GetPengaduan extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Laporan Baru', Pengaduan::select()->where('status', 'menunggu')->count())
                ->description('Belum ditindaklanjuti')
                ->color('warning'),
            Stat::make('Sedang Diproses', Pengaduan::select()->where('status', 'proses')->count())
                ->description('Dalam penanganan')
                ->color('info'),
            Stat::make('Telah Selesai', Pengaduan::select()->where('status', 'selesai')->count())
                ->description('Sudah ditangani')
                ->color('success'),
        ];
    }
}
