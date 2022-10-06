<?php

namespace App\Http\Controllers;

use App\Domain\Services\CompanyService;
use App\Http\Requests\CompanyRequest;
use Illuminate\Http\Request;

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
            return $this->responseException($exception->getTrace(), $exception->getFile(), $exception->getMessage(), $exception->getCode());
        }

        return $this->responseCreated($response, 'Criado com sucesso!');
    }

}
