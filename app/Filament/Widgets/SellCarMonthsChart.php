<?php

namespace App\Filament\Widgets;

use App\Models\Car;
use Flowframe\Trend\Trend;
use Illuminate\Support\Carbon;
use Flowframe\Trend\TrendValue;
use Filament\Forms\Components\DatePicker;
use Leandrocfe\FilamentApexCharts\Widgets\ApexChartWidget;

class SellCarMonthsChart extends ApexChartWidget
{
    /**
     * Chart Id
     *
     * @var string
     */
    protected static string $chartId = 'sellCarMonthsChart';

    /**
     * Widget Title
     *
     * @var string|null
     */
    protected static ?string $heading = 'Tin bán xe trong tháng';

    protected static ?int $sort = 10;

    protected int | string | array $columnSpan = 'full';
    /**
     * Chart options (series, labels, types, size, animations...)
     * https://apexcharts.com/docs/options
     *
     * @return array
     */
    protected function getOptions(): array
    {
        $data = Trend::query(Car::where('status', 1))
        ->between(
            start: Carbon::parse($this->filterFormData['date_start']),
            end: Carbon::parse($this->filterFormData['date_end']),
        )
            ->perDay()
            ->count();
        
        return [
            'chart' => [
                'type' => 'bar',
                'height' => 300,
            ],
            'series' => [
                [
                    'name' => 'Số tin được đẩy',
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
            'colors' => ['#f59e0b'],
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
