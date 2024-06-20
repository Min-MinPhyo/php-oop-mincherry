<?php


//trait is the multiple inheritance

trait Paypal{
    public function charge(){
        echo "My name is paypal";
    }
}

trait Sms{
    public function send(){
        echo "My name is sms";
    } 
}

class shoppingMor{
    use Paypal,Sms;


    public function checkOut(){
        $this->charge();
        $this->send();
    }

}




$paypal=new shoppingMor();
$paypal->checkOut();






?>