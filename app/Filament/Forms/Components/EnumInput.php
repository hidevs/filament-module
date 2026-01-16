<?php

namespace Modules\Filament\Filament\Forms\Components;

class EnumInput extends SelectInput
{
    public static function make(?string $name = null): static
    {
        return parent::make($name)
            ->searchable();
    }
}
