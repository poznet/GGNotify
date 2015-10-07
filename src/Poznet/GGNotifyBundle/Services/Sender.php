<?php
/**
 * Created by PhpStorm.
 * User: pozyc
 * Date: 07.10.2015
 * Time: 23:14
 */

namespace Poznet\GGNotifyBundle\Services;

use Poznet\GGNotifyBundle\Lib\MessageBuilder;
use Poznet\GGNotifyBundle\Lib\PushConnection;

class Sender
{
    private $gg;
    private $login;
    private $pass;
    private $admingg;

    public function __construct($gg,$login,$pass,$admingg){
        $this->gg=$gg;
        $this->login=$login;
        $this->pass=$pass;
        $this->admingg=$admingg;
    }

    public function send($msg){
        $M = new MessageBuilder();
        $P = new PushConnection($this->gg, $this->login, $this->pass);
        $M->addText($msg);
        $M->setRecipients(array($this->admingg));
    }


}