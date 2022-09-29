<?php

namespace App\Domain\Repositories\Tables;

use App\Models\Status;

class StatusRepository extends BaseTableRepository
{
    protected $model = Status::class;

    public function getStatusDefault()
    {
        return $this->where('label', '=', 'primeiro_acesso')->first();
    }
}
