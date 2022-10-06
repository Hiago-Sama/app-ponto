<?php


namespace App\Exceptions\Config;


class BuildExceptions extends \Exception
{
    protected $exception;
    protected $message;
    protected $data;

    public function __construct(BaseException $exception)
    {
        $this->exception = $exception;
        $this->message   = $exception->getReason();
        $this->code      = $exception->getHttpCode();
        parent::__construct();
    }

    public function render()
    {
        return response()->json($this->exception->toArray(), $this->exception->getHttpCode() ?? 500);
    }

    public function getBaseException(): BaseException
    {
        return $this->exception;
    }
}
