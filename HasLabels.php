<?php

namespace Totocsa\HasLabels;

trait HasLabels
{
    public static function label(string $attribute): string
    {
        return static::labels()[$attribute] ?? ucfirst(str_replace('_', ' ', $attribute));
    }
}
