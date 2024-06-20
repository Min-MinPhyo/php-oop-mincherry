<?php

interface Message{
    public function sendMessage();
}

class Telenor implements Message{
    public function sendMessage(){
        echo "Send Form Telenor";
    }
}
class Ooredoo implements Message{
    public function sendMessage(){
        echo "Send Form Ooredoo";
    }
}

class Mytel implements Message{
    public function sendMessage(){
        echo "Send Message From Mytel";
    }
}


class Promotion{
    public function send(Message $provider){
        // $provider=new Telenor();
        $provider->sendMessage();

    }
}


$promotion=new Promotion();
$promotion->send(new Mytel);




















?>