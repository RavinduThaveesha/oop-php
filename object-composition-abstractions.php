<?php

interface Gateway {
    public function findCustomer();
}

class subscription {

    protected Gateway $gateway;

    public function __construct(Gateway $gateway)
    {
        $this->gateway = $gateway;
    }

    public function create()
    {
        # code...
    }

    public function cancle()
    {
        # code...
    }
}


class StripeGateway implements Gateway {

    public function findCustomer()
    {
        # code...
    }
}


$subscription = new subscription(new StripeGateway());
$subscription->create();

