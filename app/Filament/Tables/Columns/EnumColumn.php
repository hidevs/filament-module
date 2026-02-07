<?php

namespace Modules\Filament\Filament\Tables\Columns;

class EnumColumn extends TextColumn
{
    public static function make(?string $name = null): static
    {
        return parent::make($name)
            ->label(__("validation-attributes.{$name}"))
            ->badge()
            ->color(fn ($state) => $state?->color())
            ->formatStateUsing(fn ($state) => $state?->label());
    }
}
