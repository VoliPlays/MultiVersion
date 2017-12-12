<?php

namespace MultiVersion;

use pocketmine\network\SourceInterface;
use pocketmine\Player;

class MultiPlayer extends Player{
  
  public function __construct(SourceInterface $interface, $clientID, $ip, $port)
    {
        parent::__construct($interface, $clientID, $ip, $port);
    }
  
  
}
