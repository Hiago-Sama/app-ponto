<?php

namespace App\Http\Controllers;

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

    protected function responseException(?array $trace, ?array $file, ?string $message, ?int $code): JsonResponse
    {
        Log::error($message, ['message' => $message, 'file' => $file, 'trace' => $trace]);

        return Response::json([
            'message' => $message,
            'file' => $file,
            'trace' => $trace,
        ], $code > 599 ? CodeResponse::HTTP_INTERNAL_SERVER_ERROR : $code);;
    }
}
