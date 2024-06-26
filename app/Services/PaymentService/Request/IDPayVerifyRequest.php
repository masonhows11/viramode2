<?php


namespace App\Services\PaymentService\Request;


use App\Services\PaymentService\Interfaces\RequestInterface;

class IDPayVerifyRequest implements RequestInterface
{

    private $id;
    private $orderId;
    private $apiKey;
    private $gateway;


    public function __construct(array $data)
    {
        $this->orderId = $data['orderId'];
        $this->id = $data['id'];
        $this->apiKey = $data['apiKey'];
        $this->gateway = $data['gateway'];
    }
    public function getId()
    {
        return $this->id;
    }

    public function getOrderId()
    {
        return $this->orderId;
    }

    public function getApiKey()
    {
        return $this->apiKey;
    }

    public function getGateway()
    {
        return $this->gateway;
    }
}
