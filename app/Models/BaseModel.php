<?php

namespace App\Models;

use App\Models\Traits\UuidTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

abstract class BaseModel extends Model
{
    use HasFactory;
    use UuidTrait;
    use SoftDeletes;

    protected $keyType = 'string';
    protected $connection = 'mysql';
    public $incrementing = false;
}
