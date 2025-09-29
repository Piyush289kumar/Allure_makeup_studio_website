<?php

namespace App\Filament\Resources\EarlyAccessResource\Pages;

use App\Filament\Resources\EarlyAccessResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEarlyAccesses extends ListRecords
{
    protected static string $resource = EarlyAccessResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
