<?php

namespace pocketmine\item;

class Beacon extends Item
{

    public function __construct($meta = 0, $count = 1)
    {
        parent::__construct(ItemIds::BEACON, $meta, $count, "Beacon");
    }

}
