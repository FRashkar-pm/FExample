<?php

declare(strict_types=1);

namespace frashkar\fexample\task;

use pocketmine\scheduler\Task;
use pocketmine\Server;

class ExampleTask extends Task
{
    public function __construct(private Server $server)
    {
        //NOOP
    }

    public function onRun() : void
    {
        foreach ($this->server->getOnlinePlayers() as $player)
        {
            $player->sendMessage("Task run on tick " . $this->server->getTick());
        }
    }
}