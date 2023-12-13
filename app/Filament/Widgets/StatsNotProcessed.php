<?php

namespace App\Filament\Widgets;

use App\Models\Car;
use App\Models\Demnad;
use App\Models\Reported;
use App\Models\Salon;
use App\Models\Support;
use App\Models\WithDraw;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class StatsNotProcessed extends BaseWidget
{
    protected static ?string $heading = 'Các dịch vụ chưa được xử lý';

    protected function getStats(): array
    {
        return [
            Stat::make('Tin đăng xe chưa được xử lý', Car::where('status', 0)->count())
                ->color('warning')
                ->url('/admin/post-car-managers')
                ->openUrlInNewTab(),
            
            Stat::make('Tin mua xe chưa được xử lý', Demnad::where('status', 0)->count())
                ->color('warning')
                ->url('/admin/demnads')
                ->openUrlInNewTab(),

            Stat::make('Yêu cầu mở salon chưa được xử lý', Salon::where('status', 0)->count())
                ->color('warning')
                ->url('/admin/salons')
                ->openUrlInNewTab(),

            Stat::make('Yêu cầu rút tiền được xử lý', WithDraw::where('status', 0)->count())
                ->color('warning')
                ->url('/admin/with-draws')
                ->openUrlInNewTab(),

            Stat::make('Yêu cầu hỗ trợ chưa được xử lý', Support::where('status', 0)->count())
                ->color('warning')
                ->url('/admin/supports')
                ->openUrlInNewTab(),

            Stat::make('Tố cáo chưa được xử lý', Reported::where('status', 0)->count())
                ->color('warning')
                ->url('/admin/reporteds')
                ->openUrlInNewTab(),

        ];
    }
}
