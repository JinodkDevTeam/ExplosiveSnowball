<?php

declare(strict_types=1);

namespace ExplosiveSnowball\item;

use pocketmine\item\Snowball as PMSnowball;
use pocketmine\entity\Location;
use pocketmine\entity\projectile\Throwable;
use pocketmine\player\Player;
use ExplosiveSnowball\entity\ExplosiveSnowball;

class SnowBall extends PMSnowball{
	protected function createEntity(Location $location, Player $thrower) : Throwable{
		return new ExplosiveSnowball($location, $thrower);
	}
}
