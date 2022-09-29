<?php

namespace App\Models;

class People extends BaseModel
{
    protected $primaryKey = "uid_people";
    protected $table = 'people';

    protected $fillable = [
        'full_name',
        'email',
        'cpf',
        'birthday'
    ];

    public function status()
    {
        return $this->hasOne(Status::class, 'uid_status');
    }

    public function address()
    {
        return $this->hasOne(Address::class, 'uid_address');
    }

    public function phone()
    {
        return $this->hasMany(PhonesPeople::class, 'uid_people');
    }

    public function user()
    {
        return $this->hasOne(Users::class, 'uid_people');
    }
}
