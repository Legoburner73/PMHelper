<?php

namespace Lego\PMHelper;

use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat as Colour;
use pocketmine\Player;
use pocketmine\event\player\PlayerCommandPreprocessEvent;

class Main extends PluginBase implements Listener
{
  private PREFIX = 
  public function onEnable(){
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
    $this->getLogger()->info(Colour::YELLOW . " has joined the game.");
  }
  
  public function onChatCommand(PlayerCommandPreprocessEvent $event){
    $message = $event->getMessage();
		$player = $event->getPlayer();
  }
}
