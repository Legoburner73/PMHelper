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
    if(message{0} != "/") {
    	if(message{0} != "RP:") {
    		$needhelp = array("need", "help");
    		$messagearray = str_split($message);
    		for($i = 0; $i < count($messagearray); $i++){
    			if(in_array($messagearray[$i], $needhelp)==true) {
    				$player->sendMessage("Need help? Try using /help for a list of commands.");
    			}
    	}
    }
  }
}
}
