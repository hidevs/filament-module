<?php

namespace Modules\Filament\Filament\Forms\Components;

class TextInput extends \Filament\Forms\Components\TextInput
{
    public static function make(?string $name = null): static
    {
        return parent::make($name)
            ->label(__("validation-attributes.{$name}"));
    }
}
