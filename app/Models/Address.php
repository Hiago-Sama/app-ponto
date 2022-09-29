<?php

namespace App\Models;

class Address extends BaseModel
{
    protected $primaryKey = "uid_address";
    protected $table = 'address';

    protected $fillable = [
        "zip_code",
        "street",
        "city",
        "district",
        "number",
        "uf"
    ];

    public function people()
    {
        return $this->belongsTo(People::class, 'uid_address');
    }

    public function company()
    {
        return $this->belongsTo(Company::class, 'uid_address');
    }
}
