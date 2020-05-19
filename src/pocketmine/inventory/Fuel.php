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

namespace pocketmine\inventory;

use pocketmine\item\Item;

//TODO: remove this
abstract class Fuel
{
    public static $duration = [
        ItemIds::COAL => 1600,
        ItemIds::COAL_BLOCK => 16000,
        ItemIds::TRUNK => 300,
        ItemIds::WOODEN_PLANKS => 300,
        ItemIds::SAPLING => 100,
        ItemIds::WOODEN_AXE => 200,
        ItemIds::WOODEN_PICKAXE => 200,
        ItemIds::WOODEN_SWORD => 200,
        ItemIds::WOODEN_SHOVEL => 200,
        ItemIds::WOODEN_HOE => 200,
        ItemIds::STICK => 100,
        ItemIds::FENCE => 300,
        ItemIds::FENCE_GATE => 300,
        ItemIds::FENCE_GATE_SPRUCE => 300,
        ItemIds::FENCE_GATE_BIRCH => 300,
        ItemIds::FENCE_GATE_JUNGLE => 300,
        ItemIds::FENCE_GATE_ACACIA => 300,
        ItemIds::FENCE_GATE_DARK_OAK => 300,
        ItemIds::WOODEN_STAIRS => 300,
        ItemIds::SPRUCE_WOOD_STAIRS => 300,
        ItemIds::BIRCH_WOOD_STAIRS => 300,
        ItemIds::JUNGLE_WOOD_STAIRS => 300,
        ItemIds::TRAPDOOR => 300,
        ItemIds::WORKBENCH => 300,
        ItemIds::BOOKSHELF => 300,
        ItemIds::CHEST => 300,
        ItemIds::BUCKET => 20000,
    ];

}