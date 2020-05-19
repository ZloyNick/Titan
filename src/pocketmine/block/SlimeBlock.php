<?php

/*
 *
 *  ____            _        _   __  __ _                  __  __ ____  
 * |  _ \ ___   ___| | _____| |_|  \/  (_)_ __   ___      |  \/  |  _ \ 
 * | |_) / _ \ / __| |/ / _ \ __| |\/| | | '_ \ / _ \_____| |\/| | |_) |
 * |  __/ (_) | (__|   <  __/ |_| |  | | | | | |  __/_____| |  | |  __/ 
 * |_|   \___/ \___|_|\_\___|\__|_|  |_|_|_| |_|\___|     |_|  |_|_| 
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * @author PocketMine Team
 * @link http://www.pocketmine.net/
 * 
 *
*/

namespace pocketmine\block;

use pocketmine\item\Item;
use pocketmine\Player;

class SlimeBlock extends Solid
{

    protected $id = self::SLIME_BLOCK;

    public function __construct()
    {

    }

    public function getHardness()
    {
        return 0;
    }

    public function getName()
    {
        return "Slime Block";
    }

    public function getDrops(Item $item)
    {
        return [
            [Item::SLIME_BLOCK, 0, 1],
        ];
    }

    public function onUpdate($type)
    {
    }

    public function onActivate(Item $item, Player $player = null)
    {
        return false;
    }
}