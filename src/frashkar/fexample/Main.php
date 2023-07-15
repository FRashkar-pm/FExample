<?php

declare(strict_types=1);

namespace frashkar\fexample;

use pocketmine\command\{Command, CommandSender};
use pocketmine\player\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\SingletonTrait;

class Main extends PluginBase
{
    use SingletonTrait;

    protected function onEnable() : void
    {
        self::setInstance($this);
    }

    public function onCommand(CommandSender $sender, Command $command, string $label, array $args) : bool 
    {
        if ($command->getName() === "fexample")
        {
            if (!$sender instanceof Player)
            {
                $sender->sendMessage("You are not player.");
            } else {
                $sender->sendMessage("This is example plugin.");
            }
            return true;
        }
        return false;
    }
}