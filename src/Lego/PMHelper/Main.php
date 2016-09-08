<?php

namespace Lego\PMHelper;

use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat as Colour;
use pocketmine\Player;
use pocketmine\event\player\PlayerCommandPreprocessEvent;

class Main extends PluginBase implements Listener
{
  private PREFIX = "§a[§9MOD§a][§fF:§a]§9 Emily§f>";
  private VERSION = "0.0.1"
  private KICKREASON = Colour::RED . "PMHelper" . Colour::WHITE . " >> You have been kicked for swearing.\n" . Colour::GREEN . "PMHelper by Lego";
  public function onEnable(){
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
    $this->getLogger()->info(Colour::YELLOW . "Emily has joined the game.");
  }
  
  public function onChatCommand(PlayerCommandPreprocessEvent $event){
    $message = $event->getMessage();
    $player = $event->getPlayer();
    if(message{0} != "/") {
    	if(message{0} != "RP:") {
    	  //English
    		$needhelp = array("need", "help");
    		$emilyversion = array("version", "@emily"); // Works for French
    		$languages = array("languages", "speak", "@emily");
    		//French
    		$frenchhelp = array("Besoin", "d'aide");
    		$frenchlangs = array("langues", "parlent", "@emily");
    		//Spanish
    		$spanishhelp = array("necesitas", "ayuda");
    		$spanishvers = array("versión", "@emily");
    		$spanishlangs = array("idiomas", "hablan", "@emily")
    		$messagearray = str_split($message);
    		for($i = 0; $i < count($messagearray); $i++){
    			if(in_array($messagearray[$i], $needhelp)==true) {
    				$this->getServer()->broadcastMessage($this->PREFIX . "Need help? Try using /help for a list of commands.");
    			}elseif(in_array($messagearray[$i], $emilyversion)==true) {
    			  $this->getServer()->broadcastMessage($this->PREFIX . "My current version is: " . Colour::RED . $this->VERSION);
    			}elseif(in_array($messagearray[$i], $languages)==true) {
    			  $this->getServer()->broadcastMessage($this->PREFIX . "I can speak the following languages: English, French, Spanish and Potuguese.");
    			}
    	}
    }
  }
}
public function onDisable() {
  $this->getLogger()->info(Colour::YELLOW . "Emily has left the game.");
}
}
