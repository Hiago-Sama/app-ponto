<?php


namespace App\Exceptions\Address;

use App\Exceptions\Config\BaseException;
use App\Exceptions\Config\BuildExceptions;
use Symfony\Component\HttpFoundation\Response;

class AcademyTrainingExceptions
{
    public static function handle($message)
    {
        $exception = new BaseException(
            'AddressInvalidException',
            'Problemas na criação do endereço.',
            $message,
            "Contate o adiministrador." ,
            Response::HTTP_UNPROCESSABLE_ENTITY,

        );

        throw new BuildExceptions($exception);
    }
}
