<?php

namespace Modules\Filament\Filament\Tables\Columns;

class PhoneColumn extends \Ysfkaya\FilamentPhoneInput\Tables\PhoneColumn
{
    public static function make(?string $name = null): static
    {
        return parent::make($name)
            ->label(__("validation-attributes.{$name}"))
            ->url(fn ($state) => "tel:{$state}");
    }
}
