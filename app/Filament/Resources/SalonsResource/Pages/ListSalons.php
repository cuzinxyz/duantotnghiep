<?php

namespace App\Filament\Resources\SalonsResource\Pages;

use App\Models\Salon;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\SalonsResource;
use Filament\Resources\Pages\ListRecords\Tab;

class ListSalons extends ListRecords
{
    protected static string $resource = SalonsResource::class;

    // protected function getHeaderActions(): array
    // {
    //     return [
    //         Actions\CreateAction::make(),
    //     ];
    // }

    public function getTabs(): array
    {
        return [
            'all' => Tab::make()
            ->label('Tất cả')
            ->badge(Salon::count()),

            'ordered' => Tab::make()
            ->label('Chờ duyệt')
            ->modifyQueryUsing(fn (Builder $query) => $query->where('status', 0))
                ->badge(Salon::query()->where('status', 0)->count()),
                
            'approved' => Tab::make()
            ->label('Đã Duyệt')
            ->modifyQueryUsing(fn (Builder $query) => $query->where('status', 1))
                ->badge(Salon::query()->where('status', 1)->count()),

            'deleted' => Tab::make()
            ->label('Đã khóa')
            ->modifyQueryUsing(fn (Builder $query) => $query->where('status', 3))
                ->badge(Salon::query()->where('status', 3)->count()),
        ];
    }

    public function getDefaultActiveTab(): string | int | null
    {
        return 'ordered';
    }
}
