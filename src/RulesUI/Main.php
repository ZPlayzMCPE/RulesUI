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
			case "staffrules":
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
					$form->setContent("Please follow the rules.");
					$form->adddropdown(TextFormat::BOLD . "§aDon’t abuse your power.");	
					$form->adddropdown(TextFormat::DARK_RED  . "Don’t kick/ban/mute/warn players for no reason.");
					$form->adddropdown(TextFormat::BLUE  . "No asking for promotions.");
					$form->adddropdown(TextFormat::RED  . "Never ask for staff!");
					$form->adddropdown(TextFormat::RED . "§aDon’t keep asking me questions. Just help the players (if any, and if they want or need help) DO NOT IGNORE THEM.");
					$form->adddropdown(TextFormat::RED . "§b Don’t grief the server.");
					$form->adddropdown(TextFormat::RED . "§aNo abusing your faction power. (STR Grinding.)");
					$form->adddropdown(TextFormat::RED . "§bBe patient. Don’t get too excited, as we want to stay and keep professional.");
					$form->adddropdown(TextFormat::RED . "§cDon’t use any banned commands which cheat the game, like /give.");
					$form->adddropdown(TextFormat::RED . "§dWhen finding Hackers, make sure to report proof and ban them. (More info will be in #ban-info.");
					$form->adddropdown(TextFormat::RED . "§eDon't tp raid, so don't teleport to someone's base by using /tp and raiding it. As that isn't allowed.");
					$form->adddropdown(TextFormat::RED . "§aDon't abuse /invsee and /pv admin. Only use them if they have an abusive item or bannable items / gear.");
					$form->adddropdown(TextFormat::RED . "§bFollow the warn info in #warn-info. Follow the ban info in #ban-info. Follow the mute info in #mute-info. Follow the kick info in #kick-info. Follow the Invsee info in #invsee-info.");
					$form->adddropdown(TextFormat::RED . "§cNo advertising.");
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
