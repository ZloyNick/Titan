<?php

namespace pocketmine\item;

class BlazePowder extends Item
{

    public function __construct($meta = 0, $count = 1)
    {
        parent::__construct(ItemIds::BLAZE_POWDER, $meta, $count, ItemIds::$names[ItemIds::BLAZE_POWDER]);
    }

}
