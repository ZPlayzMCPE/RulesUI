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
					$form->addButton(TextFormat::BOLD . "§aDon’t abuse your power.");	
					$form->addButton(TextFormat::DARK_RED  . "Don’t kick/ban/mute/warn players for no reason.");
					$form->addButton(TextFormat::BLUE  . "No asking for promotions.");
					$form->addButton(TextFormat::RED  . "Never ask for staff!");
					$form->addButton(TextFormat::RED . "§aDon’t keep asking me questions. \nJust help the players (if any, and if they want or need help) \nDO NOT IGNORE THEM.");
					$form->addButton(TextFormat::RED . "§b Don’t grief the server.");
					$form->addButton(TextFormat::RED . "§aNo abusing your faction power. (STR Grinding.)");
					$form->addButton(TextFormat::RED . "§bBe patient. Don’t get too excited, \nas we want to stay and keep professional.");
					$form->addButton(TextFormat::RED . "§cDon’t use any banned commands which cheat the game, like /give.");
					$form->addButton(TextFormat::RED . "§dWhen finding Hackers, make sure to report proof and ban them. \nMore info will be in #ban-info.");
					$form->addButton(TextFormat::RED . "§eDon't tp raid, so don't teleport to someone's base by using /tp and raiding it. \nAs that isn't allowed.");
					$form->addButton(TextFormat::RED . "§aDon't abuse /invsee and /pv admin. Only use them if they have an \nabusive item or bannable items / gear.");
					$form->addButton(TextFormat::RED . "§bFollow the warn info in #warn-info. Follow the ban info in #ban-info. \nFollow the mute info in #mute-info. \nFollow the kick info in #kick-info. \nFollow the Invsee info in #invsee-info.");
					$form->addButton(TextFormat::RED . "§cNo advertising.");
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
