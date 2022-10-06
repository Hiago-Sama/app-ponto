<?php

namespace App\Domain\Repositories\Tables;

use App\Models\Company;

class CompanyRepository extends BaseTableRepository
{
    protected $model = Company::class;
}
