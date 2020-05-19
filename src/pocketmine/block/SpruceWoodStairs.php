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
use pocketmine\item\Tool;

class SpruceWoodStairs extends Stair
{

    protected $id = self::SPRUCE_WOOD_STAIRS;

    public function __construct($meta = 0)
    {
        $this->meta = $meta;
    }

    public function getName()
    {
        return "Spruce Wood Stairs";
    }

    public function getToolType()
    {
        return Tool::TYPE_AXE;
    }

    public function getDrops(Item $item)
    {
        return [
            [$this->id, 0, 1],
        ];
    }
}