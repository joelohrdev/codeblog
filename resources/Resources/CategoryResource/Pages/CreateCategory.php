<?php

namespace resources\Resources\CategoryResource\Pages;

use Filament\Resources\Pages\CreateRecord;
use resources\Resources\CategoryResource;

class CreateCategory extends CreateRecord
{
    protected static string $resource = CategoryResource::class;
}
