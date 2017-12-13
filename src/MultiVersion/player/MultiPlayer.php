<?php

namespace MultiVersion\player;

use pocketmine\network\SourceInterface;

class MultiPlayer{
  
  public $inventory;
  
  private $disallowedPackets = [52,35,46,47,22]; //TODO: Add other incompatible packets.
  
  public function __construct(SourceInterface $interface, $clientID, $ip, $port){
        //TODO: set inventory
        parent::__construct($interface, $clientID, $ip, $port);
  }
  
  public function getDissalowedPackets() : array{
    return $this->disallowedPackets;
  }
  
  
  
  public function getInventory(){
    //TODO: Send correct inventory
  }
  
  
}
