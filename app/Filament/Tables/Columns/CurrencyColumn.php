<?php

namespace Modules\Filament\Filament\Tables\Columns;

class CurrencyColumn extends TextColumn
{
    public static function make(?string $name = null): static
    {
        return parent::make($name)
            ->label(__("validation-attributes.{$name}"))
            ->numeric(decimalPlaces: 0, locale: 'en')
            ->suffix(' '.__('validation-attributes.toman'));
    }
}
