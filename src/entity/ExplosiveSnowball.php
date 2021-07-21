<?php

declare(strict_types=1);

namespace ExplosiveSnowball\entity;

use pocketmine\entity\projectile\Snowball;
use pocketmine\event\entity\ProjectileHitEvent;
use pocketmine\world\Explosion;

class ExplosiveSnowball extends Snowball{
	public function onHit(ProjectileHitEvent $event) : void{
		$explosion = new Explosion($this->getPosition(), 4);
		$explosion->explodeA();
		$explosion->explodeB();
		parent::onHit($event);
	}
}
