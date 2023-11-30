<?php

namespace Stephanbouman\Enumcollection;

use Illuminate\Support\Collection;

trait HasCollection
{
    public static function asCollection() : Collection
    {
        return Collection::make(self::cases());
    }
}