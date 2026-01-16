<?php

namespace Modules\Filament\Filament\Forms\Components;

use Filament\Forms\Components\Radio;

class RadioInput  extends Radio
{
    public static function make(?string $name = null): static
    {
        return parent::make($name)
            ->label(__("validation-attributes.{$name}"));
    }
}
