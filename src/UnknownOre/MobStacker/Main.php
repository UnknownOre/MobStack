<?php

declare(strict_types=1);

namespace UnknownOre\MobStacker;

use pocketmine\plugin\PluginBase;

class Main extends PluginBase{
    public function onEnable() : void{
    $this->getServer()->getPluginManager()->registerEvents(new EventHandler(),$this);
    }
}
