<?php

namespace pocketmine\item;

use pocketmine\block\Block;

class JungleDoor extends Item
{
    public function __construct($meta = 0, $count = 1)
    {
        $this->block = Block::get(ItemIds::JUNGLE_DOOR_BLOCK);
        parent::__construct(ItemIds::JUNGLE_DOOR, 0, $count, "Jungle Door");
    }

    public function getMaxStackSize()
    {
        return 64;
    }
}