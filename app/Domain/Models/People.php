<?php

namespace App\Domain\Models;

class People extends BaseModel
{
    protected $primaryKey = "uid_people";
    protected $table = 'people';

    protected $fillable = [
        'full_name',
        'email',
        'cpf',
        'birthday',
        'uid_status',
        'uid_address'
    ];

    protected $with = ['address', 'status'];

    public function status()
    {
        return $this->hasOne(Status::class, 'uid_status', 'uid_status');
    }

    public function address()
    {
        return $this->hasOne(Address::class, 'uid_address', 'uid_address');
    }

    public function phones()
    {
        return $this->hasMany(PhonesPeople::class, 'uid_people', 'uid_people');
    }

    public function user()
    {
        return $this->hasOne(Users::class, 'uid_people');
    }
}
