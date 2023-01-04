<?php

namespace resources\Resources\PostResource\Pages;

use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;
use resources\Resources\PostResource;

class EditPost extends EditRecord
{
    protected static string $resource = PostResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
