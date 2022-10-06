<?php

namespace App\Domain\Services;

use App\Domain\Component\Helper\StringHelper;
use App\Domain\Repositories\Tables\CompanyRepository;
use App\Domain\Repositories\Tables\StatusRepository;
use App\Models\Company;
use Illuminate\Support\Str;

class CompanyService
{
    private CompanyRepository $companyRepository;
    private StatusRepository $statusRepository;

    public function __construct(CompanyRepository $companyRepository, StatusRepository $statusRepository)
    {
        $this->companyRepository = $companyRepository;
        $this->statusRepository = $statusRepository;
    }

    public function crete(array $payload): array
    {
        foreach ($payload as $item => $value) {
            $value = Str::ucfirst($value);
            $payload[$item] = StringHelper::removeSpecialCharacters($value);
        }

        $payload['uid_status'] = $this->statusRepository->getStatusDefault()->uid_status;
        $response = $this->companyRepository->firstOrCreate($payload);

        return $response->toArray();
    }
}
