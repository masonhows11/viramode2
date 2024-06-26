<?php


namespace App\Services\PaymentService\Request;

use App\Services\PaymentService\Interfaces\RequestInterface;

// why this idPayRequest
// Because we may have different inputs
class IDPayRequest implements RequestInterface
{
    private $user;
    private $amount;
    private $orderId;
    private $apiKey;

    public function __construct(array $data)
    {
        $this->user = $data['user'];
        $this->amount = $data['amount'];
        $this->orderId = $data['orderId'];
        $this->apiKey = $data['apiKey'];
    }

    // unique random code in order table
    public function getOrderId()
    {
        return $this->orderId;
    }

    public function getAmount()
    {
        // amount is convert to rials
        // because gateway worked with rials money unit
        return $this->amount * 10;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function getApiKey()
    {
        return $this->apiKey;
    }



}
