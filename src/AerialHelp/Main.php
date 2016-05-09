<?php
namespace AerialHelp;

use pocketmine\event\Listener;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\plugin\PluginBase;
use pocketmine\Player;
use pocketmine\utils\TextFormat as color;

class Main extends PluginBase Implements Listener{
    
    public function onEnable(){
        $this->getServer()->getPluginManager()->registerEvents($this,$this);
    }
	
	public function onCommand(CommandSender $sender, Command $command, $label, array $args) {
        switch ($command){
            case 'aerialhelp':
			if(strtolower($args[0]) == "aerialhelp") {
						if(!isset($args[1]) || $args[1] == 1) {
							$sender->sendMessage(TextFormat::RED . "[AerialHelp] Command List 1/2;" . TextFormat::BLUE . 
								       "\n
									\n
									\n
									\n
									\n
									\n
									\n
									\n");
							return true;
						}
						if($args[1] == 2) {
							$sender->sendMessage(TextFormat::RED . "[AerialHelp] Command List 2/2;" . TextFormat::BLUE . 
									"\n
									\n
									\n
									\n
									\n
									\n
									\n
									\n
									\n");
							return true;
						}
						    public function onDisable() {

    }

