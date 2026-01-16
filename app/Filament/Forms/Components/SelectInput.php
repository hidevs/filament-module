<?php

namespace Modules\Filament\Filament\Forms\Components;

use Filament\Forms\Components\Select;

class SelectInput  extends Select
{
    public static function make(?string $name = null): static
    {
        return parent::make($name)
            ->label(__("validation-attributes.{$name}"))
            ->native(false);
    }
}
