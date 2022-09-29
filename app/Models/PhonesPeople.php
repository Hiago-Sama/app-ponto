<?php

namespace App\Models;

class PhonesPeople extends BaseModel
{
    protected $primaryKey = 'uid_phone';
    protected $table = 'phones_people';

    protected $fillable = [
        'phone_number'
    ];

    public function people()
    {
        return $this->belongsTo(People::class, 'uid_people');
    }
}
