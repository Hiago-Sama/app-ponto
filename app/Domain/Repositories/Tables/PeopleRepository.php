<?php

namespace App\Domain\Repositories\Tables;

use App\Models\People;

class PeopleRepository  extends BaseTableRepository
{
    protected $model = People::class;
}
