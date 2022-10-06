<?php

namespace App\Http\Controllers;

use App\Exceptions\Config\BaseException;
use App\Exceptions\Config\BuildExceptions;
use App\Exceptions\DefaultException;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Response;
use Symfony\Component\HttpFoundation\Response as CodeResponse;

class BaseController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected function responseCreated(?array $data, ?string $message): JsonResponse
    {
        return Response::json([
            'message' => $message,
            'data' => $data,
        ], CodeResponse::HTTP_CREATED);
    }

    protected function responseException(?string $file, ?string $message, ?array $trace = []): JsonResponse
    {
        $exception = new BaseException(
            $file . 'Error',
            $message,
            DefaultException::GENERAL_SUPPORT_MESSAGE,
            CodeResponse::HTTP_UNPROCESSABLE_ENTITY,
            $trace
        );

        throw new BuildExceptions($exception);
    }
}
