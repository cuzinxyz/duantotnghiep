<?php

namespace App\Filament\Widgets;

use App\Models\Service;
use Flowframe\Trend\Trend;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Filament\Forms\Components\DatePicker;
use Leandrocfe\FilamentApexCharts\Widgets\ApexChartWidget;

class ServicesDaysChart extends ApexChartWidget
{
    /**
     * Chart Id
     *
     * @var string
     */
    protected static string $chartId = 'servicesDaysChart';

    /**
     * Widget Title
     *
     * @var string|null
     */
    protected static ?string $heading = 'Dịch vụ đã đăng kí trong tháng';

    protected static ?string $pollingInterval = null;

    protected static ?int $sort = 6;

    /**
     *
     * @return array
     */
    protected function getOptions(): array
    {
        DB::enableQueryLog();
        // $serviceOne = Service::leftJoin('purchased_service', function ($join) {
        //     $join->on('services.id', '=', 'purchased_service.service_id')
        //     ->whereBetween('purchased_service.created_at', ['2023-11-01 00:00:00', '2023-11-30 23:59:59']);
        // })
        //     ->select(
        //         DB::raw("DATE_FORMAT(purchased_service.created_at, '%Y-%m-%d') AS date"),
        //         'services.service_name AS name',
        //         DB::raw('COALESCE(COUNT(purchased_service.service_id), 0) AS aggregate')
        //     )
        //     ->groupBy('date', 'services.service_name')
        //     ->orderBy('date', 'ASC')
        //     ->get();



        $now = Carbon::now();

        $servicePerDay = [];

        $days = collect(range(1, $now->endOfMonth()->day))->map(function ($day) use ($now, &$servicePerDay) {
            $count =
            DB::table('services')
            ->leftJoin('purchased_service', function ($join) use ($now, $day) {
                $join->on('services.id', '=', 'purchased_service.service_id')
                ->whereDate('purchased_service.created_at', '=', $now->day($day)->format('Y-m-d'));
            })
                ->select(
                    DB::raw("DATE_FORMAT(purchased_service.created_at, '%Y-%m-%d') AS date"),
                    'services.service_name AS name',
                    DB::raw('COALESCE(COUNT(purchased_service.service_id), 0) AS aggregate')
                )
                ->groupBy('date', 'services.service_name')
                ->get();

            $servicePerDay[] = $count;

            return $now->day($day)->format('m-d');
        })->toArray();

        dd($servicePerDay);
        foreach($servicePerDay as $serviceDay) {
            foreach($serviceDay as $item) {
                dd($item);
            }
        }



        return [
            'chart' => [
                'type' => 'line',
                'height' => 300,
            ],
            'series' => [
                [
                    'name' => 'ServicesDaysChart',
                    'data' => [2, 4, 6, 10, 14, 7, 2, 9, 10, 15, 13, 18],
                ],

                [
                    'name' => 'ServicesDaysChart2',
                    'data' => [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
                ],
            ],
            'xaxis' => [
                'categories' => ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
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
            'colors' => ['#f59e0b', '#77B6EA'],
            'stroke' => [
                'curve' => 'smooth',
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

    private function getMonthServices()
    {
    }
}
