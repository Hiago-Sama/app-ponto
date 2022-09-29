<?php

namespace App\Domain\Repositories\Tables;

use App\Models\Users;

class UsersRepository extends BaseTableRepository
{
    protected $model = Users::class;
}
