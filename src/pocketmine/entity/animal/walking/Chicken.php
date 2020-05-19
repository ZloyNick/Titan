<?php

namespace pocketmine\entity\animal\walking;

use pocketmine\entity\animal\WalkingAnimal;
use pocketmine\entity\Creature;
use pocketmine\event\entity\EntityDamageByEntityEvent;
use pocketmine\item\Item;
use pocketmine\Player;

class Chicken extends WalkingAnimal
{
    const NETWORK_ID = 10;

    public $width = 0.4;
    public $height = 0.75;

    public function getName()
    {
        return "Chicken";
    }

    public function initEntity()
    {
        parent::initEntity();

        $this->setMaxHealth(4);
    }

    public function targetOption(Creature $creature, float $distance)
    {
        if ($creature instanceof Player) {
            return $creature->isAlive() && !$creature->closed && $creature->getInventory()->getItemInHand()->getId() == ItemIds::SEEDS && $distance <= 49;
        }
        return false;
    }

    public function getDrops()
    {
        if ($this->lastDamageCause instanceof EntityDamageByEntityEvent) {
            switch (mt_rand(0, 2)) {
                case 0:
                    return [ItemIds::get(ItemIds::RAW_CHICKEN, 0, 1)];
                case 1:
                    return [ItemIds::get(ItemIds::EGG, 0, 1)];
                case 2:
                    return [ItemIds::get(ItemIds::FEATHER, 0, 1)];
            }
        }
        return [];
    }

}