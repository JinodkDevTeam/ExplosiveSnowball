<?php

declare(strict_types=1);

namespace ExplosiveSnowball;

use pocketmine\entity\EntityFactory;
use pocketmine\item\ItemFactory;
use pocketmine\plugin\PluginBase;
use pocketmine\entity\EntityDataHelper;
use pocketmine\data\bedrock\EntityLegacyIds;
use pocketmine\world\World;
use pocketmine\nbt\tag\CompoundTag;
use ExplosiveSnowball\entity\ExplosiveSnowball;
use pocketmine\item\ItemIdentifier;
use pocketmine\item\ItemIds;
use ExplosiveSnowball\item\SnowBall;

class Loader extends PluginBase{
	public function onLoad() : void{
		EntityFactory::getInstance()->register(ExplosiveSnowball::class, function(World $world, CompoundTag $nbt) : ExplosiveSnowball{
			return new ExplosiveSnowBall(EntityDataHelper::parseLocation($nbt, $world), null, $nbt);
		}, ['Snowball', 'minecraft:snowball'], EntityLegacyIds::SNOWBALL);

		ItemFactory::getInstance()->register(new Snowball(new ItemIdentifier(ItemIds::SNOWBALL, 0), "Snowball"), true);
	}
}