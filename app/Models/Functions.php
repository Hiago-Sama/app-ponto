<?php

namespace App\Models;

class Functions extends BaseModel
{
    protected $primaryKey = "uid_function";
    protected $table = 'functions';

    protected $fillable = [
        'label',
        'name',
        'level'
    ];

    public function users()
    {
        return $this->belongsTo(Users::class, 'uid_function');
    }
}
