<?php

namespace App\Filament\Resources\EarlyAccessResource\Pages;

use App\Filament\Resources\EarlyAccessResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEarlyAccess extends EditRecord
{
    protected static string $resource = EarlyAccessResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
