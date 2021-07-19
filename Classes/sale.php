<?php

class Sale{
    private $model_car;
    private $client;
    private $amount;

    public function __construct($model_car, $client, $amount){
        $this->model_car = $model_car;
        $this->client = $client;
        $this->amount = $amount;
    }

    public function approved(){
        if (isset($this->model_car) && isset($this->client) && isset($this->amount)) {
            
            echo "A venda do seu carro foi apovada!".PHP_EOL."{$this->model_car}, {$this->client}, {$this->amount}";

        }else{
            echo "A venda do seu carro nao foi aprovada.";
        }
    }
}