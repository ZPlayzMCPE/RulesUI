<?php
namespace RulesPE;
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
	
    public function onCommand(CommandSender $sender, Command $command, string $label,array $args) : bool {
				if($sender instanceof Player) {
                                    if (strtolower($command->getName()) === "rules") {
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
			if (strtolower($command->getName()) === "youtubeinfo") {
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
					$form->addButton(TextFormat::DARK_RED  . "§bYou must upload a video about the\nServer (GamePlay)");
					$form->addButton(TextFormat::BLUE  . "§cYou must name the video \nrelating to §6Void§bHCF§cPE");
					$form->addButton(TextFormat::RED  . "§dDon't make a haters review. :)");
					$form->addButton(TextFormat::RED . "§aYou must add the \nip and port \nin the description.");
					$form->addButton(TextFormat::RED . "§bIP: §3voidhcfpe.ml\n§bPort: §325647");
					$form->addButton("§aIf you've made a \nvideo about the server");
					$form->addButton(TextFormat::RED . "§dPlease contact a staff member.");
					$form->addButton("§aWith the discord link:\n§bhtto://tinyurl.com/VMPEDisc");
					$form->sendToPlayer($sender);
				}
			if (strtolower($command->getName()) === "ytplus") {
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
					$form->setTitle("§6Void§bMiner§cPE §cYou§7Tube§4+ §dInfo");
					$form->setContent("§5Here are the requirements:");
					$form->addButton(TextFormat::BOLD . "§aYou must have 300+ subscribers");	
					$form->addButton(TextFormat::DARK_RED  . "§bYou must upload a video about the\nServer (GamePlay)");
					$form->addButton(TextFormat::BLUE  . "§cYou must name the video \nrelating to §6Void§bHCF§cPE");
					$form->addButton(TextFormat::RED  . "§dDon't make a haters review. :)");
					$form->addButton(TextFormat::RED . "§aYou must add the \nip and port \nin the description.");
					$form->addButton(TextFormat::RED . "§bIP: §3voidhcfpe.ml\n§bPort: §325647");
					$form->addButton("§aIf you've made a \nvideo about the server");
					$form->addButton(TextFormat::RED . "§dPlease contact a staff member.");
					$form->addButton("§aWith the discord link:\n§bhtto://tinyurl.com/VMPEDisc");
					$form->sendToPlayer($sender);
				}
			if (strtolower($command->getName()) === "staffrules") {
				if($sender instanceof Player) {
                                    if ($sender->hasPermission("rulesui.staff")) {
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
					$form->addButton(TextFormat::RED . "§aDon’t keep asking me questions. \nJust help the players \n(if any, and if they want or need help) \nDO NOT IGNORE THEM.");
					$form->addButton(TextFormat::RED . "§b Don’t grief the server.");
					$form->addButton(TextFormat::RED . "§aNo abusing your faction power. \n(STR Grinding.)");
					$form->addButton(TextFormat::RED . "§bBe patient. Don’t get too excited, \nas we want to stay and keep \nprofessional.");
					$form->addButton(TextFormat::RED . "§cDon’t use any banned commands \nwhich cheat the game, \nlike /give.");
					$form->addButton(TextFormat::RED . "§dWhen finding Hackers, \nmake sure to report proof and ban them. \nMore info will be in #ban-info.");
					$form->addButton(TextFormat::RED . "§eDon't tp raid, so don't teleport to \nsomeone's base by using \n/tp and raiding it. \nAs that isn't allowed.");
					$form->addButton(TextFormat::RED . "§aDon't abuse /invsee and /pv admin. \nOnly use them if they have an \nabusive item or bannable items / gear.");
					$form->addButton(TextFormat::RED . "§bFollow the warn info in #warn-info. \nFollow the ban info in #ban-info. \nFollow the mute info in #mute-info. \nFollow the kick info in #kick-info. \nFollow the Invsee info in #invsee-info.\non discord");
					$form->addButton(TextFormat::RED . "§cNo advertising.");
					$form->sendToPlayer($sender);
				}
				else{
					$sender->sendMessage(TextFormat::RED . "Use this Command in-game!");
					return true;
				}
                        }
		}
		return true;
    }
                }
                return true;
    }
}
