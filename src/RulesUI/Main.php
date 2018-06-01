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
					$form->setTitle("§6Void§bMiner§cPE §cYou§7Tube §dInfo");
					$form->setContent("§5Here are the requirements:");
					$form->addButton(TextFormat::BOLD . "§aYou must have 50+ subscribers");	
					$form->addButton(TextFormat::DARK_RED  . "§bYou must upload a video about the server\n(GamePlay)");
					$form->addButton(TextFormat::BLUE  . "§cYou must name the video relating to VoidFactionsPE");
					$form->addButton(TextFormat::RED  . "§dDon't make a haters review. :)");
					$form->addButton(TextFormat::RED . "§aYou must add the ip and port in the description.");
					$form->addButton(TextFormat::RED . "§bIP: §3voidhcfpe.ml\n§bPort: §325647");
					$form->addButton("§aIf you've made a video about the server");
					$form->addButton(TextFormat::RED . "§dPlease contact a staff member.");
					$form->addButton("§aWith the discord link: §bhtto://tinyurl.com/VMPEDisc");
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
