<?php

namespace Modules\Filament\Filament\Forms\Components;

use Filament\Forms\Components\Select;
use Modules\Core\Enums\EnumGender;

class EnumInput extends Select
{
    public static function make(?string $name = null): static
    {
        return parent::make($name)
            ->label(__("validation-attributes.{$name}"))
            ->native(false)
            ->searchable();
    }
}
