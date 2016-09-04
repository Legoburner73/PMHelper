<?php

namespace Lego\PMHelper;

use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat as Colour;
use pocketmine\Player;
use pocketmine\event\player\PlayerCommandPreprocessEvent;

class Main extends PluginBase implements Listener
{
  private PREFIX = "§a[§2MVP+§a]§2 Emily";
  private VERSION = "0.0.1"
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
    		$emilyversion = array("version", "emily");
    		$messagearray = str_split($message);
    		for($i = 0; $i < count($messagearray); $i++){
    			if(in_array($messagearray[$i], $needhelp)==true) {
    				$player->sendMessage($this->PREFIX . Colour::LIGHT_GREY . "Need help? Try using /help for a list of commands.");
    			}elseif(in_array($messagearray[$1], $emilyversion)==true) {
    			  $player->sendMessage($this->PREFIX . Colour::LIGHT_GREY . "My current version is: " . Colour::RED . $this->VERSION);
    			}
    	}
    }
  }
}
}
