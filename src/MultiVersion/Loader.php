<?php

namespace MultiVersion;

use pocketmine\plugin\PluginBase;
use pocketmine\network\mcpe\protocol\ProtocolInfo;

class Loader extends PluginBase{
  
  public $oldClients = [];
  
  public function onEnable(){
    if(ProtocolInfo::CURRENT_PROTOCOL !== 150){
      $this->getLogger()->error('Server must accept protocol 150 as its default to run MultiVersion without problems.');
      $this->setEnabled(false);
    }
  }
  
  public function onDisable(){
    //TODO: handle DisconnectPacket for 1.1 clients
  }
  
  
}
