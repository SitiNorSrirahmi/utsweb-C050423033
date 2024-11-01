<?php

namespace App\Filament\Resources\PendistribusianResource\Pages;

use App\Filament\Resources\PendistribusianResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPendistribusian extends EditRecord
{
    protected static string $resource = PendistribusianResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
