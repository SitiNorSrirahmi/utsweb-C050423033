<?php

namespace App\Filament\Resources\PendistribusianResource\Pages;

use App\Filament\Resources\PendistribusianResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPendistribusians extends ListRecords
{
    protected static string $resource = PendistribusianResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
