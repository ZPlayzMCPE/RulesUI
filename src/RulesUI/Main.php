<?php

namespace RulesUI;

use pocketmine\Server;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\utils\TextFormat;
use pocketmine\Player;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\command\CommandExecutor;
use pocketmine\command\ConsoleCommandSender;

class Main extends PluginBase implements Listener {
	
    public function onEnable() {
		$api = $this->getServer()->getPluginManager()->getPlugin("FormAPI");
		if($api === null){
			$this->getServer()->getPluginManager()->disablePlugin($this);			
		}
    }
	
    public function onCommand(CommandSender $sender, Command $cmd, string $label,array $args) : bool {
		switch($cmd->getName()){
			case "rules":
				if($sender instanceof Player) {
					$api = $this->getServer()->getPluginManager()->getPlugin("FormAPI");
					$form = $api->createSimpleForm(function (Player $sender, array $data){
					$result = $data[0];
					
					if($result === null){
						return true;
					}
						switch($result){
						   
						}
					});
					$form->setTitle("§6Void§bFactions§cPE §dRules");
					$form->setContent("§5Please follow the rules.");
					$form->addButton(TextFormat::BOLD . "§aNo asking for staff");	
					$form->addButton(TextFormat::DARK_RED  . "§bNo griefing server builds.");
					$form->addButton(TextFormat::BLUE  . "§cDon't use hack / mods.");
					$form->addButton(TextFormat::RED  . "§dDon't abuse duplications / exploits.");
					$form->addButton(TextFormat::RED . "§aNo using XRay");
					$form->addButton(TextFormat::RED . "§bDon't spam.");
					$form->addButton(TextFormat::RED . "§cNo advertising.");
					$form->addButton(TextFormat::RED . "§dNo swearing.");
					$form->sendToPlayer($sender);
				}
				else{
					$sender->sendMessage(TextFormat::RED . "Use this Command in-game!");
					return true;
				}
			break;
		}
		return true;
    }
}
