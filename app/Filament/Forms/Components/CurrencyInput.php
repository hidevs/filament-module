<?php

namespace Modules\Filament\Filament\Forms\Components;

class CurrencyInput extends TextInput
{
    protected string $currencyUnit = 'validation-attributes.toman';

    protected bool $currencyAsPrefix = false;

    public static function make(?string $name = null): static
    {
        return parent::make($name)
            ->label(__("validation-attributes.{$name}"))
            ->currencyMask(thousandSeparator: ',', decimalSeparator: '.', precision: 0)
            ->minValue(0)
            ->suffix(__('validation-attributes.toman'));
    }

    public function currencyUnit(string $unit): static
    {
        $this->currencyUnit = $unit;

        if ($this->currencyAsPrefix) {
            return $this->prefix($unit)->suffix(null);
        }

        return $this->suffix($unit)->prefix(null);
    }

    public function currencyAsPrefix(bool $asPrefix = true): static
    {
        $this->currencyAsPrefix = $asPrefix;

        $unit = __($this->currencyUnit);

        if ($asPrefix) {
            return $this->prefix($unit)->suffix(null);
        }

        return $this->suffix($unit)->prefix(null);
    }
}
