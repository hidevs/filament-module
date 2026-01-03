<?php

namespace Modules\Filament\Filament\Trait;

use Illuminate\Support\Str;
use function Filament\Support\get_model_label;

trait ResourceTranslate
{
    public static function getLabel(): ?string
    {
        return __("validation-attributes.".get_model_label(static::getModel()));
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
