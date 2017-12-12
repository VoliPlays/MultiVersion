<?php

namespace MultiVersion;

use pocketmine\plugin\PluginBase;
use pocketmine\network\mcpe\protocol\ProtocolInfo;

class Loader extends PluginBase{
  
  /** @var array $oldClients */
  public $oldClients = [];
  
  /** @var bool $onlineMode */
  public $onlineMode = false;
  
  public function onEnable(){
    if(ProtocolInfo::CURRENT_PROTOCOL !== 150){
      $this->getLogger()->error('Server must accept protocol 150 as its default to run MultiVersion without problems.');
      $this->setEnabled(false);
      return false;
    }
    $this->saveDefaultConfig();
    
    $this->onlineMode = $this->getConfig()->get('onlineMode');
    $this->getServer()->registerEvents(new EventListener($this), $this);
    
  }
  
  public function onDisable(){
    //TODO: handle DisconnectPacket for 1.1 clients
  }
  
  
}
