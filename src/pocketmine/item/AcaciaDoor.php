<?php

namespace pocketmine\item;

use pocketmine\block\Block;

class AcaciaDoor extends Item
{
    public function __construct($meta = 0, $count = 1)
    {
        $this->block = Block::get(ItemIds::ACACIA_DOOR_BLOCK);
        parent::__construct(ItemIds::ACACIA_DOOR, 0, $count, "Acacia Door");
    }

    public function getMaxStackSize()
    {
        return 64;
    }
}