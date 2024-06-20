<?php

class Paypal{
    public function charge(){
        echo "Charge";
    }
}

class Sms{
    public function send(){
        echo "Sms";
    }
}

class shoppingWebsite{
    private $paypal,$sms;

    public function __construct() {
        $this->paypal=new Paypal();
        $this->sms=new Sms();


    }

    public function checkOut(){
        $this->paypal->charge();
        $this->sms->send();
        
    }
}
$shoppingWebsite=new shoppingWebsite();
$shoppingWebsite->checkOut();

?>