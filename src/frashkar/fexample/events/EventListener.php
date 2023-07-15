<?php

declare(strict_types=1);

namespace frashkar\fexample\events;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;

class EventListener extends Listener
{
    public function onPlayerJoin(PlayerJoinEvent $event) : void
    {
        $player = $event->getPlayer();
        $player->sendMessage("Welcome to the server.");
    }
}