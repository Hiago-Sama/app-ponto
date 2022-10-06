<?php

namespace App\Http\Controllers;

use App\Domain\Services\CompanyService;
use App\Http\Requests\CompanyRequest;

class CompanyController extends BaseController
{
    private CompanyService $companyService;

    public function __construct(CompanyService $companyService)
    {
        $this->companyService = $companyService;
    }

    public function store(CompanyRequest $request)
    {
        try {
            $response = $this->companyService->crete($request->all());
        } catch (\RuntimeException $exception) {
            return $this->responseException($exception->getFile(), $exception->getMessage(), $exception->getTrace());
        }

        return $this->responseCreated($response, 'Criado com sucesso!');
    }

}
