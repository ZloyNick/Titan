<?php

namespace pocketmine\entity\monster\walking;

use pocketmine\entity\Creature;
use pocketmine\entity\Entity;
use pocketmine\entity\monster\WalkingMonster;
use pocketmine\event\entity\EntityDamageByEntityEvent;
use pocketmine\event\entity\EntityDamageEvent;
use pocketmine\item\Item;
use pocketmine\math\Vector3;
use pocketmine\Player;

class IronGolem extends WalkingMonster
{
    const NETWORK_ID = 20;

    public $width = 1.9;
    public $height = 2.1;

    public function getSpeed()
    {
        return 0.8;
    }

    public function initEntity()
    {
        $this->setMaxHealth(100);
        parent::initEntity();

        $this->setFriendly(true);
        $this->setDamage([0, 21, 21, 21]);
        $this->setMinDamage([0, 7, 7, 7]);
    }

    public function getName()
    {
        return "IronGolem";
    }

    public function attackEntity(Entity $player)
    {
        if ($this->attackDelay > 10 && $this->distanceSquared($player) < 4) {
            $this->attackDelay = 0;

            $ev = new EntityDamageByEntityEvent($this, $player, EntityDamageEvent::CAUSE_ENTITY_ATTACK, $this->getDamage());
            $player->attack($ev->getFinalDamage(), $ev);
            $player->setMotion(new Vector3(0, 0.7, 0));
        }
    }

    public function targetOption(Creature $creature, float $distance)
    {
        if (!($creature instanceof Player)) {
            return $creature->isAlive() && $distance <= 60;
        }
        return false;
    }

    public function getDrops()
    {
        if ($this->lastDamageCause instanceof EntityDamageByEntityEvent) {
            switch (mt_rand(0, 2)) {
                case 0:
                    return [ItemIds::get(ItemIds::FEATHER, 0, 1)];
                case 1:
                    return [ItemIds::get(ItemIds::CARROT, 0, 1)];
                case 2:
                    return [ItemIds::get(ItemIds::POTATO, 0, 1)];
            }
        }
        return [];
    }

}
