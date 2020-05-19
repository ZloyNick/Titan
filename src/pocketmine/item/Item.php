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

/**
 * All the Item classes
 */

namespace pocketmine\item;

use pocketmine\block\Block;
use pocketmine\entity\Entity;
use pocketmine\inventory\Fuel;
use pocketmine\item\enchantment\Enchantment;
use pocketmine\level\Level;
use pocketmine\nbt\NBT;
use pocketmine\nbt\tag\Compound;
use pocketmine\nbt\tag\Enum;
use pocketmine\nbt\tag\IntTag;
use pocketmine\nbt\tag\ShortTag;
use pocketmine\nbt\tag\StringTag;
use pocketmine\Player;

//use pocketmine\entity\Zombie;

class Item
{

    public $count;
    protected $block;
    protected $id;
    protected $meta;
    protected $durability = 0;
    protected $name;
    protected $obtainTime = 0;
    protected $canPlaceOnBlocks = [];
    protected $canDestroyBlocks = [];
    private $tags = "";
    private $cachedNBT = null;

    public function __construct($id, $meta = 0, $count = 1, $name = "Unknown", $obtainTime = null)
    {
        $this->id = $id & 0xffff;
        $this->meta = $meta !== null ? $meta & 0x7fff : null;
        $this->count = (int)$count;
        $this->name = $name;
        if ($obtainTime == null) {
            $obtainTime = time();
        }
        if (!isset($this->block) and $this->id <= 0xff and isset(Block::$list[$this->id])) {
            $this->block = Block::get($this->id, $this->meta);
            $this->name = $this->block->getName();
        }
        if ($this->name == "Unknown" && isset(ItemIds::$names[$this->id])) {
            $this->name = ItemIds::$names[$this->id];
        }
    }

    private static $cachedParser = null;

    public function setCompound($tags)
    {
        if ($tags instanceof Compound) {
            $this->setNamedTag($tags);
        } else {
            $this->tags = $tags;
            $this->cachedNBT = null;
        }

        return $this;
    }

    public function setNamedTag(Compound $tag)
    {
        if ($tag->getCount() === 0) {
            return $this->clearNamedTag();
        }

        $this->cachedNBT = $tag;
        $this->tags = self::writeCompound($tag);

        return $this;
    }

    public function clearNamedTag()
    {
        return $this->setCompound("");
    }

    /**
     * @param Compound $tag
     * @return string
     */
    private static function writeCompound(Compound $tag)
    {
        if (self::$cachedParser === null) {
            self::$cachedParser = new NBT(NBT::LITTLE_ENDIAN);
        }

        self::$cachedParser->setData($tag);
        return self::$cachedParser->write(true);
    }

    final public function getId()
    {
        return $this->id;
    }

    public function getDamage()
    {
        return $this->meta;
    }

    final public function equals(Item $item, $checkDamage = true, $checkCompound = true)
    {
        return $this->id === $item->getId() && ($checkDamage === false || $this->getDamage() === $item->getDamage()) && ($checkCompound === false || $this->getCompound() === $item->getCompound());
    }

    /**
     * @return string
     */
    public function getCompound()
    {
        return $this->tags;
    }

    /**
     * @return bool
     */
    public function isTool()
    {
        return false;
    }

    public static function isCreativeItem(Item $item)
    {
        foreach (ItemIds::$creative as $i => $d) {
            if ($item->equals($d['item'], !$item->isTool())) {
                return true;
            }
        }

        return false;
    }

    /**
     * @param $index
     * @return Item
     */
    public static function getCreativeItem($index)
    {
        return isset(ItemIds::$creative[$index]) ? ItemIds::$creative[$index]['item'] : null;
    }

    public static function fromString($str, $multiple = false)
    {
        if ($multiple === true) {
            $blocks = [];
            foreach (explode(",", $str) as $b) {
                $blocks[] = self::fromString($b, false);
            }

            return $blocks;
        } else {
            $b = explode(":", str_replace([" ", "minecraft:"], ["_", ""], trim($str)));
            if (!isset($b[1])) {
                $meta = 0;
            } else {
                $meta = $b[1] & 0x7FFF;
            }

            if (defined(ItemIds::class . "::" . strtoupper($b[0]))) {
                $item = self::get(constant(ItemIds::class . "::" . strtoupper($b[0])), $meta);
                if ($item->getId() === self::AIR and strtoupper($b[0]) !== "AIR") {
                    $item = self::get($b[0] & 0xFFFF, $meta);
                }
            } else {
                $item = self::get($b[0] & 0xFFFF, $meta);
            }

            return $item;
        }
    }

    public static function registerItemBlock($className)
    {
        if (is_a($className, ItemBlock::class, true)) {
            self::$itemBlockClass = $className;
        }
    }

    public function canBeActivated()
    {
        return false;
    }

    public function hasCustomBlockData()
    {
        if (!$this->hasCompound()) {
            return false;
        }

        $tag = $this->getNamedTag();
        if (isset($tag->BlockEntityTag) and $tag->BlockEntityTag instanceof Compound) {
            return true;
        }

        return false;
    }

    public function hasCompound()
    {
        return $this->tags !== "" and $this->tags !== null;
    }

    public function getNamedTag()
    {
        if (!$this->hasCompound()) {
            return null;
        } elseif ($this->cachedNBT !== null) {
            return $this->cachedNBT;
        }
        return $this->cachedNBT = self::parseCompound($this->tags);
    }

    /**
     * @param $tag
     * @return Compound
     */
    private static function parseCompound($tag)
    {
        if (self::$cachedParser === null) {
            self::$cachedParser = new NBT(NBT::LITTLE_ENDIAN);
        }

        self::$cachedParser->read($tag);
        return self::$cachedParser->getData();
    }

    public function clearCustomBlockData()
    {
        if (!$this->hasCompound()) {
            return $this;
        }
        $tag = $this->getNamedTag();

        if (isset($tag->BlockEntityTag) and $tag->BlockEntityTag instanceof Compound) {
            unset($tag->display->BlockEntityTag);
            $this->setNamedTag($tag);
        }

        return $this;
    }

    public function setCustomBlockData(Compound $compound)
    {
        $tags = clone $compound;
        $tags->setName("BlockEntityTag");

        if (!$this->hasCompound()) {
            $tag = new Compound("", []);
        } else {
            $tag = $this->getNamedTag();
        }

        $tag->BlockEntityTag = $tags;
        $this->setNamedTag($tag);

        return $this;
    }

    public function getCustomBlockData()
    {
        if (!$this->hasCompound()) {
            return null;
        }

        $tag = $this->getNamedTag();
        if (isset($tag->BlockEntityTag) and $tag->BlockEntityTag instanceof Compound) {
            return $tag->BlockEntityTag;
        }

        return null;
    }

    /**
     * @param $id
     * @return Enchantment|null
     */
    public function getEnchantment($id)
    {
        if (!$this->hasEnchantments()) {
            return null;
        }

        foreach ($this->getNamedTag()->ench as $entry) {
            if ($entry["id"] === $id) {
                $e = Enchantment::getEnchantment($entry["id"]);
                $e->setLevel($entry["lvl"]);
                return $e;
            }
        }

        return null;
    }

    public function hasEnchantments()
    {
        if (!$this->hasCompound()) {
            return false;
        }

        $tag = $this->getNamedTag();
        if (isset($tag->ench)) {
            $tag = $tag->ench;
            if ($tag instanceof Enum) {
                return true;
            }
        }

        return false;
    }

    /**
     * @param Enchantment $ench
     */
    public function addEnchantment(Enchantment $ench)
    {
        if (!$this->hasCompound()) {
            $tag = new Compound("", []);
        } else {
            $tag = $this->getNamedTag();
        }

        if (!isset($tag->ench)) {
            $tag->ench = new Enum("ench", []);
            $tag->ench->setTagType(NBT::TAG_Compound);
        }

        $found = false;
        $maxIntIndex = -1;
        foreach ($tag->ench as $k => $entry) {
            if (is_numeric($k) && $k > $maxIntIndex) {
                $maxIntIndex = $k;
            }
            if ($entry["id"] === $ench->getId()) {
                $tag->ench->{$k} = new Compound("", [
                    "id" => new ShortTag("id", $ench->getId()),
                    "lvl" => new ShortTag("lvl", $ench->getLevel())
                ]);
                $found = true;
                break;
            }
        }

        if (!$found) {
//			$tag->ench->{count($tag->ench) + 1} = new Compound("", [
            $tag->ench->{$maxIntIndex + 1} = new Compound("", [
                "id" => new ShortTag("id", $ench->getId()),
                "lvl" => new ShortTag("lvl", $ench->getLevel())
            ]);
        }

        $this->setNamedTag($tag);
    }

    /**
     * @return Enchantment[]
     */
    public function getEnchantments()
    {
        if (!$this->hasEnchantments()) {
            return [];
        }

        $enchantments = [];

        foreach ($this->getNamedTag()->ench as $entry) {
            $e = Enchantment::getEnchantment($entry["id"]);
            $e->setLevel($entry["lvl"]);
            $enchantments[$e->getId()] = $e;
        }

        return $enchantments;
    }

    public function setCustomName($name)
    {
        if ((string)$name === "") {
            $this->clearCustomName();
        }

        if (!$this->hasCompound()) {
            $tag = new Compound("", []);
        } else {
            $tag = $this->getNamedTag();
        }

        if (isset($tag->display) and $tag->display instanceof Compound) {
            $tag->display->Name = new StringTag("Name", $name);
        } else {
            $tag->display = new Compound("display", [
                "Name" => new StringTag("Name", $name)
            ]);
        }

        $this->setCompound($tag);

        return $this;
    }

    public function clearCustomName()
    {
        if (!$this->hasCompound()) {
            return $this;
        }
        $tag = $this->getNamedTag();

        if (isset($tag->display) and $tag->display instanceof Compound) {
            unset($tag->display->Name);
            if ($tag->display->getCount() === 0) {
                unset($tag->display);
            }

            $this->setNamedTag($tag);
        }

        return $this;
    }

    public function setCustomColor($colorCode)
    {
        if (!$this->hasCompound()) {
            if (!is_int($colorCode)) {
                return $this;
            }
            $tag = new Compound("", []);
        } else {
            $tag = $this->getNamedTag();
        }
        if (!is_int($colorCode)) {
            unset($tag->customColor);
        } else {
            $tag->customColor = new IntTag("customColor", $colorCode);
        }

        $this->setCompound($tag);

        return $this;
    }

    public function getNamedTagEntry($name)
    {
        $tag = $this->getNamedTag();
        if ($tag !== null) {
            return isset($tag->{$name}) ? $tag->{$name} : null;
        }

        return null;
    }

    public function getCount()
    {
        return $this->count;
    }

    public function setCount($count)
    {
        $this->count = (int)$count;
    }

    final public function getName()
    {
        return $this->hasCustomName() ? $this->getCustomName() : $this->name;
    }

    public function hasCustomName()
    {
        if (!$this->hasCompound()) {
            return false;
        }

        $tag = $this->getNamedTag();
        if (isset($tag->display)) {
            $tag = $tag->display;
            if ($tag instanceof Compound and isset($tag->Name) and $tag->Name instanceof StringTag) {
                return true;
            }
        }

        return false;
    }

    public function getCustomName()
    {
        if (!$this->hasCompound()) {
            return "";
        }

        $tag = $this->getNamedTag();
        if (isset($tag->display)) {
            $tag = $tag->display;
            if ($tag instanceof Compound and isset($tag->Name) and $tag->Name instanceof StringTag) {
                return $tag->Name->getValue();
            }
        }

        return "";
    }

    final public function canBePlaced()
    {
        return $this->block !== null and $this->block->canBePlaced();
    }

    final public function isPlaceable()
    {
        return (($this->block instanceof Block) and $this->block->isPlaceable === true);
    }

    public function getBlock()
    {
        if ($this->block instanceof Block) {
            return clone $this->block;
        } else {
            return Block::get(ItemIds::AIR);
        }
    }

    public function setDamage($meta)
    {
        $this->meta = $meta !== null ? $meta & 0x7FFF : null;
    }

    public function getMaxStackSize()
    {
        return 64;
    }

    final public function getFuelTime()
    {
        if (!isset(Fuel::$duration[$this->id])) {
            return null;
        }
        if ($this->id !== ItemIds::BUCKET or $this->meta === 10) {
            return Fuel::$duration[$this->id];
        }

        return null;
    }

    /**
     * @param Entity|Block $object
     *
     * @return bool
     */
    public function useOn($object)
    {
        return false;
    }

    /**
     * @return int|bool
     */
    public function getMaxDurability()
    {
        return false;
    }

    public function isPickaxe()
    {
        return false;
    }

    public function isAxe()
    {
        return false;
    }

    public function isSword()
    {
        return false;
    }

    public function isShovel()
    {
        return false;
    }

    public function isHoe()
    {
        return false;
    }

    public function isShears()
    {
        return false;
    }

    final public function __toString()
    {
        return "Item " . $this->name . " (" . $this->id . ":" . ($this->meta === null ? "?" : $this->meta) . ")x" . $this->count . ($this->hasCompound() ? " tags:0x" . bin2hex($this->getCompound()) : "");
    }

    public function getDestroySpeed(Block $block, Player $player)
    {
        return 1;
    }

    public function onActivate(Level $level, Player $player, Block $block, Block $target, $face, $fx, $fy, $fz)
    {
        return false;
    }

    public final function deepEquals(Item $item, $checkDamage = true, $checkCompound = true)
    {
        if ($this->equals($item, $checkDamage, $checkCompound)) {
            return true;
        } elseif ($item->hasCompound() and $this->hasCompound()) {
            return NBT::matchTree($this->getNamedTag(), $item->getNamedTag());
        }

        return false;
    }

    public function isFood()
    {
        return in_array($this->id, ItemIds::$food);
    }

    public function getObtainTime()
    {
        return $this->obtainTime;
    }

    public function setObtainTime($time)
    {
        $this->obtainTime = $time;
    }

    public function isArmor()
    {
        return false;
    }

    public function hasLore()
    {
        if (!$this->hasCompound()) {
            return false;
        }

        $tag = $this->getNamedTag();
        if (isset($tag->display)) {
            $tag = $tag->display;
            if ($tag instanceof Compound and isset($tag->Lore) and $tag->Lore instanceof Enum) {
                return true;
            }
        }

        return false;
    }

    public function getLore()
    {
        if (!$this->hasCompound()) {
            return "";
        }

        $tag = $this->getNamedTag();
        if (isset($tag->display)) {
            $tag = $tag->display;
            if ($tag instanceof Compound and isset($tag->Lore) and $tag->Lore instanceof Enum) {
                return $tag->Lore->getValue();
            }
        }

        return [];
    }

    public function setLore($lore)
    {
        if (!$this->hasCompound()) {
            $tag = new Compound("", []);
        } else {
            $tag = $this->getNamedTag();
        }

        $loreArray = [];
        foreach ($lore as $loreText) {
            $loreArray[] = new StringTag("", $loreText);
        }

        if (isset($tag->display) and $tag->display instanceof Compound) {
            $tag->display->Lore = new Enum("Lore", $loreArray);
        } else {
            $tag->display = new Compound("display", [
                "Lore" => new Enum("Lore", $loreArray)
            ]);
        }

        $this->setCompound($tag);

        return $this;
    }

    public function getCanPlaceOnBlocks()
    {
        return $this->canPlaceOnBlocks;
    }

    public function getCanDestroyBlocks()
    {
        return $this->canDestroyBlocks;
    }

    public function addCanPlaceOnBlocks($blockName)
    {
        $this->canPlaceOnBlocks[$blockName] = $blockName;
    }

    public function addCanDestroyBlocks($blockName)
    {
        $this->canDestroyBlocks[$blockName] = $blockName;
    }

}
