<?php

namespace resources\Resources\PostResource\Pages;

use Filament\Resources\Pages\CreateRecord;
use resources\Resources\PostResource;

class CreatePost extends CreateRecord
{
    protected static string $resource = PostResource::class;
}
