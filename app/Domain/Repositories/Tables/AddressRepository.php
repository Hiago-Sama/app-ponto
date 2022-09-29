<?php

namespace App\Domain\Repositories\Tables;

use App\Models\Address;

class AddressRepository extends BaseTableRepository
{
    protected string $model = Address::class;

}
