<?php

namespace App\Filament\Widgets;

use App\Models\User;
use Flowframe\Trend\Trend;
use Illuminate\Support\Carbon;
use Flowframe\Trend\TrendValue;
use Filament\Forms\Components\DatePicker;
use Leandrocfe\FilamentApexCharts\Widgets\ApexChartWidget;

class UsersMonthsChart extends ApexChartWidget
{
    /**
     * Chart Id
     *
     * @var string
     */
    protected static string $chartId = 'usersMonthsChart';

    /**
     * Widget Title
     *
     * @var string|null
     */
    protected static ?string $heading = 'Số lượng tài khoản đăng ký trong tháng';


    protected int | string | array $columnSpan = 'full';

    protected static ?int $sort = 9;


    /**
     * @return array
     */
    protected function getOptions(): array
    {

        $data = Trend::model(User::class)
        ->between(
            start: Carbon::parse($this->filterFormData['date_start']),
            end: Carbon::parse($this->filterFormData['date_end']),
        )
            ->perDay()
            ->count();

        

        return [
            'chart' => [
                'type' => 'area',
                'height' => 300,
            ],
            'series' => [
                [
                    'name' => 'Tài khoản',
                    'data' => $data->map(fn (TrendValue $value) => $value->aggregate),
                ],
            ],
            'xaxis' => [
                'categories' => $data->map(fn (TrendValue $value) => Carbon::parse($value->date)->format('d')),
                'labels' => [
                    'style' => [
                        'fontFamily' => 'inherit',
                    ],
                ],
            ],
            'yaxis' => [
                'labels' => [
                    'style' => [
                        'fontFamily' => 'inherit',
                    ],
                ],
            ],
            'colors' => ['#00e396'],
            'stroke' => [
                'curve' => 'smooth',
            ],
            'dataLabels' => [
                'enabled' => false,
            ],
        ];
    }

    protected function getFormSchema(): array
    {
        return [
            DatePicker::make('date_start')
            ->label('Ngày bắt đầu')
            ->default(now()->startOfMonth())
                ->reactive()
                ->afterStateUpdated(function () {
                    $this->updateOptions();
                }),
            DatePicker::make('date_end')
            ->label('Ngày kết thúc')
            ->default(now()->endOfMonth())
                ->reactive()
                ->afterStateUpdated(function () {
                    $this->updateOptions();
                }),
        ];
    }
}
