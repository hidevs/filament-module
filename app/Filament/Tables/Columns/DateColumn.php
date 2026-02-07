<?php

namespace Modules\Filament\Filament\Tables\Columns;

class DateColumn extends TextColumn
{
    public static function make(?string $name = null): static
    {
        return parent::make($name)
            ->label(__("validation-attributes.{$name}"))
            ->jalaliDate()
            ->toggleable(isToggledHiddenByDefault: true);
    }

    public function withTime(?string $format = null, ?string $timezone = null): DateColumn
    {
        return $this->jalaliDateTime($format, $timezone);
    }
}
