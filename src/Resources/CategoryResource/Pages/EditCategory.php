<?php

declare(strict_types=1);

namespace Moox\Category\Resources\CategoryResource\Pages;

use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;
use Moox\Category\Resources\CategoryResource;

class EditCategory extends EditRecord
{
    protected static string $resource = CategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // DeleteAction::make(),
        ];
    }

    protected function getFormActions(): array
    {
        return [];
    }
}