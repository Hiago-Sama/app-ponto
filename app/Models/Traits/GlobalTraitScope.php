<?php

namespace App\Models\Traits;

use App\Scope\OrderByDescScope;

trait GlobalTraitScope
{
    protected static function boot() {
        parent::boot();
        static::addGlobalScope(new OrderByDescScope);
    }
}
