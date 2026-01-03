<?php

namespace Modules\Filament\Filament\Tables\Columns;

class DateTimeColumn extends TextColumn
{
    public static function make(?string $name = null): static
    {
        return parent::make($name)
            ->label(__("validation-attributes.{$name}"))
            ->jalaliDateTime()
            ->toggleable(isToggledHiddenByDefault: true);
    }
}
