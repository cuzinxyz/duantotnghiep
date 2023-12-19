<?php

namespace App\Filament\Resources\CollaboratorsResource\Widgets;

use App\Models\Car;
use App\Models\Demnad;
use App\Models\Reported;
use App\Models\Salon;
use App\Models\Support;
use App\Models\WithDraw;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class CollaboratorsOverview extends BaseWidget
{
    protected function getStats(): array
    {
       $url = request()->session()->all()['_previous']['url'];
        preg_match('/\/(\d+)\/edit/', $url, $matches);
        $collaboratorId = $matches[1];
        return [
            Stat::make('Tin đăng xe chưa được xử lý', Car::where([
                'status' => 0,
                'collaborator_id' => $collaboratorId
            ])
            ->count())
            ->color('warning'),

            Stat::make('Tin mua xe chưa được xử lý', Demnad::where([
                'status' => 0,
                'collaborator_id' => $collaboratorId
            ])
            ->count())
            ->color('warning'),

            Stat::make('Yêu cầu mở salon chưa được xử lý', Salon::where([
                'status' => 0,
                'collaborator_id' => $collaboratorId
            ])
            ->count())
            ->color('warning'),

            Stat::make('Yêu cầu rút tiền chưa được xử lý', WithDraw::where([
                'status' => 0,
                'collaborator_id' => $collaboratorId
            ])
            ->count())
            ->color('warning'),

            Stat::make('Tố cáo chưa xử lý', Reported::where([
                'status' => 0,
                'collaborator_id' => $collaboratorId
            ])
            ->count())
            ->color('warning'),

            Stat::make('Hỗ trợ chưa xử lý', Support::where([
                'status' => 0,
                'collaborator_id' => $collaboratorId
            ])
            ->count())
            ->color('warning'),
        ];
    }
}
