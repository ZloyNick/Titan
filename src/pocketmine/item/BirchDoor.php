<?php

namespace pocketmine\item;

use pocketmine\block\Block;

class BirchDoor extends Item
{
    public function __construct($meta = 0, $count = 1)
    {
        $this->block = Block::get(ItemIds::BIRCH_DOOR_BLOCK);
        parent::__construct(ItemIds::BIRCH_DOOR, 0, $count, "Birch Door");
    }

    public function getMaxStackSize()
    {
        return 64;
    }
}