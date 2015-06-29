<?php

namespace App\Facebook;

use Nette\Object;
use PhpAmqpLib\Message\AMQPMessage;


class NotificationSender extends Object {


    public function __construct() {

    }


    public function process(AMQPMessage $message)
    {
        $data = json_decode($message->body);
        var_dump($data);
    }

}