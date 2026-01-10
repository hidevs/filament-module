<?php

namespace Modules\Filament\Filament\Forms\Components;

class SecureInput extends TextInput
{
    public static function make(?string $name = null): static
    {
        return parent::make($name)
            ->label(__("validation-attributes.{$name}"))
            ->password()
            ->revealable(filament()->arePasswordsRevealable());
    }
}
