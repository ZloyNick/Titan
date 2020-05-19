<?php

namespace pocketmine\item;

class PrismarineCrystal extends Item
{

    protected $id = ItemIds::PRISMARINE_CRYSTAL;

    public function __construct($meta = 0, $count = 1)
    {
        parent::__construct(ItemIds::PRISMARINE_CRYSTAL, 0, $count, "Prismarine Crystal");
    }
}
