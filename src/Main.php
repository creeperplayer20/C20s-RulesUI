<?php

declare(strict_types=1);

namespace creeperplayer20\RulesUI;

use pocketmine\plugin\PluginBase;
use jojoe77777\FormAPI\CustomForm;
use pocketmine\player\Player;
use pocketmine\event\Listener;
use pocketmine\Server;
use pocketmine\console\ConsoleCommandSender;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class Main extends PluginBase{

public function rulesForm($player){
    $form = new CustomForm(function(Player $player, $data){
        if($data === null){

            return true;
        }
        switch($data){
            case 0:
                
            break;
        }});
        $form->setTitle($this->getConfig()->get("title"));
        $form->addLabel($this->getConfig()->get("content"));
        $player->sendForm($form);
    }

public function onCommand(CommandSender $sender,Command $cmd,string $label,array $args) : bool{

if($cmd->getName() == "rules"){

    $this->rulesForm($sender);

} return true;
        
}}
