<?php

namespace Modules\Filament\Filament\Tables\Columns;

class TextColumn extends \Filament\Tables\Columns\TextColumn
{
    public static function make(?string $name = null): static
    {
        return parent::make($name)
            ->label(__("validation-attributes.{$name}"));
    }
}
