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


use pocketmine\block\Planks;
use pocketmine\block\Quartz;
use pocketmine\block\Sandstone;
use pocketmine\block\Slab;
use pocketmine\block\Slab2;
use pocketmine\block\Stone;
use pocketmine\block\StoneBricks;
use pocketmine\block\StoneWall;
use pocketmine\block\Wood;
use pocketmine\block\Wood2;
use pocketmine\item\Item;
use pocketmine\utils\UUID;

class CraftingManager
{

    private static $RECIPE_COUNT = 0;
    /** @var Recipe[] */
    public $recipes = [];
    /** @var FurnaceRecipe[] */
    public $furnaceRecipes = [];
    /** @var Recipe[][] */
    protected $recipeLookup = [];

    public function __construct()
    {

        $this->registerStonecutter();
        $this->registerFurnace();


        $this->registerDyes();
        $this->registerIngots();
        $this->registerTools();
        $this->registerWeapons();
        $this->registerArmor();
        $this->registerFood();

        $this->registerRecipe((new ShapelessRecipe(ItemIds::get(ItemIds::CLAY_BLOCK, 0, 1)))->addIngredient(ItemIds::get(ItemIds::CLAY, 0, 4)));

        $this->registerRecipe((new ShapedRecipe(ItemIds::get(ItemIds::WORKBENCH, 0, 1),
            "XX",
            "XX"
        ))->setIngredient("X", ItemIds::get(ItemIds::WOODEN_PLANK, -1)));

        $this->registerRecipe((new ShapelessRecipe(ItemIds::get(ItemIds::GLOWSTONE_BLOCK, 0, 1)))->addIngredient(ItemIds::get(ItemIds::GLOWSTONE_DUST, 0, 4)));
        $this->registerRecipe((new ShapelessRecipe(ItemIds::get(ItemIds::LIT_PUMPKIN, 0, 1)))->addIngredient(ItemIds::get(ItemIds::PUMPKIN, 0, 1))->addIngredient(ItemIds::get(ItemIds::TORCH, 0, 1)));

        $this->registerRecipe((new ShapedRecipe(ItemIds::get(ItemIds::SNOW_BLOCK, 0, 1),
            "XX",
            "XX"
        ))->setIngredient("X", ItemIds::get(ItemIds::SNOWBALL)));

        $this->registerRecipe((new ShapelessRecipe(ItemIds::get(ItemIds::SNOW_LAYER, 0, 6)))->addIngredient(ItemIds::get(ItemIds::SNOW_BLOCK, 0, 3)));

        $this->registerRecipe((new ShapedRecipe(ItemIds::get(ItemIds::STICK, 0, 4),
            "X ",
            "X "
        ))->setIngredient("X", ItemIds::get(ItemIds::WOODEN_PLANK, -1)));

        $this->registerRecipe((new ShapedRecipe(ItemIds::get(ItemIds::STONECUTTER, 0, 1),
            "XX",
            "XX"
        ))->setIngredient("X", ItemIds::get(ItemIds::COBBLESTONE)));

        $this->registerRecipe((new ShapedRecipe(ItemIds::get(ItemIds::WOODEN_PLANK, Planks::OAK, 4),
            "X"
        ))->setIngredient("X", ItemIds::get(ItemIds::WOOD, Wood::OAK, 1)));

        $this->registerRecipe((new ShapedRecipe(ItemIds::get(ItemIds::WOODEN_PLANK, Planks::SPRUCE, 4),
            "X"
        ))->setIngredient("X", ItemIds::get(ItemIds::WOOD, Wood::SPRUCE, 1)));

        $this->registerRecipe((new ShapedRecipe(ItemIds::get(ItemIds::WOODEN_PLANK, Planks::BIRCH, 4),
            "X"
        ))->setIngredient("X", ItemIds::get(ItemIds::WOOD, Wood::BIRCH, 1)));

        $this->registerRecipe((new ShapedRecipe(ItemIds::get(ItemIds::WOODEN_PLANK, Planks::JUNGLE, 4),
            "X"
        ))->setIngredient("X", ItemIds::get(ItemIds::WOOD, Wood::JUNGLE, 1)));

        $this->registerRecipe((new ShapedRecipe(ItemIds::get(ItemIds::WOODEN_PLANK, Planks::ACACIA, 4),
            "X"
        ))->setIngredient("X", ItemIds::get(ItemIds::WOOD2, Wood2::ACACIA, 1)));

        $this->registerRecipe((new ShapedRecipe(ItemIds::get(ItemIds::WOODEN_PLANK, Planks::DARK_OAK, 4),
            "X"
        ))->setIngredient("X", ItemIds::get(ItemIds::WOOD2, Wood2::DARK_OAK, 1)));

        $this->registerRecipe((new ShapedRecipe(ItemIds::get(ItemIds::WOOL, 0, 1),
            "XX",
            "XX"
        ))->setIngredient("X", ItemIds::get(ItemIds::STRING, 0)));

        $this->registerRecipe((new ShapedRecipe(ItemIds::get(ItemIds::TORCH, 0, 4),
            "C ",
            "S "
        ))->setIngredient("C", ItemIds::get(ItemIds::COAL, 0, 1))->setIngredient("S", ItemIds::get(ItemIds::STICK, 0, 1)));

        $this->registerRecipe((new ShapedRecipe(ItemIds::get(ItemIds::TORCH, 0, 4),
            "C ",
            "S "
        ))->setIngredient("C", ItemIds::get(ItemIds::COAL, 1, 1))->setIngredient("S", ItemIds::get(ItemIds::STICK, 0, 1)));

        $this->registerRecipe((new ShapedRecipe(ItemIds::get(ItemIds::SUGAR, 0, 1),
            "S"
        ))->setIngredient("S", ItemIds::get(ItemIds::SUGARCANE, 0, 1)));

        $this->registerRecipe((new BigShapedRecipe(ItemIds::get(ItemIds::BED, 0, 1),
            "WWW",
            "PPP",
            "   "
        ))->setIngredient("W", ItemIds::get(ItemIds::WOOL, -1))->setIngredient("P", ItemIds::get(ItemIds::WOODEN_PLANK, -1)));

        $this->registerRecipe((new BigShapedRecipe(ItemIds::get(ItemIds::CHEST, 0, 1),
            "PPP",
            "P P",
            "PPP"
        ))->setIngredient("P", ItemIds::get(ItemIds::WOODEN_PLANK, -1)));

        $this->registerRecipe((new BigShapedRecipe(ItemIds::get(ItemIds::FENCE, 0, 3),
            "   ",
            "PSP",
            "PSP"
        ))->setIngredient("S", ItemIds::get(ItemIds::STICK, 0))->setIngredient("P", ItemIds::get(ItemIds::WOODEN_PLANK, Planks::OAK)));

        $this->registerRecipe((new BigShapedRecipe(ItemIds::get(ItemIds::FENCE, Planks::SPRUCE, 3),
            "   ",
            "PSP",
            "PSP"
        ))->setIngredient("S", ItemIds::get(ItemIds::STICK, 0))->setIngredient("P", ItemIds::get(ItemIds::WOODEN_PLANK, Planks::SPRUCE)));

        $this->registerRecipe((new BigShapedRecipe(ItemIds::get(ItemIds::FENCE, Planks::BIRCH, 3),
            "   ",
            "PSP",
            "PSP"
        ))->setIngredient("S", ItemIds::get(ItemIds::STICK, 0, 2))->setIngredient("P", ItemIds::get(ItemIds::WOODEN_PLANK, Planks::BIRCH, 4)));

        $this->registerRecipe((new BigShapedRecipe(ItemIds::get(ItemIds::FENCE, Planks::JUNGLE, 3),
            "   ",
            "PSP",
            "PSP"
        ))->setIngredient("S", ItemIds::get(ItemIds::STICK, 0))->setIngredient("P", ItemIds::get(ItemIds::WOODEN_PLANK, Planks::JUNGLE)));

        $this->registerRecipe((new BigShapedRecipe(ItemIds::get(ItemIds::FENCE, Planks::ACACIA, 3),
            "   ",
            "PSP",
            "PSP"
        ))->setIngredient("S", ItemIds::get(ItemIds::STICK, 0))->setIngredient("P", ItemIds::get(ItemIds::WOODEN_PLANK, Planks::ACACIA)));

        $this->registerRecipe((new BigShapedRecipe(ItemIds::get(ItemIds::FENCE, Planks::DARK_OAK, 3),
            "   ",
            "PSP",
            "PSP"
        ))->setIngredient("S", ItemIds::get(ItemIds::STICK, 0))->setIngredient("P", ItemIds::get(ItemIds::WOODEN_PLANK, Planks::DARK_OAK)));

        $this->registerRecipe((new BigShapedRecipe(ItemIds::get(ItemIds::NETHER_BRICK_FENCE, 0, 6),
            "   ",
            "PSP",
            "PSP"
        ))->setIngredient("S", ItemIds::get(ItemIds::NETHER_BRICK, 0))->setIngredient("P", ItemIds::get(ItemIds::NETHER_BRICK_BLOCK)));

        $this->registerRecipe((new BigShapedRecipe(ItemIds::get(ItemIds::FENCE_GATE, 0, 1),
            "   ",
            "SPS",
            "SPS"
        ))->setIngredient("S", ItemIds::get(ItemIds::STICK, 0))->setIngredient("P", ItemIds::get(ItemIds::WOODEN_PLANK, Planks::OAK)));

        $this->registerRecipe((new BigShapedRecipe(ItemIds::get(ItemIds::FENCE_GATE_SPRUCE, 0, 1),
            "   ",
            "SPS",
            "SPS"
        ))->setIngredient("S", ItemIds::get(ItemIds::STICK, 0))->setIngredient("P", ItemIds::get(ItemIds::WOODEN_PLANK, Planks::SPRUCE)));

        $this->registerRecipe((new BigShapedRecipe(ItemIds::get(ItemIds::FENCE_GATE_BIRCH, 0, 1),
            "   ",
            "SPS",
            "SPS"
        ))->setIngredient("S", ItemIds::get(ItemIds::STICK, 0))->setIngredient("P", ItemIds::get(ItemIds::WOODEN_PLANK, Planks::BIRCH)));

        $this->registerRecipe((new BigShapedRecipe(ItemIds::get(ItemIds::FENCE_GATE_JUNGLE, 0, 1),
            "   ",
            "SPS",
            "SPS"
        ))->setIngredient("S", ItemIds::get(ItemIds::STICK, 0))->setIngredient("P", ItemIds::get(ItemIds::WOODEN_PLANK, Planks::JUNGLE)));

        $this->registerRecipe((new BigShapedRecipe(ItemIds::get(ItemIds::FENCE_GATE_DARK_OAK, 0, 1),
            "   ",
            "SPS",
            "SPS"
        ))->setIngredient("S", ItemIds::get(ItemIds::STICK, 0))->setIngredient("P", ItemIds::get(ItemIds::WOODEN_PLANK, Planks::DARK_OAK)));

        $this->registerRecipe((new BigShapedRecipe(ItemIds::get(ItemIds::FENCE_GATE_ACACIA, 0, 1),
            "   ",
            "SPS",
            "SPS"
        ))->setIngredient("S", ItemIds::get(ItemIds::STICK, 0))->setIngredient("P", ItemIds::get(ItemIds::WOODEN_PLANK, Planks::ACACIA)));

        $this->registerRecipe((new BigShapedRecipe(ItemIds::get(ItemIds::FURNACE, 0, 1),
            "CCC",
            "C C",
            "CCC"
        ))->setIngredient("C", ItemIds::get(ItemIds::COBBLESTONE, 0)));

        $this->registerRecipe((new BigShapedRecipe(ItemIds::get(ItemIds::GLASS_PANE, 0, 16),
            "   ",
            "GGG",
            "GGG"
        ))->setIngredient("G", ItemIds::get(ItemIds::GLASS, 0)));

        for ($i = 0; $i < 16; $i++) {
            $this->registerRecipe((new BigShapedRecipe(ItemIds::get(ItemIds::STAINED_GLASS_PANE, $i, 16),
                "   ",
                "GGG",
                "GGG"
            ))->setIngredient("G", ItemIds::get(ItemIds::STAINED_GLASS, $i)));
        }

        $this->registerRecipe((new BigShapedRecipe(ItemIds::get(ItemIds::LADDER, 0, 3),
            "S S",
            "SSS",
            "S S"
        ))->setIngredient("S", ItemIds::get(ItemIds::STICK, 0)));

        $this->registerRecipe((new BigShapedRecipe(ItemIds::get(ItemIds::TRAPDOOR, 0, 2),
            "   ",
            "PPP",
            "PPP"
        ))->setIngredient("P", ItemIds::get(ItemIds::WOODEN_PLANK, -1)));

        $this->registerRecipe((new BigShapedRecipe(ItemIds::get(ItemIds::WOODEN_DOOR, 0, 3),
            "PP ",
            "PP ",
            "PP "
        ))->setIngredient("P", ItemIds::get(ItemIds::WOODEN_PLANK, -1)));

        $this->registerRecipe((new BigShapedRecipe(ItemIds::get(ItemIds::WOODEN_STAIRS, 0, 4),
            "P  ",
            "PP ",
            "PPP"
        ))->setIngredient("P", ItemIds::get(ItemIds::WOODEN_PLANK, Planks::OAK)));

        $this->registerRecipe((new BigShapedRecipe(ItemIds::get(ItemIds::WOOD_SLAB, Planks::OAK, 6),
            "   ",
            "   ",
            "PPP"
        ))->setIngredient("P", ItemIds::get(ItemIds::WOODEN_PLANK, Planks::OAK)));

        $this->registerRecipe((new BigShapedRecipe(ItemIds::get(ItemIds::SPRUCE_WOOD_STAIRS, 0, 4),
            "P  ",
            "PP ",
            "PPP"
        ))->setIngredient("P", ItemIds::get(ItemIds::WOODEN_PLANK, Planks::SPRUCE)));

        $this->registerRecipe((new BigShapedRecipe(ItemIds::get(ItemIds::WOOD_SLAB, Planks::SPRUCE, 6),
            "   ",
            "   ",
            "PPP"
        ))->setIngredient("P", ItemIds::get(ItemIds::WOODEN_PLANK, Planks::SPRUCE)));

        $this->registerRecipe((new BigShapedRecipe(ItemIds::get(ItemIds::BIRCH_WOOD_STAIRS, 0, 4),
            "P  ",
            "PP ",
            "PPP"
        ))->setIngredient("P", ItemIds::get(ItemIds::WOODEN_PLANK, Planks::BIRCH)));

        $this->registerRecipe((new BigShapedRecipe(ItemIds::get(ItemIds::WOOD_SLAB, Planks::BIRCH, 6),
            "   ",
            "   ",
            "PPP"
        ))->setIngredient("P", ItemIds::get(ItemIds::WOODEN_PLANK, Planks::BIRCH)));

        $this->registerRecipe((new BigShapedRecipe(ItemIds::get(ItemIds::JUNGLE_WOOD_STAIRS, 0, 4),
            "P  ",
            "PP ",
            "PPP"
        ))->setIngredient("P", ItemIds::get(ItemIds::WOODEN_PLANK, Planks::JUNGLE)));

        $this->registerRecipe((new BigShapedRecipe(ItemIds::get(ItemIds::WOOD_SLAB, Planks::JUNGLE, 6),
            "   ",
            "   ",
            "PPP"
        ))->setIngredient("P", ItemIds::get(ItemIds::WOODEN_PLANK, Planks::JUNGLE)));

        $this->registerRecipe((new BigShapedRecipe(ItemIds::get(ItemIds::ACACIA_WOOD_STAIRS, 0, 4),
            "P  ",
            "PP ",
            "PPP"
        ))->setIngredient("P", ItemIds::get(ItemIds::WOODEN_PLANK, Planks::ACACIA)));

        $this->registerRecipe((new BigShapedRecipe(ItemIds::get(ItemIds::WOOD_SLAB, Planks::ACACIA, 6),
            "   ",
            "   ",
            "PPP"
        ))->setIngredient("P", ItemIds::get(ItemIds::WOODEN_PLANK, Planks::ACACIA)));

        $this->registerRecipe((new BigShapedRecipe(ItemIds::get(ItemIds::DARK_OAK_WOOD_STAIRS, 0, 4),
            "P  ",
            "PP ",
            "PPP"
        ))->setIngredient("P", ItemIds::get(ItemIds::WOODEN_PLANK, Planks::DARK_OAK)));

        $this->registerRecipe((new BigShapedRecipe(ItemIds::get(ItemIds::WOOD_SLAB, Planks::DARK_OAK, 6),
            "   ",
            "   ",
            "PPP"
        ))->setIngredient("P", ItemIds::get(ItemIds::WOODEN_PLANK, Planks::DARK_OAK)));

        $this->registerRecipe((new BigShapedRecipe(ItemIds::get(ItemIds::BUCKET, 0, 1),
            "I I",
            " I ",
            "   "
        ))->setIngredient("I", ItemIds::get(ItemIds::IRON_INGOT, 0)));

        $this->registerRecipe((new BigShapedRecipe(ItemIds::get(ItemIds::CLOCK, 0, 1),
            " G ",
            "GRG",
            " G "
        ))->setIngredient("G", ItemIds::get(ItemIds::GOLD_INGOT, 0))->setIngredient("R", ItemIds::get(ItemIds::REDSTONE_DUST, 0)));

        $this->registerRecipe((new BigShapedRecipe(ItemIds::get(ItemIds::COMPASS, 0, 1),
            " I ",
            "IRI",
            " I "
        ))->setIngredient("I", ItemIds::get(ItemIds::IRON_INGOT, 0))->setIngredient("R", ItemIds::get(ItemIds::REDSTONE_DUST, 0)));

        $this->registerRecipe((new BigShapedRecipe(ItemIds::get(ItemIds::HOPPER, 0, 1),
            "I I",
            "ICI",
            " I "
        ))->setIngredient("I", ItemIds::get(ItemIds::IRON_INGOT, 0))->setIngredient("C", ItemIds::get(ItemIds::CHEST, 0)));

        $this->registerRecipe((new BigShapedRecipe(ItemIds::get(ItemIds::TNT, 0, 1),
            "GSG",
            "SGS",
            "GSG"
        ))->setIngredient("G", ItemIds::get(ItemIds::GUNPOWDER, 0))->setIngredient("S", ItemIds::get(ItemIds::SAND, -1)));

        $this->registerRecipe((new BigShapedRecipe(ItemIds::get(ItemIds::BOWL, 0, 4),
            "P P",
            " P ",
            "   "
        ))->setIngredient("P", ItemIds::get(ItemIds::WOODEN_PLANKS, -1)));

        $this->registerRecipe((new BigShapedRecipe(ItemIds::get(ItemIds::MINECART, 0, 1),
            "I I",
            "III",
            "   "
        ))->setIngredient("I", ItemIds::get(ItemIds::IRON_INGOT, 0)));

        $this->registerRecipe((new BigShapedRecipe(ItemIds::get(ItemIds::BOOK, 0, 1),
            "P P",
            " P ",
            "   "
        ))->setIngredient("P", ItemIds::get(ItemIds::PAPER, 0)));

        $this->registerRecipe((new BigShapedRecipe(ItemIds::get(ItemIds::ENCHANTING_TABLE, 0, 1),
            " A ",
            "BCB",
            "CCC"
        ))->setIngredient("A", ItemIds::get(ItemIds::BOOK))->setIngredient("B", ItemIds::get(ItemIds::DIAMOND))->setIngredient("C", ItemIds::get(ItemIds::OBSIDIAN)));

        $this->registerRecipe((new BigShapedRecipe(ItemIds::get(ItemIds::BOOKSHELF, 0, 1),
            "PBP",
            "PBP",
            "PBP"
        ))->setIngredient("P", ItemIds::get(ItemIds::WOODEN_PLANK, -1))->setIngredient("B", ItemIds::get(ItemIds::BOOK, 0)));

        $this->registerRecipe((new BigShapedRecipe(ItemIds::get(ItemIds::PAINTING, 0, 1),
            "SSS",
            "SWS",
            "SSS"
        ))->setIngredient("S", ItemIds::get(ItemIds::STICK, 0))->setIngredient("W", ItemIds::get(ItemIds::WOOL, -1)));

        $this->registerRecipe((new ShapedRecipe(ItemIds::get(ItemIds::PAPER, 0, 3),
            "SS ",
            "S  ",
            "   "
        ))->setIngredient("S", ItemIds::get(ItemIds::SUGARCANE, 0)));

        $this->registerRecipe((new BigShapedRecipe(ItemIds::get(ItemIds::SIGN, 0, 3),
            "PPP",
            "PPP",
            " S "
        ))->setIngredient("S", ItemIds::get(ItemIds::STICK, 0, 1))->setIngredient("P", ItemIds::get(ItemIds::WOODEN_PLANKS, -1))); //TODO: check if it gives one sign or three

        $this->registerRecipe((new BigShapedRecipe(ItemIds::get(ItemIds::IRON_BARS, 0, 16),
            "   ",
            "III",
            "III"
        ))->setIngredient("I", ItemIds::get(ItemIds::IRON_INGOT, 0)));
    }

    protected function registerStonecutter()
    {
        $shapes = [
            "slab" => [
                "   ",
                "   ",
                "XXX"
            ],
            "stairs" => [
                "X  ",
                "XX ",
                "XXX"
            ],
            "wall/fence" => [
                "   ",
                "XXX",
                "XXX"
            ],
            "blockrecipe1" => [
                "XX",
                "XX"
            ],
            "blockrecipe2X1" => [
                "   ",
                " X ",
                " X "
            ],
            "blockrecipe2X2" => [
                "AB",
                "BA"
            ],
            "blockrecipe1X2" => [
                "  ",
                "AB"
            ]
        ];

        $buildRecipes = [];

        // Single ingedient stone cutter recipes:
        $RESULT_ITEMID = 0;
        $RESULT_META = 1;
        $INGREDIENT_ITEMID = 2;
        $INGREDIENT_META = 3;
        $RECIPE_SHAPE = 4;
        $RESULT_AMOUNT = 5;
        $recipes = [
            //RESULT_ITEM_ID            RESULT_META                 INGREDIENT_ITEMID           INGREDIENT_META     RECIPE_SHAPE        RESULT_AMOUNT
            [ItemIds::SLAB, Slab::STONE, ItemIds::STONE, Stone::NORMAL, "slab", 6],
            [ItemIds::SLAB, Slab::COBBLESTONE, ItemIds::COBBLESTONE, 0, "slab", 6],
            [ItemIds::SLAB, Slab::SANDSTONE, ItemIds::SANDSTONE, 0, "slab", 6],
            [ItemIds::SLAB, Slab::BRICK, ItemIds::BRICK, 0, "slab", 6],
            [ItemIds::SLAB, Slab::STONE_BRICK, ItemIds::STONE_BRICK, StoneBricks::NORMAL, "slab", 6],
            [ItemIds::SLAB, Slab::NETHER_BRICK, ItemIds::NETHER_BRICK_BLOCK, 0, "slab", 6],
            [ItemIds::SLAB, Slab::QUARTZ, ItemIds::QUARTZ_BLOCK, 0, "slab", 6],
            [ItemIds::STONE_SLAB2, Slab2::RED_SANDSTONE, ItemIds::RED_SANDSTONE, 0, "slab", 6],
            [ItemIds::STONE_SLAB2, Slab2::PURPUR, ItemIds::PURPUR_BLOCK, 0, "slab", 6],
            [ItemIds::STONE_SLAB2, Slab2::PRISMARINE, ItemIds::PRISMARINE, 0, "slab", 6],
            [ItemIds::STONE_SLAB2, Slab2::PRISMARINE_BRICK, ItemIds::PRISMARINE, 1, "slab", 6],
            [ItemIds::STONE_SLAB2, Slab2::DARK_PRISMARINE, ItemIds::PRISMARINE, 2, "slab", 6],
            [ItemIds::STONE_SLAB2, Slab2::MOSSY_COBBLESTONE, ItemIds::MOSSY_STONE, 0, "slab", 6],
            [ItemIds::STONE_SLAB2, Slab2::SMOOTH_SANDSTONE, ItemIds::SANDSTONE, Sandstone::SMOOTH, "slab", 6],
            [ItemIds::STONE_SLAB2, Slab2::RED_NETHER_BRICK, ItemIds::RED_NETHER_BRICK, 0, "slab", 6],
            [ItemIds::COBBLESTONE_STAIRS, 0, ItemIds::COBBLESTONE, 0, "stairs", 4],
            [ItemIds::SANDSTONE_STAIRS, 0, ItemIds::SANDSTONE, 0, "stairs", 4],
            [ItemIds::RED_SANDSTONE_STAIRS, 0, ItemIds::RED_SANDSTONE, 0, "stairs", 4],
            [ItemIds::STONE_BRICK_STAIRS, 0, ItemIds::STONE_BRICK, StoneBricks::NORMAL, "stairs", 4],
            [ItemIds::BRICK_STAIRS, 0, ItemIds::BRICKS_BLOCK, 0, "stairs", 4],
            [ItemIds::NETHER_BRICKS_STAIRS, 0, ItemIds::NETHER_BRICK_BLOCK, 0, "stairs", 4],
            [ItemIds::QUARTZ_STAIRS, 0, ItemIds::QUARTZ_BLOCK, 0, "stairs", 4],
            [ItemIds::COBBLESTONE_WALL, StoneWall::NONE_MOSSY_WALL, ItemIds::COBBLESTONE, 0, "wall/fence", 6],
            [ItemIds::COBBLESTONE_WALL, StoneWall::MOSSY_WALL, ItemIds::MOSSY_STONE, 0, "wall/fence", 6],
            [ItemIds::STONE_WALL, 7, ItemIds::STONE_BRICK, StoneBricks::NORMAL, "wall/fence", 6],
            [ItemIds::STONE_WALL, 8, ItemIds::STONE_BRICK, StoneBricks::MOSSY, "wall/fence", 6],
            [ItemIds::STONE_WALL, 4, ItemIds::STONE, Stone::ANDESITE, "wall/fence", 6],
            [ItemIds::STONE_WALL, 6, ItemIds::BRICKS, 0, "wall/fence", 6],
            [ItemIds::STONE_WALL, 3, ItemIds::STONE, Stone::DIORITE, "wall/fence", 6],
            [ItemIds::STONE_WALL, 10, ItemIds::END_BRICKS, 0, "wall/fence", 6],
            [ItemIds::STONE_WALL, 2, ItemIds::STONE, Stone::GRANITE, "wall/fence", 6],
            [ItemIds::STONE_WALL, 9, ItemIds::NETHER_BRICKS, 0, "wall/fence", 6],
            [ItemIds::STONE_WALL, 11, ItemIds::PRISMARINE, 0, "wall/fence", 6],
            [ItemIds::STONE_WALL, 13, ItemIds::RED_NETHER_BRICK, 0, "wall/fence", 6],
            [ItemIds::STONE_WALL, 12, ItemIds::RED_SANDSTONE, 0, "wall/fence", 6],
            [ItemIds::STONE_WALL, 5, ItemIds::SANDSTONE, 0, "wall/fence", 6],

            [ItemIds::NETHER_BRICKS, 0, ItemIds::NETHER_BRICK, 0, "blockrecipe1", 1],
            [ItemIds::SANDSTONE, SandStone::NORMAL, ItemIds::SAND, 0, "blockrecipe1", 1],
            [ItemIds::SANDSTONE, Sandstone::CHISELED, ItemIds::SANDSTONE, SandStone::NORMAL, "blockrecipe1", 4],
            [ItemIds::STONE_BRICK, StoneBricks::NORMAL, ItemIds::STONE, Stone::NORMAL, "blockrecipe1", 4],
            [ItemIds::STONE_BRICK, StoneBricks::NORMAL, ItemIds::STONE, Stone::POLISHED_GRANITE, "blockrecipe1", 4],
            [ItemIds::STONE_BRICK, StoneBricks::NORMAL, ItemIds::STONE, Stone::POLISHED_DIORITE, "blockrecipe1", 4],
            [ItemIds::STONE_BRICK, StoneBricks::NORMAL, ItemIds::STONE, Stone::POLISHED_ANDESITE, "blockrecipe1", 4],
            [ItemIds::STONE, Stone::POLISHED_GRANITE, ItemIds::STONE, Stone::GRANITE, "blockrecipe1", 4],
            [ItemIds::STONE, Stone::POLISHED_DIORITE, ItemIds::STONE, Stone::DIORITE, "blockrecipe1", 4],
            [ItemIds::STONE, Stone::POLISHED_ANDESITE, ItemIds::STONE, Stone::ANDESITE, "blockrecipe1", 4],
            [ItemIds::QUARTZ_BLOCK, Quartz::QUARTZ_NORMAL, ItemIds::QUARTZ, 0, "blockrecipe1", 1],
            [ItemIds::MAGMA, 0, ItemIds::MAGMA_CREAM, 0, "blockrecipe1", 1],
            [ItemIds::QUARTZ_BLOCK, Quartz::QUARTZ_CHISELED, ItemIds::SLAB, Slab::QUARTZ, "blockrecipe2X1", 1],
            [ItemIds::SANDSTONE, SandStone::CHISELED, ItemIds::SLAB, Slab::SANDSTONE, "blockrecipe2X1", 1],
            [ItemIds::STONE_BRICK, StoneBricks::CHISELED, ItemIds::SLAB, Slab::STONE_BRICK, "blockrecipe2X1", 1],
        ];
        foreach ($recipes as $recipe) {
            $buildRecipes[] = $this->createOneIngedientRecipe($shapes[$recipe[$RECIPE_SHAPE]], $recipe[$RESULT_ITEMID], $recipe[$RESULT_META], $recipe[$RESULT_AMOUNT], $recipe[$INGREDIENT_ITEMID], $recipe[$INGREDIENT_META], "X", "Stonecutter");
        }

        // Multi-ingredient stone recipes:
        $buildRecipes[] = ((new ShapedRecipe(ItemIds::get(ItemIds::STONE, Stone::GRANITE, 1),
            ...$shapes["blockrecipe1X2"]
        ))->setIngredient("A", ItemIds::get(ItemIds::STONE, Stone::DIORITE, 1))->setIngredient("B", ItemIds::get(ItemIds::QUARTZ, Quartz::QUARTZ_NORMAL, 1)));
        $buildRecipes[] = ((new ShapedRecipe(ItemIds::get(ItemIds::STONE, Stone::DIORITE, 2),
            ...$shapes["blockrecipe2X2"]
        ))->setIngredient("B", ItemIds::get(ItemIds::COBBLESTONE, 0, 1))->setIngredient("A", ItemIds::get(ItemIds::QUARTZ, 0, 1)));
        $buildRecipes[] = ((new ShapedRecipe(ItemIds::get(ItemIds::STONE, Stone::ANDESITE, 2),
            ...$shapes["blockrecipe1X2"]
        ))->setIngredient("A", ItemIds::get(ItemIds::COBBLESTONE, 0, 1))->setIngredient("B", ItemIds::get(ItemIds::STONE, Stone::DIORITE, 1)));
        $buildRecipes[] = ((new ShapedRecipe(ItemIds::get(ItemIds::STONE_BRICK, StoneBricks::MOSSY, 1),
            ...$shapes["blockrecipe1X2"]
        ))->setIngredient("A", ItemIds::get(ItemIds::STONE_BRICK, StoneBricks::NORMAL, 1))->setIngredient("B", ItemIds::get(ItemIds::VINES, 0, 1)));
        $buildRecipes[] = ((new ShapedRecipe(ItemIds::get(ItemIds::RED_NETHER_BRICK, 0, 1),
            ...$shapes["blockrecipe2X2"]
        ))->setIngredient("B", ItemIds::get(ItemIds::NETHER_BRICK, 0, 1))->setIngredient("A", ItemIds::get(ItemIds::NETHER_WART, 0, 1)));

        $this->sortAndAddRecipesArray($buildRecipes);
    }

    private function createOneIngedientRecipe($recipeshape, $resultitem, $resultitemmeta, $resultitemamound, $ingedienttype, $ingredientmeta, $ingredientname, $inventoryType = "")
    {
        $ingredientamount = 1;
        $height = 0;
        // count how many of the ingredient are in the recipe and check height for big or small recipe.
        foreach ($recipeshape as $line) {
            $height += 1;
            $width = strlen($line);
//			$ingredientamount += substr_count($line, $ingredientname);
        }
        $recipe = null;
        if ($height < 3) {
            // Process small recipe
            $fullClassName = "pocketmine\\inventory\\" . "ShapedRecipe";// $ShapeClass."ShapedRecipe";
            $recipe = ((new $fullClassName(ItemIds::get($resultitem, $resultitemmeta, $resultitemamound),
                ...$recipeshape
            ))->setIngredient($ingredientname, ItemIds::get($ingedienttype, $ingredientmeta, $ingredientamount)));
        } else {
            // Process big recipe
            $fullClassName = "pocketmine\\inventory\\" . "BigShapedRecipe";
            $recipe = ((new $fullClassName(ItemIds::get($resultitem, $resultitemmeta, $resultitemamound),
                ...$recipeshape
            ))->setIngredient($ingredientname, ItemIds::get($ingedienttype, $ingredientmeta, $ingredientamount)));
        }
        return $recipe;
    }

    private function sortAndAddRecipesArray(&$recipes)
    {
        // Sort the recipes based on the result item name with the bubblesort algoritm.
        for ($i = 0; $i < count($recipes); ++$i) {
            $current = $recipes[$i];
            $result = $current->getResult();
            for ($j = count($recipes) - 1; $j > $i; --$j) {
                if ($this->sort($result, $recipes[$j]->getResult()) > 0) {
                    $swap = $current;
                    $current = $recipes[$j];
                    $recipes[$j] = $swap;
                    $result = $current->getResult();
                }
            }
            $this->registerRecipe($current);
        }
    }

    public function sort(Item $i1, Item $i2)
    {
        if ($i1->getId() > $i2->getId()) {
            return 1;
        } elseif ($i1->getId() < $i2->getId()) {
            return -1;
        } elseif ($i1->getDamage() > $i2->getDamage()) {
            return 1;
        } elseif ($i1->getDamage() < $i2->getDamage()) {
            return -1;
        } elseif ($i1->getCount() > $i2->getCount()) {
            return 1;
        } elseif ($i1->getCount() < $i2->getCount()) {
            return -1;
        } else {
            return 0;
        }
    }

    /**
     * @param Recipe $recipe
     */
    public function registerRecipe(Recipe $recipe)
    {
        $recipe->setId(UUID::fromData(++self::$RECIPE_COUNT, $recipe->getResult()->getId(), $recipe->getResult()->getDamage(), $recipe->getResult()->getCount(), $recipe->getResult()->getCompound()));

        if ($recipe instanceof ShapedRecipe) {
            $this->registerShapedRecipe($recipe);
        } elseif ($recipe instanceof ShapelessRecipe) {
            $this->registerShapelessRecipe($recipe);
        } elseif ($recipe instanceof FurnaceRecipe) {
            $this->registerFurnaceRecipe($recipe);
        }
    }

    /**
     * @param ShapedRecipe $recipe
     */
    public function registerShapedRecipe(ShapedRecipe $recipe)
    {
        $result = $recipe->getResult();
        $this->recipes[$recipe->getId()->toBinary()] = $recipe;
        $ingredients = $recipe->getIngredientMap();
        $hash = "";
        foreach ($ingredients as $v) {
            foreach ($v as $item) {
                if ($item !== null) {
                    /** @var Item $item */
                    $hash .= $item->getId() . ":" . ($item->getDamage() === null ? "?" : $item->getDamage()) . "x" . $item->getCount() . ",";
                }
            }

            $hash .= ";";
        }

        $this->recipeLookup[$result->getId() . ":" . $result->getDamage()][$hash] = $recipe;
    }

    /**
     * @param ShapelessRecipe $recipe
     */
    public function registerShapelessRecipe(ShapelessRecipe $recipe)
    {
        $result = $recipe->getResult();
        $this->recipes[$recipe->getId()->toBinary()] = $recipe;
        $hash = "";
        $ingredients = $recipe->getIngredientList();
        usort($ingredients, [$this, "sort"]);
        foreach ($ingredients as $item) {
            $hash .= $item->getId() . ":" . ($item->getDamage() === null ? "?" : $item->getDamage()) . "x" . $item->getCount() . ",";
        }
        $this->recipeLookup[$result->getId() . ":" . $result->getDamage()][$hash] = $recipe;
    }

    /**
     * @param FurnaceRecipe $recipe
     */
    public function registerFurnaceRecipe(FurnaceRecipe $recipe)
    {
        $input = $recipe->getInput();
        $this->furnaceRecipes[$input->getId() . ":" . ($input->getDamage() === null ? "?" : $input->getDamage())] = $recipe;
    }

    protected function registerFurnace()
    {
        // ore and materials
        $this->registerRecipe(new FurnaceRecipe(ItemIds::get(ItemIds::IRON_INGOT, 0, 1), ItemIds::get(ItemIds::IRON_ORE, 0, 1)));
        $this->registerRecipe(new FurnaceRecipe(ItemIds::get(ItemIds::GOLD_INGOT, 0, 1), ItemIds::get(ItemIds::GOLD_ORE, 0, 1)));
        $this->registerRecipe(new FurnaceRecipe(ItemIds::get(ItemIds::GLASS, 0, 1), ItemIds::get(ItemIds::SAND, 0, 1)));
        $this->registerRecipe(new FurnaceRecipe(ItemIds::get(ItemIds::GLASS, 0, 1), ItemIds::get(ItemIds::SAND, 1, 1))); // red sand
        $this->registerRecipe(new FurnaceRecipe(ItemIds::get(ItemIds::STONE, 0, 1), ItemIds::get(ItemIds::COBBLESTONE, 0, 1)));
        $this->registerRecipe(new FurnaceRecipe(ItemIds::get(ItemIds::BRICK, 0, 1), ItemIds::get(ItemIds::CLAY, 0, 1)));
        $this->registerRecipe(new FurnaceRecipe(ItemIds::get(ItemIds::NETHER_BRICK, 0, 1), ItemIds::get(ItemIds::NETHERRACK, 0, 1)));
        $this->registerRecipe(new FurnaceRecipe(ItemIds::get(ItemIds::HARDENED_CLAY, 0, 1), ItemIds::get(ItemIds::CLAY_BLOCK, 0, 1)));
        $this->registerRecipe(new FurnaceRecipe(ItemIds::get(ItemIds::STONE_BRICK, 2, 1), ItemIds::get(ItemIds::STONE_BRICK, 0, 1)));
        // wasting ore
        $this->registerRecipe(new FurnaceRecipe(ItemIds::get(ItemIds::DIAMOND, 0, 1), ItemIds::get(ItemIds::DIAMOND_ORE, 0, 1)));
        $this->registerRecipe(new FurnaceRecipe(ItemIds::get(ItemIds::DYE, 4, 1), ItemIds::get(ItemIds::LAPIS_ORE, 0, 1)));
        // @todo redstone
        $this->registerRecipe(new FurnaceRecipe(ItemIds::get(ItemIds::COAL, 1, 1), ItemIds::get(ItemIds::TRUNK, -1, 1)));
        $this->registerRecipe(new FurnaceRecipe(ItemIds::get(ItemIds::EMERALD, 0, 1), ItemIds::get(ItemIds::EMERALD_ORE, 0, 1)));
        $this->registerRecipe(new FurnaceRecipe(ItemIds::get(ItemIds::NETHER_QUARTZ, 0, 1), ItemIds::get(ItemIds::NETHER_QUARTZ_ORE, 0, 1)));

        // food
        $this->registerRecipe(new FurnaceRecipe(ItemIds::get(ItemIds::COOKED_FISH, 0, 1), ItemIds::get(ItemIds::RAW_FISH, 0, 1)));
        $this->registerRecipe(new FurnaceRecipe(ItemIds::get(ItemIds::COOKED_FISH, 1, 1), ItemIds::get(ItemIds::RAW_FISH, 1, 1))); // salmon
        $this->registerRecipe(new FurnaceRecipe(ItemIds::get(ItemIds::BAKED_POTATO, 0, 1), ItemIds::get(ItemIds::POTATO, 0, 1)));
        $this->registerRecipe(new FurnaceRecipe(ItemIds::get(ItemIds::COOKED_PORKCHOP, 0, 1), ItemIds::get(ItemIds::RAW_PORKCHOP, 0, 1)));
        $this->registerRecipe(new FurnaceRecipe(ItemIds::get(ItemIds::STEAK, 0, 1), ItemIds::get(ItemIds::RAW_BEEF, 0, 1)));
        $this->registerRecipe(new FurnaceRecipe(ItemIds::get(ItemIds::COOKED_CHICKEN, 0, 1), ItemIds::get(ItemIds::RAW_CHICKEN, 0, 1)));
        $this->registerRecipe(new FurnaceRecipe(ItemIds::get(ItemIds::COOKED_MUTTON, 0, 1), ItemIds::get(ItemIds::RAW_MUTTON, 0, 1)));
        $this->registerRecipe(new FurnaceRecipe(ItemIds::get(ItemIds::COOKED_RABBIT, 0, 1), ItemIds::get(ItemIds::RAW_RABBIT, 0, 1)));

        // other
        $this->registerRecipe(new FurnaceRecipe(ItemIds::get(ItemIds::DYE, 2, 1), ItemIds::get(ItemIds::CACTUS, 0, 1)));
        // @todo sponge
        // @todo popped chorus fruit
    }

    protected function registerDyes()
    {
        for ($i = 0; $i < 16; ++$i) {
            if ($i != 15) {
                $this->registerRecipe((new ShapelessRecipe(ItemIds::get(ItemIds::WOOL, 15 - $i, 1)))->addIngredient(ItemIds::get(ItemIds::WOOL, 0, 1))->addIngredient(ItemIds::get(ItemIds::DYE, $i, 1)));
            }
            $this->registerRecipe((new ShapelessRecipe(ItemIds::get(ItemIds::STAINED_CLAY, 15 - $i, 8)))->addIngredient(ItemIds::get(ItemIds::HARDENED_CLAY, 0, 4))->addIngredient(ItemIds::get(ItemIds::DYE, $i, 1))->addIngredient(ItemIds::get(ItemIds::HARDENED_CLAY, 0, 4)));
            $this->registerRecipe((new ShapelessRecipe(ItemIds::get(ItemIds::CARPET, $i, 3)))->addIngredient(ItemIds::get(ItemIds::WOOL, $i, 2)));
            $this->registerRecipe((new ShapelessRecipe(ItemIds::get(ItemIds::STAINED_CLAY, 15 - $i, 8)))->addIngredient(ItemIds::get(ItemIds::HARDENED_CLAY, 0, 4))->addIngredient(ItemIds::get(ItemIds::DYE, $i, 1))->addIngredient(ItemIds::get(ItemIds::HARDENED_CLAY, 0, 4)));
            $this->registerRecipe((new ShapelessRecipe(ItemIds::get(ItemIds::STAINED_GLASS, 15 - $i, 8)))->addIngredient(ItemIds::get(ItemIds::GLASS, 0, 4))->addIngredient(ItemIds::get(ItemIds::DYE, $i, 1))->addIngredient(ItemIds::get(ItemIds::GLASS, 0, 4)));
        }

        $this->registerRecipe((new ShapelessRecipe(ItemIds::get(ItemIds::DYE, 11, 2)))->addIngredient(ItemIds::get(ItemIds::DANDELION, 0, 1)));
        $this->registerRecipe((new ShapelessRecipe(ItemIds::get(ItemIds::DYE, 15, 3)))->addIngredient(ItemIds::get(ItemIds::BONE, 0, 1)));
        $this->registerRecipe((new ShapelessRecipe(ItemIds::get(ItemIds::DYE, 3, 2)))->addIngredient(ItemIds::get(ItemIds::DYE, 14, 1))->addIngredient(ItemIds::get(ItemIds::DYE, 0, 1)));
        $this->registerRecipe((new ShapelessRecipe(ItemIds::get(ItemIds::DYE, 3, 3)))->addIngredient(ItemIds::get(ItemIds::DYE, 1, 1))->addIngredient(ItemIds::get(ItemIds::DYE, 0, 1))->addIngredient(ItemIds::get(ItemIds::DYE, 11, 1)));
        $this->registerRecipe((new ShapelessRecipe(ItemIds::get(ItemIds::DYE, 9, 2)))->addIngredient(ItemIds::get(ItemIds::DYE, 15, 1))->addIngredient(ItemIds::get(ItemIds::DYE, 1, 1)));
        $this->registerRecipe((new ShapelessRecipe(ItemIds::get(ItemIds::DYE, 14, 2)))->addIngredient(ItemIds::get(ItemIds::DYE, 11, 1))->addIngredient(ItemIds::get(ItemIds::DYE, 1, 1)));
        $this->registerRecipe((new ShapelessRecipe(ItemIds::get(ItemIds::DYE, 10, 2)))->addIngredient(ItemIds::get(ItemIds::DYE, 2, 1))->addIngredient(ItemIds::get(ItemIds::DYE, 15, 1)));
        $this->registerRecipe((new ShapelessRecipe(ItemIds::get(ItemIds::DYE, 12, 2)))->addIngredient(ItemIds::get(ItemIds::DYE, 4, 1))->addIngredient(ItemIds::get(ItemIds::DYE, 15, 1)));
        $this->registerRecipe((new ShapelessRecipe(ItemIds::get(ItemIds::DYE, 6, 2)))->addIngredient(ItemIds::get(ItemIds::DYE, 4, 1))->addIngredient(ItemIds::get(ItemIds::DYE, 2, 1)));
        $this->registerRecipe((new ShapelessRecipe(ItemIds::get(ItemIds::DYE, 5, 2)))->addIngredient(ItemIds::get(ItemIds::DYE, 4, 1))->addIngredient(ItemIds::get(ItemIds::DYE, 1, 1)));
        $this->registerRecipe((new ShapelessRecipe(ItemIds::get(ItemIds::DYE, 13, 3)))->addIngredient(ItemIds::get(ItemIds::DYE, 4, 1))->addIngredient(ItemIds::get(ItemIds::DYE, 1, 1))->addIngredient(ItemIds::get(ItemIds::DYE, 15, 1)));
        $this->registerRecipe((new ShapelessRecipe(ItemIds::get(ItemIds::DYE, 1, 1)))->addIngredient(ItemIds::get(ItemIds::BEETROOT, 0, 1)));

        $this->registerRecipe((new ShapelessRecipe(ItemIds::get(ItemIds::DYE, 13, 4)))->addIngredient(ItemIds::get(ItemIds::DYE, 15, 1))->addIngredient(ItemIds::get(ItemIds::DYE, 1, 2))->addIngredient(ItemIds::get(ItemIds::DYE, 4, 1)));
        $this->registerRecipe((new ShapelessRecipe(ItemIds::get(ItemIds::DYE, 13, 2)))->addIngredient(ItemIds::get(ItemIds::DYE, 5, 1))->addIngredient(ItemIds::get(ItemIds::DYE, 9, 1)));
        $this->registerRecipe((new ShapelessRecipe(ItemIds::get(ItemIds::DYE, 8, 2)))->addIngredient(ItemIds::get(ItemIds::DYE, 0, 1))->addIngredient(ItemIds::get(ItemIds::DYE, 15, 1)));
        $this->registerRecipe((new ShapelessRecipe(ItemIds::get(ItemIds::DYE, 7, 3)))->addIngredient(ItemIds::get(ItemIds::DYE, 0, 1))->addIngredient(ItemIds::get(ItemIds::DYE, 15, 2)));
        $this->registerRecipe((new ShapelessRecipe(ItemIds::get(ItemIds::DYE, 7, 2)))->addIngredient(ItemIds::get(ItemIds::DYE, 0, 1))->addIngredient(ItemIds::get(ItemIds::DYE, 8, 1)));

    }

    protected function registerIngots()
    {
        $ingots = [
            ItemIds::GOLD_BLOCK => ItemIds::GOLD_INGOT,
            ItemIds::IRON_BLOCK => ItemIds::IRON_INGOT,
            ItemIds::DIAMOND_BLOCK => ItemIds::DIAMOND,
            ItemIds::EMERALD_BLOCK => ItemIds::EMERALD,
            ItemIds::REDSTONE_BLOCK => ItemIds::REDSTONE_DUST,
            ItemIds::COAL_BLOCK => ItemIds::COAL,
            ItemIds::HAY_BALE => ItemIds::WHEAT,
            ItemIds::NETHER_WART_BLOCK_BLOCK => ItemIds::NETHER_WART,
        ];

        foreach ($ingots as $block => $ingot) {
            $this->registerRecipe((new BigShapelessRecipe(ItemIds::get($block, 0, 1)))->addIngredient(ItemIds::get($ingot, 0, 9)));
            $this->registerRecipe((new ShapelessRecipe(ItemIds::get($ingot, 0, 9)))->addIngredient(ItemIds::get($block, 0, 1)));
        }

        $this->registerRecipe((new BigShapelessRecipe(ItemIds::get(ItemIds::BONE_BLOCK, 0, 1)))->addIngredient(ItemIds::get(ItemIds::DYE, 15, 9)));
        $this->registerRecipe((new ShapelessRecipe(ItemIds::get(ItemIds::DYE, 15, 9)))->addIngredient(ItemIds::get(ItemIds::BONE_BLOCK, 0, 1)));

        $this->registerRecipe((new BigShapelessRecipe(ItemIds::get(ItemIds::LAPIS_BLOCK, 0, 1)))->addIngredient(ItemIds::get(ItemIds::DYE, 4, 9)));
        $this->registerRecipe((new ShapelessRecipe(ItemIds::get(ItemIds::DYE, 4, 9)))->addIngredient(ItemIds::get(ItemIds::LAPIS_BLOCK, 0, 1)));

        $this->registerRecipe((new BigShapelessRecipe(ItemIds::get(ItemIds::GOLD_INGOT, 0, 1)))->addIngredient(ItemIds::get(ItemIds::GOLD_NUGGET, 0, 9)));
        $this->registerRecipe((new ShapelessRecipe(ItemIds::get(ItemIds::GOLD_NUGGET, 0, 9)))->addIngredient(ItemIds::get(ItemIds::GOLD_INGOT, 0, 1)));

    }

    protected function registerTools()
    {
        $types = [
            [ItemIds::WOODEN_PLANK, ItemIds::COBBLESTONE, ItemIds::IRON_INGOT, ItemIds::DIAMOND, ItemIds::GOLD_INGOT],
            [ItemIds::WOODEN_PICKAXE, ItemIds::STONE_PICKAXE, ItemIds::IRON_PICKAXE, ItemIds::DIAMOND_PICKAXE, ItemIds::GOLD_PICKAXE],
            [ItemIds::WOODEN_SHOVEL, ItemIds::STONE_SHOVEL, ItemIds::IRON_SHOVEL, ItemIds::DIAMOND_SHOVEL, ItemIds::GOLD_SHOVEL],
            [ItemIds::WOODEN_AXE, ItemIds::STONE_AXE, ItemIds::IRON_AXE, ItemIds::DIAMOND_AXE, ItemIds::GOLD_AXE],
            [ItemIds::WOODEN_HOE, ItemIds::STONE_HOE, ItemIds::IRON_HOE, ItemIds::DIAMOND_HOE, ItemIds::GOLD_HOE],
        ];
        $shapes = [
            [
                "XXX",
                " I ",
                " I "
            ],
            [
                " X ",
                " I ",
                " I "
            ],
            [
                "XX ",
                "XI ",
                " I "
            ],
            [
                "XX ",
                " I ",
                " I "
            ]
        ];

        for ($i = 1; $i < 5; ++$i) {
            foreach ($types[$i] as $j => $type) {
                $this->registerRecipe((new BigShapedRecipe(ItemIds::get($type, 0, 1), ...$shapes[$i - 1]))->setIngredient("X", ItemIds::get($types[0][$j], -1))->setIngredient("I", ItemIds::get(ItemIds::STICK)));
            }
        }

        $this->registerRecipe((new ShapedRecipe(ItemIds::get(ItemIds::FLINT_AND_STEEL, 0, 1),
            " S",
            "F "
        ))->setIngredient("F", ItemIds::get(ItemIds::FLINT))->setIngredient("S", ItemIds::get(ItemIds::IRON_INGOT)));

        $this->registerRecipe((new ShapedRecipe(ItemIds::get(ItemIds::SHEARS, 0, 1),
            " X",
            "X "
        ))->setIngredient("X", ItemIds::get(ItemIds::IRON_INGOT)));
    }

    protected function registerWeapons()
    {
        $types = [
            [ItemIds::WOODEN_PLANK, ItemIds::COBBLESTONE, ItemIds::IRON_INGOT, ItemIds::DIAMOND, ItemIds::GOLD_INGOT],
            [ItemIds::WOODEN_SWORD, ItemIds::STONE_SWORD, ItemIds::IRON_SWORD, ItemIds::DIAMOND_SWORD, ItemIds::GOLD_SWORD],
        ];


        for ($i = 1; $i < 2; ++$i) {
            foreach ($types[$i] as $j => $type) {
                $this->registerRecipe((new BigShapedRecipe(ItemIds::get($type, 0, 1),
                    " X ",
                    " X ",
                    " I "
                ))->setIngredient("X", ItemIds::get($types[0][$j], -1))->setIngredient("I", ItemIds::get(ItemIds::STICK)));
            }
        }

        $this->registerRecipe((new BigShapedRecipe(ItemIds::get(ItemIds::ARROW, 0, 1),
            " F ",
            " S ",
            " P "
        ))->setIngredient("S", ItemIds::get(ItemIds::STICK))->setIngredient("F", ItemIds::get(ItemIds::FLINT))->setIngredient("P", ItemIds::get(ItemIds::FEATHER)));

        $this->registerRecipe((new BigShapedRecipe(ItemIds::get(ItemIds::BOW, 0, 1),
            " X~",
            "X ~",
            " X~"
        ))->setIngredient("~", ItemIds::get(ItemIds::STRING))->setIngredient("X", ItemIds::get(ItemIds::STICK)));
    }

    protected function registerArmor()
    {
        $types = [
            [ItemIds::LEATHER, ItemIds::FIRE, ItemIds::IRON_INGOT, ItemIds::DIAMOND, ItemIds::GOLD_INGOT],
            [ItemIds::LEATHER_CAP, ItemIds::CHAIN_HELMET, ItemIds::IRON_HELMET, ItemIds::DIAMOND_HELMET, ItemIds::GOLD_HELMET],
            [ItemIds::LEATHER_TUNIC, ItemIds::CHAIN_CHESTPLATE, ItemIds::IRON_CHESTPLATE, ItemIds::DIAMOND_CHESTPLATE, ItemIds::GOLD_CHESTPLATE],
            [ItemIds::LEATHER_PANTS, ItemIds::CHAIN_LEGGINGS, ItemIds::IRON_LEGGINGS, ItemIds::DIAMOND_LEGGINGS, ItemIds::GOLD_LEGGINGS],
            [ItemIds::LEATHER_BOOTS, ItemIds::CHAIN_BOOTS, ItemIds::IRON_BOOTS, ItemIds::DIAMOND_BOOTS, ItemIds::GOLD_BOOTS],
        ];

        $shapes = [
            [
                "XXX",
                "X X",
                "   "
            ],
            [
                "X X",
                "XXX",
                "XXX"
            ],
            [
                "XXX",
                "X X",
                "X X"
            ],
            [
                "   ",
                "X X",
                "X X"
            ]
        ];

        for ($i = 1; $i < 5; ++$i) {
            foreach ($types[$i] as $j => $type) {
                $this->registerRecipe((new BigShapedRecipe(ItemIds::get($type, 0, 1), ...$shapes[$i - 1]))->setIngredient("X", ItemIds::get($types[0][$j], 0, 1)));
            }
        }
    }

    protected function registerFood()
    {
        //TODO: check COOKIES
        $this->registerRecipe((new ShapelessRecipe(ItemIds::get(ItemIds::MELON_SEEDS, 0, 1)))->addIngredient(ItemIds::get(ItemIds::MELON_SLICE, 0, 1)));
        $this->registerRecipe((new ShapelessRecipe(ItemIds::get(ItemIds::PUMPKIN_SEEDS, 0, 4)))->addIngredient(ItemIds::get(ItemIds::PUMPKIN, 0, 1)));
        $this->registerRecipe((new ShapelessRecipe(ItemIds::get(ItemIds::PUMPKIN_PIE, 0, 1)))->addIngredient(ItemIds::get(ItemIds::PUMPKIN, 0, 1))->addIngredient(ItemIds::get(ItemIds::EGG, 0, 1))->addIngredient(ItemIds::get(ItemIds::SUGAR, 0, 1)));
        $this->registerRecipe((new ShapelessRecipe(ItemIds::get(ItemIds::MUSHROOM_STEW, 0, 1)))->addIngredient(ItemIds::get(ItemIds::BOWL, 0, 1))->addIngredient(ItemIds::get(ItemIds::BROWN_MUSHROOM, 0, 1))->addIngredient(ItemIds::get(ItemIds::RED_MUSHROOM, 0, 1)));
        $this->registerRecipe((new BigShapelessRecipe(ItemIds::get(ItemIds::MELON_BLOCK, 0, 1)))->addIngredient(ItemIds::get(ItemIds::MELON_SLICE, 0, 9)));
        $this->registerRecipe((new BigShapelessRecipe(ItemIds::get(ItemIds::BEETROOT_SOUP, 0, 1)))->addIngredient(ItemIds::get(ItemIds::BEETROOT, 0, 4))->addIngredient(ItemIds::get(ItemIds::BOWL, 0, 1)));
        $this->registerRecipe((new BigShapedRecipe(ItemIds::get(ItemIds::BREAD, 0, 1), "XXX", "   ", "   "))->setIngredient("X", ItemIds::get(ItemIds::WHEAT, 0, 1)));
        $this->registerRecipe((new BigShapelessRecipe(ItemIds::get(ItemIds::CAKE, 0, 1)))->addIngredient(ItemIds::get(ItemIds::WHEAT, 0, 3))->addIngredient(ItemIds::get(ItemIds::BUCKET, 1, 3))->addIngredient(ItemIds::get(ItemIds::EGG, 0, 1))->addIngredient(ItemIds::get(ItemIds::SUGAR, 0, 2)));
    }

    /**
     * @param UUID $id
     * @return Recipe
     */
    public function getRecipe(UUID $id)
    {
        $index = $id->toBinary();
        return isset($this->recipes[$index]) ? $this->recipes[$index] : null;
    }

    /**
     * @return Recipe[]
     */
    public function getRecipes()
    {
        return $this->recipes;
    }

    /**
     * @return FurnaceRecipe[]
     */
    public function getFurnaceRecipes()
    {
        return $this->furnaceRecipes;
    }

    /**
     * @param Item $input
     *
     * @return FurnaceRecipe
     */
    public function matchFurnaceRecipe(Item $input)
    {
        if (isset($this->furnaceRecipes[$input->getId() . ":" . $input->getDamage()])) {
            return $this->furnaceRecipes[$input->getId() . ":" . $input->getDamage()];
        } elseif (isset($this->furnaceRecipes[$input->getId() . ":?"])) {
            return $this->furnaceRecipes[$input->getId() . ":?"];
        }

        return null;
    }

    public function getRecipeByHash($hash)
    {
        if (isset($this->recipeLookup[$hash])) {
            foreach ($this->recipeLookup[$hash] as $recipe) {
                return $recipe;
            }
        }
        return null;
    }

    /**
     * @param ShapelessRecipe $recipe
     * @return bool
     */
    public function matchRecipe(ShapelessRecipe $recipe)
    {
        if (!isset($this->recipeLookup[$idx = $recipe->getResult()->getId() . ":" . $recipe->getResult()->getDamage()])) {
            return false;
        }

        $hash = "";
        $ingredients = $recipe->getIngredientList();
        usort($ingredients, [$this, "sort"]);
        foreach ($ingredients as $item) {
            $hash .= $item->getId() . ":" . ($item->getDamage() === null ? "?" : $item->getDamage()) . "x" . $item->getCount() . ",";
        }

        if (isset($this->recipeLookup[$idx][$hash])) {
            return true;
        }

        $hasRecipe = null;
        foreach ($this->recipeLookup[$idx] as $recipe) {
            if ($recipe instanceof ShapelessRecipe) {
                if ($recipe->getIngredientCount() !== count($ingredients)) {
                    continue;
                }
                $checkInput = $recipe->getIngredientList();
                foreach ($ingredients as $item) {
                    $amount = $item->getCount();
                    foreach ($checkInput as $k => $checkItem) {
                        if ($checkItem->equals($item, $checkItem->getDamage() === null ? false : true, $checkItem->getCompound() === null ? false : true)) {
                            $remove = min($checkItem->getCount(), $amount);
                            $checkItem->setCount($checkItem->getCount() - $remove);
                            if ($checkItem->getCount() === 0) {
                                unset($checkInput[$k]);
                            }
                            $amount -= $remove;
                            if ($amount === 0) {
                                break;
                            }
                        }
                    }
                }

                if (count($checkInput) === 0) {
                    $hasRecipe = $recipe;
                    break;
                }
            }
            if ($hasRecipe instanceof Recipe) {
                break;
            }
        }

        return $hasRecipe !== null;

    }

}