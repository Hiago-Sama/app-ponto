<?php

namespace App\Models;

class Status extends BaseModel
{
    protected $primaryKey = "uid_status";
    protected $table = 'status';

    protected $fillable = [
        'label',
        'name',
        'description'
    ];
}
