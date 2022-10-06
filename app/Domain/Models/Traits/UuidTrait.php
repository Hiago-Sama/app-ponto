<?php

namespace App\Models\Traits;

use Illuminate\Support\Str;

trait UuidTrait
{
    use GlobalTraitScope;

    public static function bootUuidTrait()
    {
        static::creating(function ($model) {
            $uid = $model->getKeyName();
            if (!empty($model->$uid)) {
                return;
            }
            $model->$uid = Str::uuid();
        });
    }

}
