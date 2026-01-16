<?php

namespace Modules\Filament\Filament\Trait;

use Illuminate\Support\Str;
use UnitEnum;
use function Filament\Support\get_model_label;

trait ResourceTranslate
{
    public static function getLabel(): ?string
    {
        return __("validation-attributes.".get_model_label(static::getModel()));
    }

    public static function getNavigationGroup(): string|UnitEnum|null
    {
        return !is_null(static::$navigationGroup) ? __("validation-attributes.".static::$navigationGroup) : null;
    }

    public static function getModelLabel(): string
    {
        return __("validation-attributes.".get_model_label(static::getModel()));
    }

    public static function getPluralLabel(): ?string
    {
        return __("validation-attributes.".Str::plural(get_model_label(static::getModel())));
    }
}
