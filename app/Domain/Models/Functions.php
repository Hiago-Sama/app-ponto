<?php

namespace App\Domain\Models;

class Functions extends BaseModel
{
    protected $primaryKey = "uid_function";
    protected $table = 'functions';

    protected $fillable = [
        'label',
        'name'
    ];

    public function users()
    {
        return $this->belongsTo(Users::class, 'uid_function');
    }
}
