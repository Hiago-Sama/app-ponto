<?php


namespace App\Exceptions\Config;


class BaseException
{
    private $type;
    private $reason;
    private $support;
    private $httpCode;
    private $response;
    private $data;

    public function __construct(
        string $type,
        string $reason,
        string $support,
        int $httpCode = 500,
        array $data = []
    ) {
        $this->type             = $type;
        $this->reason           = $reason;
        $this->support          = $support;
        $this->httpCode         = $httpCode;
        $this->data             = $data;
    }

    /**
     * @return mixed
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return mixed
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * @return mixed
     */
    public function getSupport()
    {
        return $this->support;
    }

    /**
     * @return mixed
     */
    public function getHttpCode()
    {
        return $this->httpCode;
    }

    public function getData()
    {
        return $this->data;
    }

    public function toArray()
    {
        return [
            'type' => $this->type,
            'reason' => $this->reason,
            'support' => $this->support,
            'httpCode' => $this->httpCode,
            'data' => $this->data,
        ];
    }
}
