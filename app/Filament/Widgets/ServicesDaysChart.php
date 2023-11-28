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
     * @var string
     */
    protected static string $chartId = 'servicesDaysChart';

    /**
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

        foreach($servicePerDay as $serviceDay) {
            foreach($serviceDay as $key => $item) {
                $name = $item->name;
                $aggregate = $item->aggregate;

                if (!isset($results[$name])) {
                    $results[$name] = [];
                }

                $results[$name][] = $aggregate;
            }
        }

        $data = [];
        foreach($results as $key => $result) {
            $data[] = [
                'name' => $key,
                'data' => $result
            ];
        }
        
        return [
            'chart' => [
                'type' => 'line',
                'height' => 300,
            ],
            'series' => $data,
            'xaxis' => [
                'categories' => $days,
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
            'colors' => ['#f59e0b', '#77B6EA', '#e67e22', '#2980b9', '#f39c12', '#c0392b'],
            'stroke' => [
                'curve' => 'smooth',
            ],
        ];
    }
}
