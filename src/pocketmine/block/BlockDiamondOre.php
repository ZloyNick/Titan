<?php


namespace pocketmine\block;


use pocketmine\item\enchantment\Enchantment;
use pocketmine\item\Item;

class BlockDiamondOre extends DiamondOre
{

    public function getDrops(Item $item)
    {
        if (!$item->isPickaxe()) {
            return [];
        }
        $multiply = 1;
        if ($item->hasEnchantments()) {
            if ($e = $item->getEnchantment(Enchantment::TYPE_MINING_FORTUNE)) {
                $lvl = $e->getLevel();
                if ($lvl == 1) {
                    $multiply += mt_rand(0, 100) < 34 ? 1 : 0;
                } elseif ($lvl == 2) {
                    $multiply += mt_rand(0, 100) < 51 ? mt_rand(1, 2) : 0;
                } elseif ($lvl > 2) {
                    $multiply += mt_rand(0, 100) < 61 ? mt_rand(1, 2) : 0;
                }
            }
        }
        return [[ItemIds::DIAMOND, 0, 1 * $multiply]];
    }

}