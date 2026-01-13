<?php

namespace Modules\Filament\Filament\Forms\Components;

class PhoneInput extends \Ysfkaya\FilamentPhoneInput\Forms\PhoneInput
{
    public static function make(?string $name = null): static
    {
        return parent::make($name)
            ->label(__("validation-attributes.{$name}"));
    }

    public function singleCountry(string $country): PhoneInput
    {
        return $this
            ->initialCountry($country)
            ->defaultCountry($country)
            ->disallowDropdown();
    }
}
