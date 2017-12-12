<?php

namespace MultiVersion;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerCreationEvent;

class EventListener implements Listener{
  
  private $plugin;
  
  public function __construct(Loader $plugin){
    $this->plugin = $plugin;
  }
  
  public function getPlugin() : Loader{
    return $this->plugin;
  }
  
  public function onPlayerCreation(PlayerCreationEvent $e){
    //TODO: Set class to MultiPlayer
  }
}
