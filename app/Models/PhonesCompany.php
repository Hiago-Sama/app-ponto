<?php

namespace App\Models;

class PhonesCompany extends BaseModel
{
    protected $primaryKey = 'uid_phone';
    protected $table = 'phones_company';

    protected $fillable = [
        'phone_number'
    ];

    public function company()
    {
        return $this->belongsTo(Company::class, 'uid_compnay');
    }
}
