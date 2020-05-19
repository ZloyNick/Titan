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

namespace pocketmine\item\enchantment;


class Enchantment
{

    const TYPE_INVALID = -1;

    const TYPE_ARMOR_PROTECTION = 0;
    const TYPE_ARMOR_FIRE_PROTECTION = 1;
    const TYPE_ARMOR_FALL_PROTECTION = 2; // Feather Falling
    const TYPE_ARMOR_EXPLOSION_PROTECTION = 3; // Blast Protection
    const TYPE_ARMOR_PROJECTILE_PROTECTION = 4;
    const TYPE_ARMOR_THORNS = 5; // 7
    const TYPE_WATER_BREATHING = 6; // Respiration
    const TYPE_WATER_SPEED = 7; // Depth Strider
    const TYPE_WATER_AFFINITY = 8; // Aqua Affinity
    const TYPE_WEAPON_SHARPNESS = 9;
    const TYPE_WEAPON_SMITE = 10;
    const TYPE_WEAPON_ARTHROPODS = 11; // Bane of Arthropods
    const TYPE_WEAPON_KNOCKBACK = 12;
    const TYPE_WEAPON_FIRE_ASPECT = 13;
    const TYPE_WEAPON_LOOTING = 14;
    const TYPE_MINING_EFFICIENCY = 15;
    const TYPE_MINING_SILK_TOUCH = 16;
    const TYPE_MINING_DURABILITY = 17; // Unbreaking
    const TYPE_UNBREAKING = 17; // Unbreaking
    const TYPE_MINING_FORTUNE = 18;
    const TYPE_BOW_POWER = 19;
    const TYPE_BOW_KNOCKBACK = 20;
    const TYPE_BOW_FLAME = 21;
    const TYPE_BOW_INFINITY = 22;
    const TYPE_FISHING_FORTUNE = 23; // Luck of the Sea
    const TYPE_FISHING_LURE = 24;

    const RARITY_COMMON = 0;
    const RARITY_UNCOMMON = 1;
    const RARITY_RARE = 2;
    const RARITY_MYTHIC = 3;

    const ACTIVATION_EQUIP = 0;
    const ACTIVATION_HELD = 1;
    const ACTIVATION_SELF = 2;

    const SLOT_NONE = 0;
    const SLOT_ALL = 0b11111111111111;
    const SLOT_ARMOR = 0b1111;
    const SLOT_HEAD = 0b1;
    const SLOT_TORSO = 0b10;
    const SLOT_LEGS = 0b100;
    const SLOT_FEET = 0b1000;
    const SLOT_SWORD = 0b10000;
    const SLOT_BOW = 0b100000;
    const SLOT_TOOL = 0b111000000;
    const SLOT_HOE = 0b1000000;
    const SLOT_SHEARS = 0b10000000;
    const SLOT_FLINT_AND_STEEL = 0b10000000;
    const SLOT_DIG = 0b111000000000;
    const SLOT_AXE = 0b1000000000;
    const SLOT_PICKAXE = 0b10000000000;
    const SLOT_SHOVEL = 0b10000000000;
    const SLOT_FISHING_ROD = 0b100000000000;
    const SLOT_CARROT_STICK = 0b1000000000000;

    /** @var Enchantment[] */
    protected static $enchantments;
    private $id;
    private $level = 1;
    private $name;
    private $rarity;
    private $activationType;
    private $slot;

    private function __construct($id, $name, $rarity, $activationType, $slot)
    {
        $this->id = (int)$id;
        $this->name = (string)$name;
        $this->rarity = (int)$rarity;
        $this->activationType = (int)$activationType;
        $this->slot = (int)$slot;
    }

    public static function init()
    {
        ItemIds::$enchantments = new \SplFixedArray(256);
        // armor effects
        ItemIds::$enchantments[ItemIds::TYPE_ARMOR_PROTECTION] = new Enchantment(ItemIds::TYPE_ARMOR_PROTECTION, "%enchantment.protect.all", ItemIds::RARITY_COMMON, ItemIds::ACTIVATION_EQUIP, ItemIds::SLOT_ARMOR);
        ItemIds::$enchantments[ItemIds::TYPE_ARMOR_FIRE_PROTECTION] = new Enchantment(ItemIds::TYPE_ARMOR_FIRE_PROTECTION, "%enchantment.protect.fire", ItemIds::RARITY_UNCOMMON, ItemIds::ACTIVATION_EQUIP, ItemIds::SLOT_ARMOR);
        ItemIds::$enchantments[ItemIds::TYPE_ARMOR_FALL_PROTECTION] = new Enchantment(ItemIds::TYPE_ARMOR_FALL_PROTECTION, "%enchantment.protect.fall", ItemIds::RARITY_UNCOMMON, ItemIds::ACTIVATION_EQUIP, ItemIds::SLOT_FEET);
        ItemIds::$enchantments[ItemIds::TYPE_ARMOR_EXPLOSION_PROTECTION] = new Enchantment(ItemIds::TYPE_ARMOR_EXPLOSION_PROTECTION, "%enchantment.protect.explosion", ItemIds::RARITY_UNCOMMON, ItemIds::ACTIVATION_EQUIP, ItemIds::SLOT_ARMOR);
        ItemIds::$enchantments[ItemIds::TYPE_ARMOR_PROJECTILE_PROTECTION] = new Enchantment(ItemIds::TYPE_ARMOR_PROJECTILE_PROTECTION, "%enchantment.protect.projectile", ItemIds::RARITY_UNCOMMON, ItemIds::ACTIVATION_EQUIP, ItemIds::SLOT_ARMOR);
        ItemIds::$enchantments[ItemIds::TYPE_ARMOR_THORNS] = new Enchantment(ItemIds::TYPE_ARMOR_THORNS, "%enchantment.protect.thorns", ItemIds::RARITY_UNCOMMON, ItemIds::ACTIVATION_EQUIP, ItemIds::SLOT_SWORD);
        ItemIds::$enchantments[ItemIds::TYPE_WATER_BREATHING] = new Enchantment(ItemIds::TYPE_WATER_BREATHING, "%enchantment.protect.waterbrething", ItemIds::RARITY_UNCOMMON, ItemIds::ACTIVATION_EQUIP, ItemIds::SLOT_FEET);
        ItemIds::$enchantments[ItemIds::TYPE_WATER_SPEED] = new Enchantment(ItemIds::TYPE_WATER_SPEED, "%enchantment.waterspeed", ItemIds::RARITY_UNCOMMON, ItemIds::ACTIVATION_EQUIP, ItemIds::SLOT_FEET);
        ItemIds::$enchantments[ItemIds::TYPE_WATER_AFFINITY] = new Enchantment(ItemIds::TYPE_WATER_AFFINITY, "%enchantment.protect.wateraffinity", ItemIds::RARITY_UNCOMMON, ItemIds::ACTIVATION_EQUIP, ItemIds::SLOT_FEET);
        // weapon effects
        ItemIds::$enchantments[ItemIds::TYPE_WEAPON_SHARPNESS] = new Enchantment(ItemIds::TYPE_WEAPON_SHARPNESS, "%enchantment.weapon.sharpness", ItemIds::RARITY_UNCOMMON, ItemIds::ACTIVATION_EQUIP, ItemIds::SLOT_SWORD);
        ItemIds::$enchantments[ItemIds::TYPE_WEAPON_SMITE] = new Enchantment(ItemIds::TYPE_WEAPON_SMITE, "%enchantment.weapon.smite", ItemIds::RARITY_UNCOMMON, ItemIds::ACTIVATION_EQUIP, ItemIds::SLOT_SWORD);
        ItemIds::$enchantments[ItemIds::TYPE_WEAPON_ARTHROPODS] = new Enchantment(ItemIds::TYPE_WEAPON_ARTHROPODS, "%enchantment.weapon.arthropods", ItemIds::RARITY_UNCOMMON, ItemIds::ACTIVATION_EQUIP, ItemIds::SLOT_SWORD);
        ItemIds::$enchantments[ItemIds::TYPE_WEAPON_KNOCKBACK] = new Enchantment(ItemIds::TYPE_WEAPON_KNOCKBACK, "%enchantment.weapon.knockback", ItemIds::RARITY_UNCOMMON, ItemIds::ACTIVATION_EQUIP, ItemIds::SLOT_SWORD);
        ItemIds::$enchantments[ItemIds::TYPE_WEAPON_FIRE_ASPECT] = new Enchantment(ItemIds::TYPE_WEAPON_FIRE_ASPECT, "%enchantment.weapon.fireaspect", ItemIds::RARITY_UNCOMMON, ItemIds::ACTIVATION_EQUIP, ItemIds::SLOT_SWORD);
        ItemIds::$enchantments[ItemIds::TYPE_WEAPON_LOOTING] = new Enchantment(ItemIds::TYPE_WEAPON_LOOTING, "%enchantment.weapon.looting", ItemIds::RARITY_UNCOMMON, ItemIds::ACTIVATION_EQUIP, ItemIds::SLOT_SWORD);
        // tool effects
        ItemIds::$enchantments[ItemIds::TYPE_MINING_EFFICIENCY] = new Enchantment(ItemIds::TYPE_MINING_EFFICIENCY, "%enchantment.mining.efficiency", ItemIds::RARITY_UNCOMMON, ItemIds::ACTIVATION_EQUIP, ItemIds::SLOT_TOOL);
        ItemIds::$enchantments[ItemIds::TYPE_MINING_SILK_TOUCH] = new Enchantment(ItemIds::TYPE_MINING_SILK_TOUCH, "%enchantment.mining.silktouch", ItemIds::RARITY_UNCOMMON, ItemIds::ACTIVATION_EQUIP, ItemIds::SLOT_TOOL);
        ItemIds::$enchantments[ItemIds::TYPE_MINING_DURABILITY] = new Enchantment(ItemIds::TYPE_MINING_DURABILITY, "%enchantment.mining.durability", ItemIds::RARITY_UNCOMMON, ItemIds::ACTIVATION_EQUIP, ItemIds::SLOT_TOOL);
        ItemIds::$enchantments[ItemIds::TYPE_MINING_FORTUNE] = new Enchantment(ItemIds::TYPE_MINING_FORTUNE, "%enchantment.mining.fortune", ItemIds::RARITY_UNCOMMON, ItemIds::ACTIVATION_EQUIP, ItemIds::SLOT_TOOL);
        // bow effects
        ItemIds::$enchantments[ItemIds::TYPE_BOW_POWER] = new Enchantment(ItemIds::TYPE_BOW_POWER, "%enchantment.bow.power", ItemIds::RARITY_UNCOMMON, ItemIds::ACTIVATION_EQUIP, ItemIds::SLOT_BOW);
        ItemIds::$enchantments[ItemIds::TYPE_BOW_KNOCKBACK] = new Enchantment(ItemIds::TYPE_BOW_KNOCKBACK, "%enchantment.bow.knockback", ItemIds::RARITY_UNCOMMON, ItemIds::ACTIVATION_EQUIP, ItemIds::SLOT_BOW);
        ItemIds::$enchantments[ItemIds::TYPE_BOW_FLAME] = new Enchantment(ItemIds::TYPE_BOW_FLAME, "%enchantment.bow.flame", ItemIds::RARITY_UNCOMMON, ItemIds::ACTIVATION_EQUIP, ItemIds::SLOT_BOW);
        ItemIds::$enchantments[ItemIds::TYPE_BOW_INFINITY] = new Enchantment(ItemIds::TYPE_BOW_INFINITY, "%enchantment.bow.infinity", ItemIds::RARITY_UNCOMMON, ItemIds::ACTIVATION_EQUIP, ItemIds::SLOT_BOW);
        // fishing rod effects
        ItemIds::$enchantments[ItemIds::TYPE_FISHING_FORTUNE] = new Enchantment(ItemIds::TYPE_FISHING_FORTUNE, "%enchantment.fishing.fortune", ItemIds::RARITY_UNCOMMON, ItemIds::ACTIVATION_EQUIP, ItemIds::SLOT_FISHING_ROD);
        ItemIds::$enchantments[ItemIds::TYPE_FISHING_LURE] = new Enchantment(ItemIds::TYPE_FISHING_LURE, "%enchantment.fishing.lure", ItemIds::RARITY_UNCOMMON, ItemIds::ACTIVATION_EQUIP, ItemIds::SLOT_FISHING_ROD);
    }

    public static function getEffectByName($name)
    {
        if (defined(Enchantment::class . "::TYPE_" . strtoupper($name))) {
            return ItemIds::getEnchantment(constant(Enchantment::class . "::TYPE_" . strtoupper($name)));
        }
        return null;
    }

    /**
     * @param int $id
     * @return $this
     */
    public static function getEnchantment($id)
    {
        if (isset(ItemIds::$enchantments[$id])) {
            return clone ItemIds::$enchantments[(int)$id];
        }
        return new Enchantment(ItemIds::TYPE_INVALID, "unknown", 0, 0, 0);
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getRarity()
    {
        return $this->rarity;
    }

    public function getActivationType()
    {
        return $this->activationType;
    }

    public function getSlot()
    {
        return $this->slot;
    }

    public function hasSlot($slot)
    {
        return ($this->slot & $slot) > 0;
    }

    public function getLevel()
    {
        return $this->level;
    }

    public function setLevel($level)
    {
        $this->level = (int)min(5, $level);

        return $this;
    }

}