<?php


namespace pocketmine\item;


use pocketmine\block\Block;
use pocketmine\block\Flower;

class ItemIds
{

    const AIR = 0;
    const STONE = 1;
    const GRASS = 2;
    const DIRT = 3;

    //All Block IDs are here too
    const COBBLESTONE = 4;
    const COBBLE = 4;
    const PLANK = 5;
    const PLANKS = 5;
    const WOODEN_PLANK = 5;
    const WOODEN_PLANKS = 5;
    const SAPLING = 6;
    const SAPLINGS = 6;
    const BEDROCK = 7;
    const WATER = 8;
    const STILL_WATER = 9;
    const LAVA = 10;
    const STILL_LAVA = 11;
    const SAND = 12;
    const GRAVEL = 13;
    const GOLD_ORE = 14;
    const IRON_ORE = 15;
    const COAL_ORE = 16;
    const LOG = 17;
    const WOOD = 17;
    const TRUNK = 17;
    const LEAVES = 18;
    const LEAVE = 18;
    const SPONGE = 19;
    const GLASS = 20;
    const LAPIS_ORE = 21;
    const LAPIS_BLOCK = 22;
    const DISPENSER = 23;
    const SANDSTONE = 24;
    const NOTE_BLOCK = 25;
    const BED_BLOCK = 26;
    const POWERED_RAIL = 27;
    const DETECTOR_RAIL = 28;
    const STICKY_PISTON = 29;
    const COBWEB = 30;
    const TALL_GRASS = 31;
    const BUSH = 32;
    const DEAD_BUSH = 32;
    const WOOL = 35;
    const DANDELION = 37;
    const POPPY = 38;
    const ROSE = 38;
    const RED_FLOWER = 38;
    const BROWN_MUSHROOM = 39;
    const RED_MUSHROOM = 40;
    const GOLD_BLOCK = 41;
    const IRON_BLOCK = 42;
    const DOUBLE_SLAB = 43;
    const DOUBLE_SLABS = 43;
    const SLAB = 44;
    const SLABS = 44;
    const BRICKS = 45;
    const BRICKS_BLOCK = 45;
    const TNT = 46;
    const BOOKSHELF = 47;
    const MOSS_STONE = 48;
    const MOSSY_STONE = 48;
    const OBSIDIAN = 49;
    const TORCH = 50;
    const FIRE = 51;
    const MONSTER_SPAWNER = 52;
    const WOOD_STAIRS = 53;
    const WOODEN_STAIRS = 53;
    const OAK_WOOD_STAIRS = 53;
    const OAK_WOODEN_STAIRS = 53;
    const CHEST = 54;
    const REDSTONE_WIRE = 55;
    const DIAMOND_ORE = 56;
    const DIAMOND_BLOCK = 57;
    const CRAFTING_TABLE = 58;
    const WORKBENCH = 58;
    const WHEAT_BLOCK = 59;
    const FARMLAND = 60;
    const FURNACE = 61;
    const BURNING_FURNACE = 62;
    const LIT_FURNACE = 62;
    const SIGN_POST = 63;
    const DOOR_BLOCK = 64;
    const WOODEN_DOOR_BLOCK = 64;
    const WOOD_DOOR_BLOCK = 64;
    const LADDER = 65;
    const RAIL = 66;
    const COBBLE_STAIRS = 67;
    const COBBLESTONE_STAIRS = 67;
    const WALL_SIGN = 68;
    const LEVER = 69;
    const STONE_PRESSURE_PLATE = 70;
    const IRON_DOOR_BLOCK = 71;
    const WOODEN_PRESSURE_PLATE = 72;
    const REDSTONE_ORE = 73;
    const GLOWING_REDSTONE_ORE = 74;
    const LIT_REDSTONE_ORE = 74;
    const REDSTONE_TORCH = 75;
    const REDSTONE_TORCH_ACTIVE = 76;
    const STONE_BUTTON = 77;
    const SNOW = 78;
    const SNOW_LAYER = 78;
    const ICE = 79;
    const SNOW_BLOCK = 80;
    const CACTUS = 81;
    const CLAY_BLOCK = 82;
    const REEDS = 83;
    const SUGARCANE_BLOCK = 83;
    const JUKEBOX = 84;
    const FENCE = 85;
    const PUMPKIN = 86;
    const NETHERRACK = 87;
    const SOUL_SAND = 88;
    const GLOWSTONE = 89;
    const GLOWSTONE_BLOCK = 89;
    const PORTAL = 90;
    const LIT_PUMPKIN = 91;
    const JACK_O_LANTERN = 91;
    const CAKE_BLOCK = 92;
    const REDSTONE_REPEATER_BLOCK = 93;
    const REDSTONE_REPEATER_BLOCK_ACTIVE = 94;
    const INVISIBLE_BEDROCK = 95;
    const TRAPDOOR = 96;
    const MONSTER_EGG = 97;
    const STONE_BRICKS = 98;
    const STONE_BRICK = 98;
    const BROWN_MUSHROOM_BLOCK = 99;
    CONST RED_MUSHROOM_BLOCK = 100;
    const IRON_BAR = 101;
    const IRON_BARS = 101;
    const GLASS_PANE = 102;
    const GLASS_PANEL = 102;
    const MELON_BLOCK = 103;
    const PUMPKIN_STEM = 104;
    const MELON_STEM = 105;
    const VINE = 106;
    const VINES = 106;
    const FENCE_GATE = 107;
    const BRICK_STAIRS = 108;
    const STONE_BRICK_STAIRS = 109;
    const MYCELIUM = 110;
    const WATER_LILY = 111;
    const LILY_PAD = 111;
    const NETHER_BRICKS = 112;
    const NETHER_BRICK_BLOCK = 112;
    const NETHER_BRICK_FENCE = 113;
    const NETHER_BRICKS_STAIRS = 114;
    const NETHER_WART_BLOCK = 115;
    const ENCHANTING_TABLE = 116;
    const ENCHANT_TABLE = 116;
    const ENCHANTMENT_TABLE = 116;
    const BREWING_STAND_BLOCK = 117;
    const CAULDRON_BLOCK = 118;
    const END_PORTAL = 120;
    const END_STONE = 121;
    const DRAGON_EGG = 122;
    const REDSTONE_LAMP = 123;
    const REDSTONE_LAMP_ACTIVE = 124;
    const DROPPER = 125;
    const ACTIVATOR_RAIL = 126;
    const COCOA = 127;
    const SANDSTONE_STAIRS = 128;
    const EMERALD_ORE = 129;
    const ENDER_CHEST = 130;
    const TRIPWIRE_HOOK = 131;
    const TRIPWIRE = 132;
    const EMERALD_BLOCK = 133;
    const SPRUCE_WOOD_STAIRS = 134;
    const SPRUCE_WOODEN_STAIRS = 134;
    const BIRCH_WOOD_STAIRS = 135;
    const BIRCH_WOODEN_STAIRS = 135;
    const JUNGLE_WOOD_STAIRS = 136;
    const JUNGLE_WOODEN_STAIRS = 136;
    const BEACON = 138;
    const COBBLE_WALL = 139;
    const STONE_WALL = 139;
    const COBBLESTONE_WALL = 139;
    const FLOWER_POT_BLOCK = 140;
    const CARROT_BLOCK = 141;
    const POTATO_BLOCK = 142;
    const WOODEN_BUTTON = 143;
    const MOB_HEAD_BLOCK = 144;
    const ANVIL = 145;
    const TRAPPED_CHEST = 146;
    const WEIGHTED_PRESSURE_PLATE_LIGHT = 147;
    const WEIGHTED_PRESSURE_PLATE_HEAVY = 148;
    const REDSTONE_COMPARATOR_BLOCK = 149;
    const REDSTONE_COMPARATOR_BLOCK_POWERED = 150;
    const DAYLIGHT_SENSOR = 151;
    const REDSTONE_BLOCK = 152;
    const NETHER_QUARTZ_ORE = 153;
    const HOPPER_BLOCK = 154;
    const QUARTZ_BLOCK = 155;
    const QUARTZ_STAIRS = 156;
    const DOUBLE_WOOD_SLAB = 157;
    const DOUBLE_WOODEN_SLAB = 157;
    const DOUBLE_WOOD_SLABS = 157;
    const DOUBLE_WOODEN_SLABS = 157;
    const WOOD_SLAB = 158;
    const WOODEN_SLAB = 158;
    const WOOD_SLABS = 158;
    const WOODEN_SLABS = 158;
    const STAINED_CLAY = 159;
    const STAINED_HARDENED_CLAY = 159;
    const STAINED_GLASS_PANE = 160;
    const LEAVES2 = 161;
    const LEAVE2 = 161;
    const WOOD2 = 162;
    const TRUNK2 = 162;
    const LOG2 = 162;
    const ACACIA_WOOD_STAIRS = 163;
    const ACACIA_WOODEN_STAIRS = 163;
    const DARK_OAK_WOOD_STAIRS = 164;
    const DARK_OAK_WOODEN_STAIRS = 164;
    const SLIME_BLOCK = 165;
    const IRON_TRAPDOOR = 167;
    const PRISMARINE = 168;
    const SEA_LANTERN = 169;
    const HAY_BALE = 170;
    const CARPET = 171;
    const HARDENED_CLAY = 172;
    const COAL_BLOCK = 173;
    const PACKED_ICE = 174;
    const DOUBLE_PLANT = 175;
    const STANDING_BANNER = 176;
    const WALL_BANNER = 177;
    const INVERTED_DAYLIGHT_SENSOR = 178;
    const RED_SANDSTONE = 179;
    const RED_SANDSTONE_STAIRS = 180;
    const DOUBLE_STONE_SLAB2 = 181;
    const DOUBLE_RED_SANDSTONE_SLAB = 181;
    const STONE_SLAB2 = 182;
    const RED_SANDSTONE_SLAB = 182;
    const FENCE_GATE_SPRUCE = 183;
    const FENCE_GATE_BIRCH = 184;
    const FENCE_GATE_JUNGLE = 185;
    const FENCE_GATE_DARK_OAK = 186;
    const FENCE_GATE_ACACIA = 187;
    const SPRUCE_DOOR_BLOCK = 193;
    const BIRCH_DOOR_BLOCK = 194;
    const JUNGLE_DOOR_BLOCK = 195;
    const ACACIA_DOOR_BLOCK = 196;
    const DARK_OAK_DOOR_BLOCK = 197;
    const GRASS_PATH = 198;
    const ITEM_FRAME_BLOCK = 199;
    const CHORUS_FLOWER = 200;
    const PURPUR_BLOCK = 201;
    const END_BRICKS = 206;
    const END_ROD = 208;
    const MAGMA = 213;
    const NETHER_WART_BLOCK_BLOCK = 214;
    const RED_NETHER_BRICK = 215;
    const BONE_BLOCK = 216;
    const SHULKER_BOX = 218;
    const CHORUS_PLANT = 240;
    const STAINED_GLASS = 241;
    const PODZOL = 243;
    const BEETROOT_BLOCK = 244;
    const STONECUTTER = 245;
    const GLOWING_OBSIDIAN = 246;
    const NETHER_REACTOR = 247;
    const IRON_SHOVEL = 256;
    const IRON_PICKAXE = 257;
    const IRON_AXE = 258;
    const FLINT_STEEL = 259;

    //Normal Item IDs
    const FLINT_AND_STEEL = 259; //
    const APPLE = 260; //
    const BOW = 261; //
    const ARROW = 262; //
    const COAL = 263; //
    const DIAMOND = 264; //
    const IRON_INGOT = 265;
    const GOLD_INGOT = 266;
    const IRON_SWORD = 267; //
    const WOODEN_SWORD = 268; //
    const WOODEN_SHOVEL = 269; //
    const WOODEN_PICKAXE = 270; //
    const WOODEN_AXE = 271;
    const STONE_SWORD = 272; //
    const STONE_SHOVEL = 273; //
    const STONE_PICKAXE = 274; //
    const STONE_AXE = 275; //
    const DIAMOND_SWORD = 276;
    const DIAMOND_SHOVEL = 277;
    const DIAMOND_PICKAXE = 278;
    const DIAMOND_AXE = 279;
    const STICK = 280;
    const STICKS = 280;
    const BOWL = 281;
    const MUSHROOM_STEW = 282;
    const GOLD_SWORD = 283; //
    const GOLD_SHOVEL = 284;
    const GOLD_PICKAXE = 285; //
    const GOLD_AXE = 286;
    const GOLDEN_SWORD = 283;
    const GOLDEN_SHOVEL = 284;
    const GOLDEN_PICKAXE = 285;
    const GOLDEN_AXE = 286;
    const STRING = 287;
    const FEATHER = 288;
    const GUNPOWDER = 289;
    const WOODEN_HOE = 290;
    const STONE_HOE = 291;
    const IRON_HOE = 292; //
    const DIAMOND_HOE = 293;
    const GOLD_HOE = 294;
    const GOLDEN_HOE = 294;
    const SEEDS = 295; //
    const WHEAT_SEEDS = 295;
    const WHEAT = 296;
    const BREAD = 297;
    const LEATHER_CAP = 298;
    const LEATHER_TUNIC = 299;
    const LEATHER_PANTS = 300;
    const LEATHER_BOOTS = 301;
    const CHAIN_HELMET = 302;
    const CHAIN_CHESTPLATE = 303;
    const CHAIN_LEGGINGS = 304;
    const CHAIN_BOOTS = 305;
    const IRON_HELMET = 306;
    const IRON_CHESTPLATE = 307;
    const IRON_LEGGINGS = 308;
    const IRON_BOOTS = 309;
    const DIAMOND_HELMET = 310;
    const DIAMOND_CHESTPLATE = 311;
    const DIAMOND_LEGGINGS = 312;
    const DIAMOND_BOOTS = 313;
    const GOLD_HELMET = 314;
    const GOLD_CHESTPLATE = 315;
    const GOLD_LEGGINGS = 316;
    const GOLD_BOOTS = 317;
    const FLINT = 318;
    const RAW_PORKCHOP = 319;
    const COOKED_PORKCHOP = 320;
    const PAINTING = 321;
    const GOLDEN_APPLE = 322;
    const SIGN = 323;
    const WOODEN_DOOR = 324;
    const BUCKET = 325;
    const MINECART = 328;
    const SADDLE = 329;
    const IRON_DOOR = 330;
    const REDSTONE = 331;
    const REDSTONE_DUST = 331;
    const SNOWBALL = 332;
    const BOAT = 333;
    const LEATHER = 334;
    const BRICK = 336;
    const CLAY = 337;
    const SUGARCANE = 338;
    const SUGAR_CANE = 338;
    const SUGAR_CANES = 338;
    const PAPER = 339;
    const BOOK = 340;
    const SLIMEBALL = 341;
    const MINECART_WITH_CHEST = 342;
    const EGG = 344;
    const COMPASS = 345;
    const FISHING_ROD = 346;
    const CLOCK = 347;
    const GLOWSTONE_DUST = 348;
    const RAW_FISH = 349;
    const COOKED_FISH = 350;
    const DYE = 351;
    const BONE = 352;
    const SUGAR = 353;
    const CAKE = 354;
    const BED = 355;
    const REDSTONE_REPEATER = 356;
    const COOKIE = 357;
    const FILLED_MAP = 358;
    const SHEARS = 359;
    const MELON = 360;
    const MELON_SLICE = 360;
    const PUMPKIN_SEEDS = 361;
    const MELON_SEEDS = 362;
    const RAW_BEEF = 363;
    const STEAK = 364;
    const COOKED_BEEF = 364;
    const RAW_CHICKEN = 365;
    const COOKED_CHICKEN = 366;
    const ROTTEN_FLESH = 367;
    const ENDER_PERL = 368;
    const BLAZE_ROD = 369;
    const GHAST_TEAR = 370;
    const GOLD_NUGGET = 371;
    const GOLDEN_NUGGET = 371;
    const NETHER_WART = 372;
    const POTION = 373;
    const GLASS_BOTTLE = 374;
    const SPIDER_EYE = 375;
    const FERMENTED_SPIDER_EYE = 376;
    const BLAZE_POWDER = 377;
    const MAGMA_CREAM = 378;
    const BREWING_STAND = 379;
    const CAULDRON = 380;
    const EYE_OF_ENDER = 381;
    const GLISTERING_MELON = 382;
    const SPAWN_EGG = 383;
    const BOTTLE_ENCHANTING = 384;
    const FIRE_CHARGE = 385;
    const WRITABLE_BOOK = 386;
    const WRITTEN_BOOK = 387;
    const EMERALD = 388;
    const ITEM_FRAME = 389;
    const FLOWER_POT = 390;
    const CARROT = 391;
    const CARROTS = 391;
    const POTATO = 392;
    const POTATOES = 392;
    const BAKED_POTATO = 393;
    const BAKED_POTATOES = 393;
    const POISONOUS_POTATO = 394;
    const EMPTY_MAP = 395;
    const GOLDEN_CARROT = 396;
    const MOB_HEAD = 397;
    const CARROT_ON_STICK = 398;
    const NETHER_STAR = 399;
    const PUMPKIN_PIE = 400;
    const ENCHANTING_BOOK = 403;
    const REDSTONE_COMPARATOR = 404;
    const NETHER_BRICK = 405;
    const QUARTZ = 406;
    const NETHER_QUARTZ = 406;
    const MINECART_WITH_TNT = 407;
    const MINECART_WITH_HOPPER = 408;
    const PRISMARINE_SHARD = 409;
    const HOPPER = 410;
    const RAW_RABBIT = 411;
    const COOKED_RABBIT = 412;
    const RABBIT_STEW = 413;
    const RABBIT_FOOT = 414;
    const RABBIT_HIDE = 415;
    const LEATHER_HORSE_ARMOR = 416;
    const IRON_HORSE_ARMOR = 417;
    const GOLDEN_HORSE_ARMOR = 418;
    const DIAMOND_HORSE_ARMOR = 419;
    const LEAD = 420;
    const NAME_TAG = 421;
    const PRISMARINE_CRYSTAL = 422;
    const RAW_MUTTON = 423;
    const COOKED_MUTTON = 424;
    const END_CRYSTAL = 426;
    const SPRUCE_DOOR = 427;
    const BIRCH_DOOR = 428;
    const JUNGLE_DOOR = 429;
    const ACACIA_DOOR = 430;
    const DARK_OAK_DOOR = 431;
    const CHORUS_FRUIT = 432;
    const POPPED_CHORUS_FRUIT = 433;
    const DRAGONS_BREATH = 437;
    const SPLASH_POTION = 438;
    const LINGERING_POTION = 441;
    const ELYTRA = 444;
    const SHULKER_SHELL = 445;
    const TOTEM_OF_UNDYING = 450;
    const IRON_NUGGET = 452;
    const BEETROOT = 457;
    const BEETROOT_SEEDS = 458;
    const BEETROOT_SEED = 458;
    const BEETROOT_SOUP = 459;
    const RAW_SALMON = 460;
    const CLOWNFISH = 461;
    const PUFFERFISH = 462;
    const COOKED_SALMON = 463;
    const ENCHANTED_GOLDEN_APPLE = 466;
    const END_PEARL = 468;
    const CAMERA = 498;
    const RECORD_13 = 500;
    const RECORD_CAT = 501;
    const RECORD_BLOCKS = 502;
    const RECORD_CHIRP = 503;
    const RECORD_FAR = 504;
    const RECORD_MALL = 505;
    const RECORD_MELLOHI = 506;
    const RECORD_STAL = 507;
    const RECORD_STRAD = 508;
    const RECORD_WARD = 509;
    const RECORD_11 = 510;
    const RECORD_WAIT = 511;
    const CREATIVE_GROUP_NONE = 0xffffffff;
    const CREATIVE_GROUP_PLANKS = 0;
    const CREATIVE_GROUP_WALLS = 1;
    const CREATIVE_GROUP_FENCE = 2;
    const CREATIVE_GROUP_FENCEGATE = 3;
    const CREATIVE_GROUP_STAIRS = 4;
    const CREATIVE_GROUP_DOOR = 5;
    const CREATIVE_GROUP_TRAPDOOR = 6;
    const CREATIVE_GROUP_GLASS = 7;
    const CREATIVE_GROUP_GLASSPANE = 8;
    const CREATIVE_GROUP_SLAB = 9;
    const CREATIVE_GROUP_STONEBRICK = 10;
    const CREATIVE_GROUP_SANDSTONE = 11;
    const CREATIVE_GROUP_WOOL = 12;
    const CREATIVE_GROUP_WOOLCARPET = 13;
    const CREATIVE_GROUP_STAINEDCLAY = 14;
    const CREATIVE_GROUP_ORE = 15;
    const CREATIVE_GROUP_STONE = 16;
    const CREATIVE_GROUP_LOGS = 17;
    const CREATIVE_GROUP_LEAVES = 18;
    const CREATIVE_GROUP_SAPLING = 19;
    const CREATIVE_GROUP_SEED = 20;
    const CREATIVE_GROUP_CROP = 21;
    const CREATIVE_GROUP_GRASS = 22;
    const CREATIVE_GROUP_FLOWER = 23;
    const CREATIVE_GROUP_DYE = 24;
    const CREATIVE_GROUP_MUSHROOM = 25;
    const CREATIVE_GROUP_MOBEGG = 26;
    const CREATIVE_GROUP_HELMET = 27;
    const CREATIVE_GROUP_CHESTPLATE = 28;
    const CREATIVE_GROUP_LEGGINGS = 29;
    const CREATIVE_GROUP_BOOTS = 30;
    const CREATIVE_GROUP_SWORD = 31;
    const CREATIVE_GROUP_AXE = 32;
    const CREATIVE_GROUP_PICKAXE = 33;
    const CREATIVE_GROUP_SHOVEL = 34;
    const CREATIVE_GROUP_HOE = 35;
    const CREATIVE_GROUP_ARROW = 36;
    const CREATIVE_GROUP_COOKEDFOOD = 37;
    const CREATIVE_GROUP_MISCFOOD = 38;
    const CREATIVE_GROUP_BED = 39;
    const CREATIVE_GROUP_ANVIL = 40;
    const CREATIVE_GROUP_CHEST = 41;
    const CREATIVE_GROUP_SIGN = 42;
    const CREATIVE_GROUP_RAIL = 43;
    const CREATIVE_GROUP_MINECART = 44;
    /** @var \SplFixedArray */
    public static $list = null;
    public static $food = null;
    public static $names = [
        0 => "Air",
        1 => "Stone",
        2 => "Grass",
        3 => "Dirt",
        4 => "Cobblestone",
        5 => "Plank",
        6 => "Sapling",
        7 => "Bedrock",
        8 => "Water",
        9 => "Still Water",
        10 => "Lava",
        11 => "Still Lava",
        12 => "Sand",
        13 => "Gravel",
        14 => "Gold Ore",
        15 => "Iron Ore",
        16 => "Coal Ore",
        17 => "Wood",
        18 => "Leaves",
        19 => "Sponge",
        20 => "Glass",
        21 => "Lapis Ore",
        22 => "Lapis Block",
        24 => "Sandstone",
        26 => "Bed",
        30 => "Cobweb",
        31 => "Tall Grass",
        32 => "Bush",
        35 => "Wool",
        37 => "Dandelion",
        38 => "Red Flower",
        39 => "Brown Mushroom",
        40 => "Red Mushroom",
        41 => "Gold Block",
        42 => "Iron Block",
        43 => "Double Slab",
        44 => "Slab",
        45 => "Bricks",
        46 => "TNT",
        47 => "Bookshelf",
        48 => "Moss Stone",
        49 => "Obsidian",
        50 => "Torch",
        51 => "Fire",
        52 => "Monster Spawner",
        53 => "Wooden Stairs",
        54 => "Chest",
        56 => "Diamond Ore",
        57 => "Diamond Block",
        58 => "Crafting Table",
        59 => "Wheat Block",
        60 => "Farmland",
        61 => "Furnace",
        62 => "Burning Furnace",
        63 => "Sign Post",
        64 => "Door",
        65 => "Ladder",
        66 => "Rail",
        67 => "Cobble Stairs",
        68 => "Wall Sign",
        71 => "Iron Door",
        73 => "Redstone Ore",
        74 => "Glowing Redstone Ore",
        75 => "Redstone Torch",
        76 => "Glowing Redstone Torch",
        78 => "Snow",
        79 => "Ice",
        80 => "Snow Block",
        81 => "Cactus",
        82 => "Clay Block",
        83 => "Sugarcane Block",
        85 => "Fence",
        86 => "Pumpkin Block",
        87 => "Netherrack",
        88 => "Soul Sand",
        89 => "Glowstone",
        90 => "Portal",
        91 => "Jack-O'-Lantern",
        92 => "Cake Block",
        96 => "Trapdoor",
        98 => "Stone Bricks",
        99 => "Brown Mushroom Block",
        100 => "Red Mushroom Block",
        101 => "Iron Bar",
        102 => "Glass Panel",
        103 => "Melon BLock",
        104 => "Pumpkin Stem",
        106 => "Vine",
        107 => "Fence Gate",
        108 => "Brick Stairs",
        109 => "Stone Brick Stairs",
        110 => "Mycelium",
        111 => "Water Lily",
        112 => "Nether Brick",
        113 => "Nether Brick Fence",
        114 => "Nether Brick Stairs",
        116 => "Enchantment Table",
        117 => "Brewing Stand",
        118 => "Cauldron Block",
        120 => "End Portal",
        121 => "End Stone",
        self::DRAGON_EGG => 'Dragon Egg',
        123 => "Redstone Lamp",
        124 => "Redstone Lamp Active",
        125 => "Dropper",
        126 => "Activator Rail",
        127 => "Cocoa",
        128 => "Sendstone Stairs",
        129 => "Emerald Ore",
        self::ENDER_CHEST => 'Ender Chest',
        131 => "Tripwire Hook",
        132 => "Tripwire",
        133 => "Emerald Block",
        134 => "Spruce Wood Stairs",
        135 => "Birch Wood Stairs",
        136 => "Jungle Wood Stairs",
        138 => "Beacon",
        139 => "Cobblestone Wall",
        140 => "Flower Pot",
        141 => "Carrot Block",
        142 => "Potato Block",
        143 => "Wooden Button",
        144 => "Mob Head",
        145 => "Anvil",
        146 => "Trapped Chest",
        147 => "Weighted Pressure Plate Light",
        148 => "Weighted Pressure Plate Heavy",
        149 => "Redstone Comparator",
        150 => "Redstone Comparator Powered",
        151 => "Daylight Sensor",
        152 => "Redstone Block",
        153 => "Nether Quartz Ore",
        154 => "Hopper",
        155 => "Quartz Block",
        156 => "Quartz Stairs",
        157 => "Double Wood Slab",
        158 => "Wooden Slab",
        159 => "Stained Clay",
        self::STAINED_GLASS_PANE => 'Stained Glass Pane',
        161 => "Leaves2",
        162 => "Wood2",
        163 => "Acacia Wood Stairs",
        164 => "Dark Oak Wood Stairs",
        165 => "Slime Block",
        167 => "Iron Trapdoor",
        170 => "Hay Bale",
        171 => "Carpet",
        172 => "Hardened CLay",
        173 => "Coal BLock",
        175 => "Double Plant",
        178 => "Inverted Daylight Sensor",
        179 => "Red Sandstone",
        180 => "Red Sandstone Stairs",
        181 => "Double Red Sandstone Slab",
        182 => "Red Sandstone Slab",
        183 => "Fence Gate Spruce",
        184 => "Fence Gate Birch",
        185 => "Fence Gate Jungle",
        186 => "Fence Gate Dark Oak",
        187 => "Fence Gate Acacia",
        193 => "Wood Door Block",
        194 => "Birch Door",
        195 => "Jungle Door",
        196 => "Acacia Door",
        197 => "Dark Oak Door",
        198 => "Grass Path",
        self::CHORUS_FLOWER => 'Chorus Flower',
        self::PURPUR_BLOCK => 'Purpur Block',
        self::END_BRICKS => 'End Brick',
        self::END_ROD => 'End Rod',
        self::CHORUS_PLANT => 'Chorus Plant',
        self::STAINED_GLASS => 'Stained Glass',
        243 => "Podzol",
        244 => "Beetroot Block",
        245 => "Stonecutter",
        246 => "Glowing Obsidian",
        247 => "Nether Reactor",
        256 => "Iron Shovel",
        257 => "Iron Pickaxe",
        258 => "Iron Axe",
        259 => "Flint and Steel",
        260 => "Apple",
        261 => "Bow",
        262 => "Arrow",
        263 => "Coal",
        264 => "Diamond",
        265 => "Iron Ingot",
        266 => "Gold Ingot",
        267 => "Iron Sword",
        268 => "Wooden Sword",
        269 => "Wooden Shovel",
        270 => "Wooden Pickaxe",
        271 => "Wooden Axe",
        272 => "Stone Sword",
        273 => "Stone Shovel",
        274 => "Stone Pickaxe",
        275 => "Stone Axe",
        276 => "Diamond Sword",
        277 => "Diamond Shovel",
        278 => "Diamond Pickaxe",
        279 => "Diamond Axe",
        280 => "Stick",
        281 => "Bowl",
        282 => "Mushroom Stew",
        283 => "Gold Sword",
        284 => "Gold Shovel",
        285 => "Gold Pickaxe",
        286 => "Gold Axe",
        287 => "String",
        288 => "Feather",
        289 => "Gunpowder",
        290 => "Wooden Hoe",
        291 => "Stone Hoe",
        292 => "Iron Hoe",
        293 => "Diamond Hoe",
        294 => "Gold Hoe",
        295 => "Wheat Seed",
        296 => "Wheat",
        297 => "Bread",
        298 => "Leather Cap",
        299 => "Leather Tunic",
        300 => "Leather Pants",
        301 => "Leather Boots",
        302 => "Chain Helmet",
        303 => "Chain Chestplate",
        304 => "Chain Leggins",
        305 => "Chain Boots",
        306 => "Iron Helmet",
        307 => "Iron Chestplate",
        308 => "Iron Leggins",
        309 => "Iron Boots",
        310 => "Diamond Helmet",
        311 => "Diamond Chestplate",
        312 => "Diamond Leggins",
        313 => "Diamond Boots",
        314 => "Gold Helmet",
        315 => "Gold Chestplate",
        316 => "Gold Leggins",
        317 => "Gold Boots",
        318 => "Flint",
        319 => "Raw Porkchop",
        320 => "Cooked Porkchop",
        321 => "Painting",
        322 => "Golden Apple",
        323 => "Sign",
        324 => "Wooden Door",
        325 => "Bucket",
        328 => "Minecart",
        330 => "Iron Door",
        331 => "Redstone",
        332 => "Snowball",
        334 => "Leather",
        336 => "Bricks",
        337 => "Clay",
        338 => "Sugarcane",
        339 => "Paper",
        340 => "Book",
        341 => "Slimeball",
        344 => "Egg",
        345 => "Compass",
        346 => "Compass",
        347 => "Clock",
        348 => "Glowstone Dust",
        349 => "Raw Fish",
        350 => "Cooked Fish",
        351 => "Dye",
        352 => "Bone",
        353 => "Sugar",
        354 => "Cake",
        355 => "Bed",
        357 => "Cookie",
        359 => "Shears",
        360 => "Melon",
        361 => "Pumpkin Seed",
        362 => "Melon Seed",
        363 => "Raw Beef",
        364 => "Steak",
        365 => "Raw Chicken",
        366 => "Cooked Chicken",
        369 => "Blaze Rod",
        371 => "Gold Nugget",
        373 => "Potion",
        377 => "Blaze powder",
        378 => "Magma Cream",
        383 => "Spawn Egg",
        self::WRITABLE_BOOK => "Book & Quill",
        self::WRITTEN_BOOK => "Written Book",
        388 => "Emerald",
        390 => "Flower Pot",
        391 => "Carrot",
        392 => "Potato",
        393 => "Baked Potato",
        394 => "Poisonous Potato",
        395 => "Empty Map",
        396 => "Golden Carrot",
        397 => "Mob Head",
        398 => "Carrot on a Stick",
        400 => "Pumpkin Pie",
        403 => "Enchanted Book",
        404 => "Redstone Comparator",
        405 => "Nether Bricks",
        406 => "Quartz",
        407 => "Minecart with TNT",
        408 => "Minecart with Hopper",
        410 => "Hopper",
        411 => "Raw Rabbit",
        412 => "Cooked Rabbit",
        414 => "Rabbit's Foot",
        415 => "Rabbit Hide",
        416 => "Leather Horse Armor",
        417 => "Iron Horse Armor",
        418 => "Golden Horse Armor",
        419 => "Diamond Horse Armor",
        420 => "Lead",
        421 => "Name Tag",
        self::PRISMARINE_CRYSTAL => "Prismarine Crystal",
        423 => "Raw Mutton",
        424 => "Cooked Mutton",
        427 => "Spruce Door",
        428 => "Birch Door",
        429 => "Jungle Door",
        430 => "Acacia Door",
        431 => "Chorus Fruit",
        438 => "Splash Potion",
        457 => "Beetroot",
        458 => "Beetroot Seed",
        459 => "Beetroot Soup",
        460 => "Raw Salmon",
        461 => "Clownfish",
        462 => "Pufferfish",
        463 => "Cooked Salmon",
        466 => "Enchanted Golden Apple",
        498 => "Camera",
    ];
    private static $itemBlockClass = ItemBlock::class;
    private static $creativeGroupData = [
        self::CREATIVE_GROUP_PLANKS => ['name' => 'itemGroup.name.planks', 'item' => self::PLANK],
        self::CREATIVE_GROUP_WALLS => ['name' => 'itemGroup.name.walls', 'item' => self::COBBLESTONE_WALL],
        self::CREATIVE_GROUP_FENCE => ['name' => 'itemGroup.name.fence', 'item' => self::FENCE],
        self::CREATIVE_GROUP_FENCEGATE => ['name' => 'itemGroup.name.fenceGate', 'item' => self::FENCE_GATE],
        self::CREATIVE_GROUP_STAIRS => ['name' => 'itemGroup.name.stairs', 'item' => self::COBBLE_STAIRS],
        self::CREATIVE_GROUP_DOOR => ['name' => 'itemGroup.name.door', 'item' => self::WOODEN_DOOR],
        self::CREATIVE_GROUP_TRAPDOOR => ['name' => 'itemGroup.name.trapdoor', 'item' => self::TRAPDOOR],
        self::CREATIVE_GROUP_GLASS => ['name' => 'itemGroup.name.glass', 'item' => self::GLASS],
        self::CREATIVE_GROUP_GLASSPANE => ['name' => 'itemGroup.name.glassPane', 'item' => self::GLASS_PANE],
        self::CREATIVE_GROUP_SLAB => ['name' => 'itemGroup.name.slab', 'item' => self::SLAB],
        self::CREATIVE_GROUP_STONEBRICK => ['name' => 'itemGroup.name.stoneBrick', 'item' => self::STONE_BRICK],
        self::CREATIVE_GROUP_SANDSTONE => ['name' => 'itemGroup.name.sandstone', 'item' => self::SANDSTONE],
        self::CREATIVE_GROUP_WOOL => ['name' => 'itemGroup.name.wool', 'item' => self::WOOL],
        self::CREATIVE_GROUP_WOOLCARPET => ['name' => 'itemGroup.name.woolCarpet', 'item' => self::CARPET],
        self::CREATIVE_GROUP_STAINEDCLAY => ['name' => 'itemGroup.name.stainedClay', 'item' => self::CLAY_BLOCK],
        self::CREATIVE_GROUP_ORE => ['name' => 'itemGroup.name.ore', 'item' => self::IRON_ORE],
        self::CREATIVE_GROUP_STONE => ['name' => 'itemGroup.name.stone', 'item' => self::STONE],
        self::CREATIVE_GROUP_LOGS => ['name' => 'itemGroup.name.log', 'item' => self::LOG],
        self::CREATIVE_GROUP_LEAVES => ['name' => 'itemGroup.name.wood', 'item' => self::LEAVES],
        self::CREATIVE_GROUP_SAPLING => ['name' => 'itemGroup.name.sapling', 'item' => self::SAPLING],
        self::CREATIVE_GROUP_SEED => ['name' => 'itemGroup.name.seed', 'item' => self::SEEDS],
        self::CREATIVE_GROUP_CROP => ['name' => 'itemGroup.name.crop', 'item' => self::WHEAT],
        self::CREATIVE_GROUP_GRASS => ['name' => 'itemGroup.name.grass', 'item' => self::TALL_GRASS],
        self::CREATIVE_GROUP_FLOWER => ['name' => 'itemGroup.name.flower', 'item' => self::DANDELION],
        self::CREATIVE_GROUP_DYE => ['name' => 'itemGroup.name.dye', 'item' => self::DYE],
        self::CREATIVE_GROUP_MUSHROOM => ['name' => 'itemGroup.name.mushroom', 'item' => self::BROWN_MUSHROOM],
        self::CREATIVE_GROUP_MOBEGG => ['name' => 'itemGroup.name.mobEgg', 'item' => self::SPAWN_EGG],
        self::CREATIVE_GROUP_HELMET => ['name' => 'itemGroup.name.helmet', 'item' => self::LEATHER_CAP],
        self::CREATIVE_GROUP_CHESTPLATE => ['name' => 'itemGroup.name.chestplate', 'item' => self::LEATHER_TUNIC],
        self::CREATIVE_GROUP_LEGGINGS => ['name' => 'itemGroup.name.leggings', 'item' => self::LEATHER_PANTS],
        self::CREATIVE_GROUP_BOOTS => ['name' => 'itemGroup.name.boots', 'item' => self::LEATHER_BOOTS],
        self::CREATIVE_GROUP_SWORD => ['name' => 'itemGroup.name.sword', 'item' => self::WOODEN_SWORD],
        self::CREATIVE_GROUP_AXE => ['name' => 'itemGroup.name.axe', 'item' => self::WOODEN_AXE],
        self::CREATIVE_GROUP_PICKAXE => ['name' => 'itemGroup.name.pickaxe', 'item' => self::WOODEN_PICKAXE],
        self::CREATIVE_GROUP_SHOVEL => ['name' => 'itemGroup.name.shovel', 'item' => self::WOODEN_SHOVEL],
        self::CREATIVE_GROUP_HOE => ['name' => 'itemGroup.name.hoe', 'item' => self::WOODEN_HOE],
        self::CREATIVE_GROUP_ARROW => ['name' => 'itemGroup.name.arrow', 'item' => self::ARROW],
        self::CREATIVE_GROUP_COOKEDFOOD => ['name' => 'itemGroup.name.cookedFood', 'item' => self::COOKED_CHICKEN],
        self::CREATIVE_GROUP_MISCFOOD => ['name' => 'itemGroup.name.miscFood', 'item' => self::BREAD],
        self::CREATIVE_GROUP_BED => ['name' => 'itemGroup.name.bed', 'item' => self::BED],
        self::CREATIVE_GROUP_ANVIL => ['name' => 'itemGroup.name.anvil', 'item' => self::ANVIL],
        self::CREATIVE_GROUP_CHEST => ['name' => 'itemGroup.name.chest', 'item' => self::CHEST],
        self::CREATIVE_GROUP_SIGN => ['name' => 'itemGroup.name.sign', 'item' => self::SIGN],
        self::CREATIVE_GROUP_RAIL => ['name' => 'itemGroup.name.rail', 'item' => self::RAIL],
        self::CREATIVE_GROUP_MINECART => ['name' => 'itemGroup.name.minecart', 'item' => self::MINECART],
    ];
    public static $creative = [];

    public static function init()
    {
        if (self::$list === null) {
            self::$list = new \SplFixedArray(65536);
            self::$list[self::SUGARCANE] = Sugarcane::class;
            self::$list[self::WHEAT_SEEDS] = WheatSeeds::class;
            self::$list[self::PUMPKIN_SEEDS] = PumpkinSeeds::class;
            self::$list[self::MELON_SEEDS] = MelonSeeds::class;
            self::$list[self::MUSHROOM_STEW] = MushroomStew::class;
            self::$list[self::BEETROOT_SOUP] = BeetrootSoup::class;
            self::$list[self::CARROT] = Carrot::class;
            self::$list[self::POTATO] = Potato::class;
            self::$list[self::BEETROOT_SEEDS] = BeetrootSeeds::class;
            self::$list[self::SIGN] = Sign::class;
            self::$list[self::WOODEN_DOOR] = WoodenDoor::class;
            self::$list[self::BUCKET] = Bucket::class;
            self::$list[self::IRON_DOOR] = IronDoor::class;
            self::$list[self::CAKE] = Cake::class;
            self::$list[self::BED] = Bed::class;
            self::$list[self::PAINTING] = Painting::class;
            self::$list[self::COAL] = Coal::class;
            self::$list[self::APPLE] = Apple::class;
            self::$list[self::SPAWN_EGG] = SpawnEgg::class;
            self::$list[self::DIAMOND] = Diamond::class;
            self::$list[self::STICK] = Stick::class;
            self::$list[self::SNOWBALL] = Snowball::class;
            self::$list[self::EGG] = Egg::class;
            self::$list[self::BOWL] = Bowl::class;
            self::$list[self::FEATHER] = Feather::class;
            self::$list[self::BRICK] = Brick::class;
            self::$list[self::LEATHER_CAP] = LeatherCap::class;
            self::$list[self::LEATHER_TUNIC] = LeatherTunic::class;
            self::$list[self::LEATHER_PANTS] = LeatherPants::class;
            self::$list[self::LEATHER_BOOTS] = LeatherBoots::class;
            self::$list[self::CHAIN_HELMET] = ChainHelmet::class;
            self::$list[self::CHAIN_CHESTPLATE] = ChainChestplate::class;
            self::$list[self::CHAIN_LEGGINGS] = ChainLeggings::class;
            self::$list[self::CHAIN_BOOTS] = ChainBoots::class;
            self::$list[self::IRON_HELMET] = IronHelmet::class;
            self::$list[self::IRON_CHESTPLATE] = IronChestplate::class;
            self::$list[self::IRON_LEGGINGS] = IronLeggings::class;
            self::$list[self::IRON_BOOTS] = IronBoots::class;
            self::$list[self::GOLD_HELMET] = GoldHelmet::class;
            self::$list[self::GOLD_CHESTPLATE] = GoldChestplate::class;
            self::$list[self::GOLD_LEGGINGS] = GoldLeggings::class;
            self::$list[self::GOLD_BOOTS] = GoldBoots::class;
            self::$list[self::DIAMOND_HELMET] = DiamondHelmet::class;
            self::$list[self::DIAMOND_CHESTPLATE] = DiamondChestplate::class;
            self::$list[self::DIAMOND_LEGGINGS] = DiamondLeggings::class;
            self::$list[self::DIAMOND_BOOTS] = DiamondBoots::class;
            self::$list[self::IRON_SWORD] = IronSword::class;
            self::$list[self::IRON_INGOT] = IronIngot::class;
            self::$list[self::GOLD_INGOT] = GoldIngot::class;
            self::$list[self::IRON_SHOVEL] = IronShovel::class;
            self::$list[self::IRON_PICKAXE] = IronPickaxe::class;
            self::$list[self::IRON_AXE] = IronAxe::class;
            self::$list[self::IRON_HOE] = IronHoe::class;
            self::$list[self::DIAMOND_SWORD] = DiamondSword::class;
            self::$list[self::DIAMOND_SHOVEL] = DiamondShovel::class;
            self::$list[self::DIAMOND_PICKAXE] = DiamondPickaxe::class;
            self::$list[self::DIAMOND_AXE] = DiamondAxe::class;
            self::$list[self::DIAMOND_HOE] = DiamondHoe::class;
            self::$list[self::GOLD_SWORD] = GoldSword::class;
            self::$list[self::GOLD_SHOVEL] = GoldShovel::class;
            self::$list[self::GOLD_PICKAXE] = GoldPickaxe::class;
            self::$list[self::GOLD_AXE] = GoldAxe::class;
            self::$list[self::GOLD_HOE] = GoldHoe::class;
            self::$list[self::STONE_SWORD] = StoneSword::class;
            self::$list[self::STONE_SHOVEL] = StoneShovel::class;
            self::$list[self::STONE_PICKAXE] = StonePickaxe::class;
            self::$list[self::STONE_AXE] = StoneAxe::class;
            self::$list[self::STONE_HOE] = StoneHoe::class;
            self::$list[self::WOODEN_SWORD] = WoodenSword::class;
            self::$list[self::WOODEN_SHOVEL] = WoodenShovel::class;
            self::$list[self::WOODEN_PICKAXE] = WoodenPickaxe::class;
            self::$list[self::WOODEN_AXE] = WoodenAxe::class;
            self::$list[self::WOODEN_HOE] = WoodenHoe::class;
            self::$list[self::FLINT_STEEL] = FlintSteel::class;
            self::$list[self::SHEARS] = Shears::class;
            self::$list[self::BOW] = Bow::class;
            self::$list[self::RAW_FISH] = Fish::class;
            self::$list[self::COOKED_FISH] = CookedFish::class;
            self::$list[self::MOB_HEAD] = MobHead::class;
            self::$list[self::BLAZE_POWDER] = BlazePowder::class;
            self::$list[self::FLOWER_POT] = FlowerPot::class;
            self::$list[self::ELYTRA] = Elytra::class;
            self::$list[self::PRISMARINE_CRYSTAL] = PrismarineCrystal::class;
            self::$list[self::POTION] = Potion::class;
            self::$list[self::BOTTLE_ENCHANTING] = BottleOEnchanting::class;
            self::$list[self::WRITABLE_BOOK] = WritableBook::class;

            self::$list[self::SPRUCE_DOOR] = SpruceDoor::class;
            self::$list[self::BIRCH_DOOR] = BirchDoor::class;
            self::$list[self::JUNGLE_DOOR] = JungleDoor::class;
            self::$list[self::ACACIA_DOOR] = AcaciaDoor::class;
            self::$list[self::DARK_OAK_DOOR] = DarkOakDoor::class;

            self::$list[self::SPLASH_POTION] = SplashPotion::class;

            // update for 1.0
            self::$list[self::CHORUS_FRUIT] = ChorusFruit::class;
            self::$list[self::TOTEM_OF_UNDYING] = TotemOfUndying::class;

            // for($i = 0; $i < 256; ++$i){
            // 	if(Block::$list[$i] !== null){
            // 		self::$list[$i] = Block::$list[$i];
            // 	}
            // }
        }

        self::initCreativeItems();
        self::initFood();
    }

    private static function initCreativeItems()
    {
        self::clearCreativeItems();

        self::addCreativeItem(ItemIds::get(ItemIds::WOODEN_PLANKS, 0), self::CREATIVE_GROUP_PLANKS);
        self::addCreativeItem(ItemIds::get(ItemIds::WOODEN_PLANKS, 1), self::CREATIVE_GROUP_PLANKS);
        self::addCreativeItem(ItemIds::get(ItemIds::WOODEN_PLANKS, 2), self::CREATIVE_GROUP_PLANKS);
        self::addCreativeItem(ItemIds::get(ItemIds::WOODEN_PLANKS, 3), self::CREATIVE_GROUP_PLANKS);
        self::addCreativeItem(ItemIds::get(ItemIds::WOODEN_PLANKS, 4), self::CREATIVE_GROUP_PLANKS);
        self::addCreativeItem(ItemIds::get(ItemIds::WOODEN_PLANKS, 5), self::CREATIVE_GROUP_PLANKS);

        self::addCreativeItem(ItemIds::get(ItemIds::COBBLESTONE_WALL, 0), self::CREATIVE_GROUP_WALLS);
        self::addCreativeItem(ItemIds::get(ItemIds::COBBLESTONE_WALL, 1), self::CREATIVE_GROUP_WALLS);
        self::addCreativeItem(ItemIds::get(ItemIds::STONE_WALL, 2), self::CREATIVE_GROUP_WALLS);
        self::addCreativeItem(ItemIds::get(ItemIds::STONE_WALL, 3), self::CREATIVE_GROUP_WALLS);
        self::addCreativeItem(ItemIds::get(ItemIds::STONE_WALL, 4), self::CREATIVE_GROUP_WALLS);
        self::addCreativeItem(ItemIds::get(ItemIds::STONE_WALL, 5), self::CREATIVE_GROUP_WALLS);
        self::addCreativeItem(ItemIds::get(ItemIds::STONE_WALL, 6), self::CREATIVE_GROUP_WALLS);
        self::addCreativeItem(ItemIds::get(ItemIds::STONE_WALL, 7), self::CREATIVE_GROUP_WALLS);
        self::addCreativeItem(ItemIds::get(ItemIds::STONE_WALL, 8), self::CREATIVE_GROUP_WALLS);
        self::addCreativeItem(ItemIds::get(ItemIds::STONE_WALL, 9), self::CREATIVE_GROUP_WALLS);
        self::addCreativeItem(ItemIds::get(ItemIds::STONE_WALL, 10), self::CREATIVE_GROUP_WALLS);
        self::addCreativeItem(ItemIds::get(ItemIds::STONE_WALL, 11), self::CREATIVE_GROUP_WALLS);
        self::addCreativeItem(ItemIds::get(ItemIds::STONE_WALL, 12), self::CREATIVE_GROUP_WALLS);
        self::addCreativeItem(ItemIds::get(ItemIds::STONE_WALL, 13), self::CREATIVE_GROUP_WALLS);

        self::addCreativeItem(ItemIds::get(ItemIds::FENCE, 0), self::CREATIVE_GROUP_FENCE);
        self::addCreativeItem(ItemIds::get(ItemIds::FENCE, 1), self::CREATIVE_GROUP_FENCE);
        self::addCreativeItem(ItemIds::get(ItemIds::FENCE, 2), self::CREATIVE_GROUP_FENCE);
        self::addCreativeItem(ItemIds::get(ItemIds::FENCE, 3), self::CREATIVE_GROUP_FENCE);
        self::addCreativeItem(ItemIds::get(ItemIds::FENCE, 4), self::CREATIVE_GROUP_FENCE);
        self::addCreativeItem(ItemIds::get(ItemIds::FENCE, 5), self::CREATIVE_GROUP_FENCE);
        self::addCreativeItem(ItemIds::get(ItemIds::NETHER_BRICK_FENCE, 0), self::CREATIVE_GROUP_FENCE);

        self::addCreativeItem(ItemIds::get(ItemIds::FENCE_GATE, 0), self::CREATIVE_GROUP_FENCEGATE);
        self::addCreativeItem(ItemIds::get(ItemIds::FENCE_GATE_SPRUCE, 0), self::CREATIVE_GROUP_FENCEGATE);
        self::addCreativeItem(ItemIds::get(ItemIds::FENCE_GATE_BIRCH, 0), self::CREATIVE_GROUP_FENCEGATE);
        self::addCreativeItem(ItemIds::get(ItemIds::FENCE_GATE_DARK_OAK, 0), self::CREATIVE_GROUP_FENCEGATE);
        self::addCreativeItem(ItemIds::get(ItemIds::FENCE_GATE_JUNGLE, 0), self::CREATIVE_GROUP_FENCEGATE);
        self::addCreativeItem(ItemIds::get(ItemIds::FENCE_GATE_ACACIA, 0), self::CREATIVE_GROUP_FENCEGATE);

        self::addCreativeItem(ItemIds::get(ItemIds::COBBLESTONE_STAIRS, 0), self::CREATIVE_GROUP_STAIRS);
        self::addCreativeItem(ItemIds::get(ItemIds::OAK_WOODEN_STAIRS, 0), self::CREATIVE_GROUP_STAIRS);
        self::addCreativeItem(ItemIds::get(ItemIds::SPRUCE_WOODEN_STAIRS, 0), self::CREATIVE_GROUP_STAIRS);
        self::addCreativeItem(ItemIds::get(ItemIds::BIRCH_WOODEN_STAIRS, 0), self::CREATIVE_GROUP_STAIRS);
        self::addCreativeItem(ItemIds::get(ItemIds::JUNGLE_WOODEN_STAIRS, 0), self::CREATIVE_GROUP_STAIRS);
        self::addCreativeItem(ItemIds::get(ItemIds::ACACIA_WOODEN_STAIRS, 0), self::CREATIVE_GROUP_STAIRS);
        self::addCreativeItem(ItemIds::get(ItemIds::DARK_OAK_WOODEN_STAIRS, 0), self::CREATIVE_GROUP_STAIRS);
        self::addCreativeItem(ItemIds::get(ItemIds::BRICK_STAIRS, 0), self::CREATIVE_GROUP_STAIRS);
        self::addCreativeItem(ItemIds::get(ItemIds::STONE_BRICK_STAIRS, 0), self::CREATIVE_GROUP_STAIRS);
        self::addCreativeItem(ItemIds::get(ItemIds::NETHER_BRICKS_STAIRS, 0), self::CREATIVE_GROUP_STAIRS);
        self::addCreativeItem(ItemIds::get(ItemIds::SANDSTONE_STAIRS, 0), self::CREATIVE_GROUP_STAIRS);
        self::addCreativeItem(ItemIds::get(ItemIds::QUARTZ_STAIRS, 0), self::CREATIVE_GROUP_STAIRS);
        self::addCreativeItem(ItemIds::get(ItemIds::RED_SANDSTONE_STAIRS, 0), self::CREATIVE_GROUP_STAIRS);

        self::addCreativeItem(ItemIds::get(ItemIds::WOODEN_DOOR, 0), self::CREATIVE_GROUP_DOOR);

        self::addCreativeItem(ItemIds::get(ItemIds::TRAPDOOR, 0), self::CREATIVE_GROUP_TRAPDOOR);

        self::addCreativeItem(ItemIds::get(ItemIds::IRON_BARS, 0));

        self::addCreativeItem(ItemIds::get(ItemIds::GLASS, 0), self::CREATIVE_GROUP_GLASS);
        self::addColoredCreativeItem(self::STAINED_GLASS, self::CREATIVE_GROUP_GLASS);

        self::addCreativeItem(ItemIds::get(ItemIds::GLASS_PANE, 0), self::CREATIVE_GROUP_GLASSPANE);
        self::addColoredCreativeItem(self::STAINED_GLASS_PANE, self::CREATIVE_GROUP_GLASSPANE);

        self::addCreativeItem(ItemIds::get(ItemIds::LADDER, 0));

        self::addCreativeItem(ItemIds::get(ItemIds::SLAB, 0), self::CREATIVE_GROUP_SLAB);
        self::addCreativeItem(ItemIds::get(ItemIds::SLAB, 3), self::CREATIVE_GROUP_SLAB);
        self::addCreativeItem(ItemIds::get(ItemIds::WOODEN_SLAB, 0), self::CREATIVE_GROUP_SLAB);
        self::addCreativeItem(ItemIds::get(ItemIds::WOODEN_SLAB, 1), self::CREATIVE_GROUP_SLAB);
        self::addCreativeItem(ItemIds::get(ItemIds::WOODEN_SLAB, 2), self::CREATIVE_GROUP_SLAB);
        self::addCreativeItem(ItemIds::get(ItemIds::WOODEN_SLAB, 3), self::CREATIVE_GROUP_SLAB);
        self::addCreativeItem(ItemIds::get(ItemIds::WOODEN_SLAB, 4), self::CREATIVE_GROUP_SLAB);
        self::addCreativeItem(ItemIds::get(ItemIds::WOODEN_SLAB, 5), self::CREATIVE_GROUP_SLAB);
        self::addCreativeItem(ItemIds::get(ItemIds::SLAB, 4), self::CREATIVE_GROUP_SLAB);
        self::addCreativeItem(ItemIds::get(ItemIds::SLAB, 5), self::CREATIVE_GROUP_SLAB);
        self::addCreativeItem(ItemIds::get(ItemIds::SLAB, 6), self::CREATIVE_GROUP_SLAB);
        self::addCreativeItem(ItemIds::get(ItemIds::SLAB, 1), self::CREATIVE_GROUP_SLAB);
        self::addCreativeItem(ItemIds::get(ItemIds::SLAB, 7), self::CREATIVE_GROUP_SLAB);

        self::addCreativeItem(ItemIds::get(ItemIds::STONE_SLAB2, 0), self::CREATIVE_GROUP_SLAB);
        self::addCreativeItem(ItemIds::get(ItemIds::STONE_SLAB2, 1), self::CREATIVE_GROUP_SLAB);
        self::addCreativeItem(ItemIds::get(ItemIds::STONE_SLAB2, 2), self::CREATIVE_GROUP_SLAB);
        self::addCreativeItem(ItemIds::get(ItemIds::STONE_SLAB2, 3), self::CREATIVE_GROUP_SLAB);
        self::addCreativeItem(ItemIds::get(ItemIds::STONE_SLAB2, 4), self::CREATIVE_GROUP_SLAB);
        self::addCreativeItem(ItemIds::get(ItemIds::STONE_SLAB2, 5), self::CREATIVE_GROUP_SLAB);
        self::addCreativeItem(ItemIds::get(ItemIds::STONE_SLAB2, 6), self::CREATIVE_GROUP_SLAB);
        self::addCreativeItem(ItemIds::get(ItemIds::STONE_SLAB2, 7), self::CREATIVE_GROUP_SLAB);

        self::addCreativeItem(ItemIds::get(ItemIds::BRICKS, 0));
        self::addCreativeItem(ItemIds::get(ItemIds::STONE_BRICKS, 0), self::CREATIVE_GROUP_STONEBRICK);
        self::addCreativeItem(ItemIds::get(ItemIds::STONE_BRICKS, 1), self::CREATIVE_GROUP_STONEBRICK);
        self::addCreativeItem(ItemIds::get(ItemIds::STONE_BRICKS, 2), self::CREATIVE_GROUP_STONEBRICK);
        self::addCreativeItem(ItemIds::get(ItemIds::STONE_BRICKS, 3), self::CREATIVE_GROUP_STONEBRICK);
        self::addCreativeItem(ItemIds::get(ItemIds::END_BRICKS, 0), self::CREATIVE_GROUP_STONEBRICK);
        self::addCreativeItem(ItemIds::get(ItemIds::PRISMARINE_CRYSTAL, 0));

        self::addCreativeItem(ItemIds::get(ItemIds::COBBLESTONE, 0));
        self::addCreativeItem(ItemIds::get(ItemIds::MOSS_STONE, 0));
        self::addCreativeItem(ItemIds::get(ItemIds::SANDSTONE, 0), self::CREATIVE_GROUP_SANDSTONE);
        self::addCreativeItem(ItemIds::get(ItemIds::SANDSTONE, 1), self::CREATIVE_GROUP_SANDSTONE);
        self::addCreativeItem(ItemIds::get(ItemIds::SANDSTONE, 2), self::CREATIVE_GROUP_SANDSTONE);
        self::addCreativeItem(ItemIds::get(ItemIds::COAL_BLOCK, 0));
        self::addCreativeItem(ItemIds::get(ItemIds::GOLD_BLOCK, 0));
        self::addCreativeItem(ItemIds::get(ItemIds::IRON_BLOCK, 0));
        self::addCreativeItem(ItemIds::get(ItemIds::EMERALD_BLOCK, 0));
        self::addCreativeItem(ItemIds::get(ItemIds::DIAMOND_BLOCK, 0));
        self::addCreativeItem(ItemIds::get(ItemIds::LAPIS_BLOCK, 0));
        self::addCreativeItem(ItemIds::get(ItemIds::QUARTZ_BLOCK, 0));
        self::addCreativeItem(ItemIds::get(ItemIds::QUARTZ_BLOCK, 1));
        self::addCreativeItem(ItemIds::get(ItemIds::QUARTZ_BLOCK, 2));
        self::addCreativeItem(ItemIds::get(ItemIds::SLIME_BLOCK, 0));

        self::addCreativeItem(ItemIds::get(ItemIds::HAY_BALE, 0));
        self::addCreativeItem(ItemIds::get(ItemIds::BONE_BLOCK, 0));
        self::addCreativeItem(ItemIds::get(ItemIds::NETHER_BRICKS, 0));
        self::addCreativeItem(ItemIds::get(ItemIds::RED_NETHER_BRICK, 0));

        self::addColoredCreativeItem(ItemIds::WOOL, self::CREATIVE_GROUP_WOOL);
        self::addColoredCreativeItem(ItemIds::CARPET, self::CREATIVE_GROUP_WOOLCARPET);

        self::addCreativeItem(ItemIds::get(ItemIds::CLAY_BLOCK, 0), self::CREATIVE_GROUP_STAINEDCLAY);
        self::addCreativeItem(ItemIds::get(ItemIds::HARDENED_CLAY, 0), self::CREATIVE_GROUP_STAINEDCLAY);
        self::addColoredCreativeItem(ItemIds::STAINED_CLAY, self::CREATIVE_GROUP_STAINEDCLAY);

        self::addCreativeItem(ItemIds::get(ItemIds::PURPUR_BLOCK, 0));
        self::addCreativeItem(ItemIds::get(ItemIds::DIRT, 0));
        self::addCreativeItem(ItemIds::get(ItemIds::GRASS, 0));
        self::addCreativeItem(ItemIds::get(ItemIds::PODZOL, 0));
        self::addCreativeItem(ItemIds::get(ItemIds::MYCELIUM, 0));

        self::addCreativeItem(ItemIds::get(ItemIds::STONE, 0), self::CREATIVE_GROUP_STONE);
        self::addCreativeItem(ItemIds::get(ItemIds::STONE, 1), self::CREATIVE_GROUP_STONE);
        self::addCreativeItem(ItemIds::get(ItemIds::STONE, 2), self::CREATIVE_GROUP_STONE);
        self::addCreativeItem(ItemIds::get(ItemIds::STONE, 3), self::CREATIVE_GROUP_STONE);
        self::addCreativeItem(ItemIds::get(ItemIds::STONE, 4), self::CREATIVE_GROUP_STONE);
        self::addCreativeItem(ItemIds::get(ItemIds::STONE, 5), self::CREATIVE_GROUP_STONE);
        self::addCreativeItem(ItemIds::get(ItemIds::STONE, 6), self::CREATIVE_GROUP_STONE);

        self::addCreativeItem(ItemIds::get(ItemIds::IRON_ORE, 0), self::CREATIVE_GROUP_ORE);
        self::addCreativeItem(ItemIds::get(ItemIds::GOLD_ORE, 0), self::CREATIVE_GROUP_ORE);
        self::addCreativeItem(ItemIds::get(ItemIds::DIAMOND_ORE, 0), self::CREATIVE_GROUP_ORE);
        self::addCreativeItem(ItemIds::get(ItemIds::LAPIS_ORE, 0), self::CREATIVE_GROUP_ORE);
        self::addCreativeItem(ItemIds::get(ItemIds::REDSTONE_ORE, 0), self::CREATIVE_GROUP_ORE);
        self::addCreativeItem(ItemIds::get(ItemIds::COAL_ORE, 0), self::CREATIVE_GROUP_ORE);
        self::addCreativeItem(ItemIds::get(ItemIds::EMERALD_ORE, 0), self::CREATIVE_GROUP_ORE);

        self::addCreativeItem(ItemIds::get(ItemIds::GRAVEL, 0));
        self::addCreativeItem(ItemIds::get(ItemIds::SAND, 0));
        self::addCreativeItem(ItemIds::get(ItemIds::SAND, 1));
        self::addCreativeItem(ItemIds::get(ItemIds::CACTUS, 0));

        self::addCreativeItem(ItemIds::get(ItemIds::TRUNK, 0), self::CREATIVE_GROUP_LOGS);
        self::addCreativeItem(ItemIds::get(ItemIds::TRUNK, 1), self::CREATIVE_GROUP_LOGS);
        self::addCreativeItem(ItemIds::get(ItemIds::TRUNK, 2), self::CREATIVE_GROUP_LOGS);
        self::addCreativeItem(ItemIds::get(ItemIds::TRUNK, 3), self::CREATIVE_GROUP_LOGS);
        self::addCreativeItem(ItemIds::get(ItemIds::TRUNK2, 0), self::CREATIVE_GROUP_LOGS);
        self::addCreativeItem(ItemIds::get(ItemIds::TRUNK2, 1), self::CREATIVE_GROUP_LOGS);

        self::addCreativeItem(ItemIds::get(ItemIds::LEAVES, 0), self::CREATIVE_GROUP_LEAVES);
        self::addCreativeItem(ItemIds::get(ItemIds::LEAVES, 1), self::CREATIVE_GROUP_LEAVES);
        self::addCreativeItem(ItemIds::get(ItemIds::LEAVES, 2), self::CREATIVE_GROUP_LEAVES);
        self::addCreativeItem(ItemIds::get(ItemIds::LEAVES, 3), self::CREATIVE_GROUP_LEAVES);
        self::addCreativeItem(ItemIds::get(ItemIds::LEAVES2, 0), self::CREATIVE_GROUP_LEAVES);
        self::addCreativeItem(ItemIds::get(ItemIds::LEAVES2, 1), self::CREATIVE_GROUP_LEAVES);

        self::addCreativeItem(ItemIds::get(ItemIds::SAPLING, 0), self::CREATIVE_GROUP_SAPLING);
        self::addCreativeItem(ItemIds::get(ItemIds::SAPLING, 1), self::CREATIVE_GROUP_SAPLING);
        self::addCreativeItem(ItemIds::get(ItemIds::SAPLING, 2), self::CREATIVE_GROUP_SAPLING);
        self::addCreativeItem(ItemIds::get(ItemIds::SAPLING, 3), self::CREATIVE_GROUP_SAPLING);
        self::addCreativeItem(ItemIds::get(ItemIds::SAPLING, 4), self::CREATIVE_GROUP_SAPLING);
        self::addCreativeItem(ItemIds::get(ItemIds::SAPLING, 5), self::CREATIVE_GROUP_SAPLING);

        self::addCreativeItem(ItemIds::get(ItemIds::SEEDS, 0), self::CREATIVE_GROUP_SEED);
        self::addCreativeItem(ItemIds::get(ItemIds::PUMPKIN_SEEDS, 0), self::CREATIVE_GROUP_SEED);
        self::addCreativeItem(ItemIds::get(ItemIds::MELON_SEEDS, 0), self::CREATIVE_GROUP_SEED);
        self::addCreativeItem(ItemIds::get(ItemIds::BEETROOT_SEEDS, 0), self::CREATIVE_GROUP_SEED);

        self::addCreativeItem(ItemIds::get(ItemIds::WHEAT, 0), self::CREATIVE_GROUP_CROP);
        self::addCreativeItem(ItemIds::get(ItemIds::APPLE, 0), self::CREATIVE_GROUP_CROP);
        self::addCreativeItem(ItemIds::get(ItemIds::GOLDEN_APPLE, 0), self::CREATIVE_GROUP_CROP);

        self::addCreativeItem(ItemIds::get(ItemIds::MELON_BLOCK, 0), self::CREATIVE_GROUP_CROP);
        self::addCreativeItem(ItemIds::get(ItemIds::MELON, 0), self::CREATIVE_GROUP_CROP);
        self::addCreativeItem(ItemIds::get(ItemIds::PUMPKIN, 0), self::CREATIVE_GROUP_CROP);
        self::addCreativeItem(ItemIds::get(ItemIds::LIT_PUMPKIN, 0), self::CREATIVE_GROUP_CROP);

        self::addCreativeItem(ItemIds::get(ItemIds::TALL_GRASS, 1), self::CREATIVE_GROUP_GRASS);
        self::addCreativeItem(ItemIds::get(ItemIds::TALL_GRASS, 2), self::CREATIVE_GROUP_GRASS);
        self::addCreativeItem(ItemIds::get(ItemIds::DANDELION, 0), self::CREATIVE_GROUP_FLOWER);
        self::addCreativeItem(ItemIds::get(ItemIds::RED_FLOWER, Flower::TYPE_POPPY), self::CREATIVE_GROUP_FLOWER);
        self::addCreativeItem(ItemIds::get(ItemIds::RED_FLOWER, Flower::TYPE_BLUE_ORCHID), self::CREATIVE_GROUP_FLOWER);
        self::addCreativeItem(ItemIds::get(ItemIds::RED_FLOWER, Flower::TYPE_ALLIUM), self::CREATIVE_GROUP_FLOWER);
        self::addCreativeItem(ItemIds::get(ItemIds::RED_FLOWER, Flower::TYPE_AZURE_BLUET), self::CREATIVE_GROUP_FLOWER);
        self::addCreativeItem(ItemIds::get(ItemIds::RED_FLOWER, Flower::TYPE_RED_TULIP), self::CREATIVE_GROUP_FLOWER);
        self::addCreativeItem(ItemIds::get(ItemIds::RED_FLOWER, Flower::TYPE_ORANGE_TULIP), self::CREATIVE_GROUP_FLOWER);
        self::addCreativeItem(ItemIds::get(ItemIds::RED_FLOWER, Flower::TYPE_WHITE_TULIP), self::CREATIVE_GROUP_FLOWER);
        self::addCreativeItem(ItemIds::get(ItemIds::RED_FLOWER, Flower::TYPE_PINK_TULIP), self::CREATIVE_GROUP_FLOWER);
        self::addCreativeItem(ItemIds::get(ItemIds::RED_FLOWER, Flower::TYPE_OXEYE_DAISY), self::CREATIVE_GROUP_FLOWER);

        self::addColoredCreativeItem(ItemIds::DYE, self::CREATIVE_GROUP_DYE);

        self::addCreativeItem(ItemIds::get(ItemIds::VINES, 0));
        self::addCreativeItem(ItemIds::get(ItemIds::WATER_LILY, 0));
        self::addCreativeItem(ItemIds::get(ItemIds::DEAD_BUSH, 0));
        self::addCreativeItem(ItemIds::get(ItemIds::SNOW_BLOCK, 0));
        self::addCreativeItem(ItemIds::get(ItemIds::ICE, 0));
        self::addCreativeItem(ItemIds::get(ItemIds::SNOW_LAYER, 0));

        self::addCreativeItem(ItemIds::get(ItemIds::BROWN_MUSHROOM, 0), self::CREATIVE_GROUP_MUSHROOM);
        self::addCreativeItem(ItemIds::get(ItemIds::RED_MUSHROOM, 0), self::CREATIVE_GROUP_MUSHROOM);
        self::addCreativeItem(ItemIds::get(ItemIds::SUGAR_CANES, 0));
        self::addCreativeItem(ItemIds::get(ItemIds::SUGAR, 0));
        self::addCreativeItem(ItemIds::get(ItemIds::BONE, 0));
        self::addCreativeItem(ItemIds::get(ItemIds::COBWEB, 0));
        self::addCreativeItem(ItemIds::get(ItemIds::MONSTER_SPAWNER, 0));

        self::addCreativeItem(ItemIds::get(ItemIds::SPAWN_EGG, 15), self::CREATIVE_GROUP_MOBEGG);
        self::addCreativeItem(ItemIds::get(ItemIds::SPAWN_EGG, 10), self::CREATIVE_GROUP_MOBEGG);
        self::addCreativeItem(ItemIds::get(ItemIds::SPAWN_EGG, 11), self::CREATIVE_GROUP_MOBEGG);
        self::addCreativeItem(ItemIds::get(ItemIds::SPAWN_EGG, 12), self::CREATIVE_GROUP_MOBEGG);
        self::addCreativeItem(ItemIds::get(ItemIds::SPAWN_EGG, 13), self::CREATIVE_GROUP_MOBEGG);
        self::addCreativeItem(ItemIds::get(ItemIds::SPAWN_EGG, 14), self::CREATIVE_GROUP_MOBEGG);
        self::addCreativeItem(ItemIds::get(ItemIds::SPAWN_EGG, 22), self::CREATIVE_GROUP_MOBEGG);
        self::addCreativeItem(ItemIds::get(ItemIds::SPAWN_EGG, 16), self::CREATIVE_GROUP_MOBEGG);
        self::addCreativeItem(ItemIds::get(ItemIds::SPAWN_EGG, 19), self::CREATIVE_GROUP_MOBEGG);
        self::addCreativeItem(ItemIds::get(ItemIds::SPAWN_EGG, 18), self::CREATIVE_GROUP_MOBEGG);
        self::addCreativeItem(ItemIds::get(ItemIds::SPAWN_EGG, 33), self::CREATIVE_GROUP_MOBEGG);
        self::addCreativeItem(ItemIds::get(ItemIds::SPAWN_EGG, 38), self::CREATIVE_GROUP_MOBEGG);
        self::addCreativeItem(ItemIds::get(ItemIds::SPAWN_EGG, 39), self::CREATIVE_GROUP_MOBEGG);
        self::addCreativeItem(ItemIds::get(ItemIds::SPAWN_EGG, 34), self::CREATIVE_GROUP_MOBEGG);
        self::addCreativeItem(ItemIds::get(ItemIds::SPAWN_EGG, 37), self::CREATIVE_GROUP_MOBEGG);
        self::addCreativeItem(ItemIds::get(ItemIds::SPAWN_EGG, 35), self::CREATIVE_GROUP_MOBEGG);
        self::addCreativeItem(ItemIds::get(ItemIds::SPAWN_EGG, 32), self::CREATIVE_GROUP_MOBEGG);
        self::addCreativeItem(ItemIds::get(ItemIds::SPAWN_EGG, 36), self::CREATIVE_GROUP_MOBEGG);
        self::addCreativeItem(ItemIds::get(ItemIds::SPAWN_EGG, 17), self::CREATIVE_GROUP_MOBEGG);
        self::addCreativeItem(ItemIds::get(ItemIds::SPAWN_EGG, 40), self::CREATIVE_GROUP_MOBEGG);
        self::addCreativeItem(ItemIds::get(ItemIds::SPAWN_EGG, 42), self::CREATIVE_GROUP_MOBEGG);
        self::addCreativeItem(ItemIds::get(ItemIds::SPAWN_EGG, 41), self::CREATIVE_GROUP_MOBEGG);
        self::addCreativeItem(ItemIds::get(ItemIds::SPAWN_EGG, 43), self::CREATIVE_GROUP_MOBEGG);

        self::addCreativeItem(ItemIds::get(ItemIds::OBSIDIAN, 0));
        self::addCreativeItem(ItemIds::get(ItemIds::BEDROCK, 0));
        self::addCreativeItem(ItemIds::get(ItemIds::NETHERRACK, 0));
        self::addCreativeItem(ItemIds::get(ItemIds::NETHER_WART_BLOCK_BLOCK, 0));
        self::addCreativeItem(ItemIds::get(ItemIds::MAGMA, 0));
        self::addCreativeItem(ItemIds::get(ItemIds::END_STONE, 0));

        self::addCreativeItem(ItemIds::get(ItemIds::CHORUS_FLOWER, 0));
        self::addCreativeItem(ItemIds::get(ItemIds::CHORUS_PLANT, 0));
        self::addCreativeItem(ItemIds::get(ItemIds::SPONGE, 0));

        self::addCreativeItem(ItemIds::get(ItemIds::LEATHER_CAP, 0), self::CREATIVE_GROUP_HELMET);
        self::addCreativeItem(ItemIds::get(ItemIds::CHAIN_HELMET, 0), self::CREATIVE_GROUP_HELMET);
        self::addCreativeItem(ItemIds::get(ItemIds::IRON_HELMET, 0), self::CREATIVE_GROUP_HELMET);
        self::addCreativeItem(ItemIds::get(ItemIds::DIAMOND_HELMET, 0), self::CREATIVE_GROUP_HELMET);
        self::addCreativeItem(ItemIds::get(ItemIds::GOLD_HELMET, 0), self::CREATIVE_GROUP_HELMET);

        self::addCreativeItem(ItemIds::get(ItemIds::LEATHER_TUNIC, 0), self::CREATIVE_GROUP_CHESTPLATE);
        self::addCreativeItem(ItemIds::get(ItemIds::CHAIN_CHESTPLATE, 0), self::CREATIVE_GROUP_CHESTPLATE);
        self::addCreativeItem(ItemIds::get(ItemIds::IRON_CHESTPLATE, 0), self::CREATIVE_GROUP_CHESTPLATE);
        self::addCreativeItem(ItemIds::get(ItemIds::DIAMOND_CHESTPLATE, 0), self::CREATIVE_GROUP_CHESTPLATE);
        self::addCreativeItem(ItemIds::get(ItemIds::GOLD_CHESTPLATE, 0), self::CREATIVE_GROUP_CHESTPLATE);

        self::addCreativeItem(ItemIds::get(ItemIds::LEATHER_PANTS, 0), self::CREATIVE_GROUP_LEGGINGS);
        self::addCreativeItem(ItemIds::get(ItemIds::CHAIN_LEGGINGS, 0), self::CREATIVE_GROUP_LEGGINGS);
        self::addCreativeItem(ItemIds::get(ItemIds::IRON_LEGGINGS, 0), self::CREATIVE_GROUP_LEGGINGS);
        self::addCreativeItem(ItemIds::get(ItemIds::DIAMOND_LEGGINGS, 0), self::CREATIVE_GROUP_LEGGINGS);
        self::addCreativeItem(ItemIds::get(ItemIds::GOLD_LEGGINGS, 0), self::CREATIVE_GROUP_LEGGINGS);

        self::addCreativeItem(ItemIds::get(ItemIds::LEATHER_BOOTS, 0), self::CREATIVE_GROUP_BOOTS);
        self::addCreativeItem(ItemIds::get(ItemIds::CHAIN_BOOTS, 0), self::CREATIVE_GROUP_BOOTS);
        self::addCreativeItem(ItemIds::get(ItemIds::IRON_BOOTS, 0), self::CREATIVE_GROUP_BOOTS);
        self::addCreativeItem(ItemIds::get(ItemIds::DIAMOND_BOOTS, 0), self::CREATIVE_GROUP_BOOTS);
        self::addCreativeItem(ItemIds::get(ItemIds::GOLD_BOOTS, 0), self::CREATIVE_GROUP_BOOTS);

        self::addCreativeItem(ItemIds::get(ItemIds::WOODEN_SWORD, 0), self::CREATIVE_GROUP_SWORD);
        self::addCreativeItem(ItemIds::get(ItemIds::STONE_SWORD, 0), self::CREATIVE_GROUP_SWORD);
        self::addCreativeItem(ItemIds::get(ItemIds::IRON_SWORD, 0), self::CREATIVE_GROUP_SWORD);
        self::addCreativeItem(ItemIds::get(ItemIds::DIAMOND_SWORD, 0), self::CREATIVE_GROUP_SWORD);
        self::addCreativeItem(ItemIds::get(ItemIds::GOLD_SWORD, 0), self::CREATIVE_GROUP_SWORD);

        self::addCreativeItem(ItemIds::get(ItemIds::WOODEN_AXE, 0), self::CREATIVE_GROUP_AXE);
        self::addCreativeItem(ItemIds::get(ItemIds::STONE_AXE, 0), self::CREATIVE_GROUP_AXE);
        self::addCreativeItem(ItemIds::get(ItemIds::IRON_AXE, 0), self::CREATIVE_GROUP_AXE);
        self::addCreativeItem(ItemIds::get(ItemIds::DIAMOND_AXE, 0), self::CREATIVE_GROUP_AXE);
        self::addCreativeItem(ItemIds::get(ItemIds::GOLD_AXE, 0), self::CREATIVE_GROUP_AXE);

        self::addCreativeItem(ItemIds::get(ItemIds::WOODEN_PICKAXE, 0), self::CREATIVE_GROUP_PICKAXE);
        self::addCreativeItem(ItemIds::get(ItemIds::STONE_PICKAXE, 0), self::CREATIVE_GROUP_PICKAXE);
        self::addCreativeItem(ItemIds::get(ItemIds::IRON_PICKAXE, 0), self::CREATIVE_GROUP_PICKAXE);
        self::addCreativeItem(ItemIds::get(ItemIds::DIAMOND_PICKAXE, 0), self::CREATIVE_GROUP_PICKAXE);
        self::addCreativeItem(ItemIds::get(ItemIds::GOLD_PICKAXE, 0), self::CREATIVE_GROUP_PICKAXE);

        self::addCreativeItem(ItemIds::get(ItemIds::WOODEN_SHOVEL, 0), self::CREATIVE_GROUP_SHOVEL);
        self::addCreativeItem(ItemIds::get(ItemIds::STONE_SHOVEL, 0), self::CREATIVE_GROUP_SHOVEL);
        self::addCreativeItem(ItemIds::get(ItemIds::IRON_SHOVEL, 0), self::CREATIVE_GROUP_SHOVEL);
        self::addCreativeItem(ItemIds::get(ItemIds::DIAMOND_SHOVEL, 0), self::CREATIVE_GROUP_SHOVEL);
        self::addCreativeItem(ItemIds::get(ItemIds::GOLD_SHOVEL, 0), self::CREATIVE_GROUP_SHOVEL);

        self::addCreativeItem(ItemIds::get(ItemIds::WOODEN_HOE, 0), self::CREATIVE_GROUP_HOE);
        self::addCreativeItem(ItemIds::get(ItemIds::STONE_HOE, 0), self::CREATIVE_GROUP_HOE);
        self::addCreativeItem(ItemIds::get(ItemIds::IRON_HOE, 0), self::CREATIVE_GROUP_HOE);
        self::addCreativeItem(ItemIds::get(ItemIds::DIAMOND_HOE, 0), self::CREATIVE_GROUP_HOE);
        self::addCreativeItem(ItemIds::get(ItemIds::GOLD_HOE, 0), self::CREATIVE_GROUP_HOE);

        self::addCreativeItem(ItemIds::get(ItemIds::BOW, 0));
        self::addCreativeItem(ItemIds::get(ItemIds::ARROW, 0), self::CREATIVE_GROUP_ARROW);

        self::addCreativeItem(ItemIds::get(ItemIds::COOKED_FISH, 0), self::CREATIVE_GROUP_COOKEDFOOD);
        self::addCreativeItem(ItemIds::get(ItemIds::COOKED_FISH, 1), self::CREATIVE_GROUP_COOKEDFOOD);
        self::addCreativeItem(ItemIds::get(ItemIds::CAKE, 0), self::CREATIVE_GROUP_MISCFOOD);
        self::addCreativeItem(ItemIds::get(ItemIds::BREAD, 0), self::CREATIVE_GROUP_MISCFOOD);

        self::addCreativeItem(ItemIds::get(ItemIds::FISHING_ROD, 0));
        self::addCreativeItem(ItemIds::get(ItemIds::SNOWBALL));
        self::addCreativeItem(ItemIds::get(ItemIds::SHEARS, 0));
        self::addCreativeItem(ItemIds::get(ItemIds::FLINT_AND_STEEL, 0));
        self::addCreativeItem(ItemIds::get(ItemIds::CLOCK, 0));
        self::addCreativeItem(ItemIds::get(ItemIds::COMPASS, 0));
        self::addCreativeItem(ItemIds::get(ItemIds::STICKS, 0));
        self::addCreativeItem(ItemIds::get(ItemIds::BED, 0), self::CREATIVE_GROUP_BED);
        self::addCreativeItem(ItemIds::get(ItemIds::TORCH, 0));

        self::addCreativeItem(ItemIds::get(ItemIds::WORKBENCH, 0));
        self::addCreativeItem(ItemIds::get(ItemIds::FURNACE, 0));
        self::addCreativeItem(ItemIds::get(ItemIds::ANVIL, 0), self::CREATIVE_GROUP_ANVIL);
        self::addCreativeItem(ItemIds::get(ItemIds::ANVIL, 4), self::CREATIVE_GROUP_ANVIL);
        self::addCreativeItem(ItemIds::get(ItemIds::ANVIL, 8), self::CREATIVE_GROUP_ANVIL);
        self::addCreativeItem(ItemIds::get(ItemIds::ENCHANT_TABLE, 0));
        self::addCreativeItem(ItemIds::get(ItemIds::BOOKSHELF, 0));
        self::addCreativeItem(ItemIds::get(ItemIds::CHEST, 0), self::CREATIVE_GROUP_CHEST);
        self::addCreativeItem(ItemIds::get(ItemIds::ENDER_CHEST, 0), self::CREATIVE_GROUP_CHEST);

        self::addCreativeItem(ItemIds::get(ItemIds::GLOWSTONE_BLOCK, 0));
        self::addCreativeItem(ItemIds::get(ItemIds::REDSTONE_LAMP, 0));
        self::addCreativeItem(ItemIds::get(ItemIds::SIGN, 0), self::CREATIVE_GROUP_SIGN);
        self::addCreativeItem(ItemIds::get(ItemIds::PAINTING, 0));

        self::addCreativeItem(ItemIds::get(ItemIds::BOWL, 0));
        self::addCreativeItem(ItemIds::get(ItemIds::BUCKET, 0));
        self::addCreativeItem(ItemIds::get(ItemIds::BUCKET, 1));
        self::addCreativeItem(ItemIds::get(ItemIds::BUCKET, 8));
        self::addCreativeItem(ItemIds::get(ItemIds::BUCKET, 10));
        // self::addCreativeItem(ItemIds::get(ItemIds::STONECUTTER, 0)); // crash 1.11.0.1
        self::addCreativeItem(ItemIds::get(ItemIds::END_PORTAL, 0));

        self::addCreativeItem(ItemIds::get(ItemIds::COAL, 0));
        self::addCreativeItem(ItemIds::get(ItemIds::COAL, 1));
        self::addCreativeItem(ItemIds::get(ItemIds::DIAMOND, 0));
        self::addCreativeItem(ItemIds::get(ItemIds::IRON_INGOT, 0));
        self::addCreativeItem(ItemIds::get(ItemIds::GOLD_INGOT, 0));
        self::addCreativeItem(ItemIds::get(ItemIds::EMERALD, 0));

        self::addCreativeItem(ItemIds::get(ItemIds::QUARTZ, 0));
        self::addCreativeItem(ItemIds::get(ItemIds::CLAY, 0));

        self::addCreativeItem(ItemIds::get(ItemIds::STRING, 0));
        self::addCreativeItem(ItemIds::get(ItemIds::FEATHER, 0));
        self::addCreativeItem(ItemIds::get(ItemIds::FLINT, 0));
        self::addCreativeItem(ItemIds::get(ItemIds::LEATHER, 0));
        self::addCreativeItem(ItemIds::get(ItemIds::END_ROD, 0));
        self::addCreativeItem(ItemIds::get(ItemIds::PAPER, 0));

        self::addCreativeItem(ItemIds::get(ItemIds::RAIL, 0), self::CREATIVE_GROUP_RAIL);
        self::addCreativeItem(ItemIds::get(ItemIds::MINECART, 0), self::CREATIVE_GROUP_MINECART);

        self::addCreativeItem(ItemIds::get(ItemIds::REDSTONE, 0));
        self::addCreativeItem(ItemIds::get(ItemIds::REDSTONE_BLOCK, 0));
        self::addCreativeItem(ItemIds::get(ItemIds::HOPPER, 0));
        self::addCreativeItem(ItemIds::get(ItemIds::TNT, 0));

    }

    public static function clearCreativeItems()
    {
        ItemIds::$creative = [];
    }

    public static function addCreativeItem(Item $item, $creativeGroup = self::CREATIVE_GROUP_NONE)
    {
        ItemIds::$creative[] = ['item' => ItemIds::get($item->getId(), $item->getDamage()), 'group' => $creativeGroup];
    }

    public static function get($id, $meta = 0, $count = 1, $tags = "")
    {
        try {
            if (!isset(self::$list[$id])) {
                if ($id < 256 && isset(Block::$list[$id]) && !is_null(Block::$list[$id])) {
                    $class = Block::$list[$id];
                    return (new self::$itemBlockClass(new $class($meta), $meta, $count))->setCompound($tags);
                }
                return (new Item($id, $meta, $count))->setCompound($tags);
            }
            /** @var Item $class */
            $class = self::$list[$id];
            return (new $class($meta, $count))->setCompound($tags);
        } catch (\RuntimeException $e) {
            return (new Item($id, $meta, $count))->setCompound($tags);
        }
    }

    private static function addColoredCreativeItem($itemId, $creativeGroup)
    {
        self::addCreativeItem(ItemIds::get($itemId, Block::COLOR_WHITE), $creativeGroup);
        self::addCreativeItem(ItemIds::get($itemId, Block::COLOR_ORANGE), $creativeGroup);
        self::addCreativeItem(ItemIds::get($itemId, Block::COLOR_MAGENTA), $creativeGroup);
        self::addCreativeItem(ItemIds::get($itemId, Block::COLOR_LIGHT_BLUE), $creativeGroup);
        self::addCreativeItem(ItemIds::get($itemId, Block::COLOR_YELLOW), $creativeGroup);
        self::addCreativeItem(ItemIds::get($itemId, Block::COLOR_LIME), $creativeGroup);
        self::addCreativeItem(ItemIds::get($itemId, Block::COLOR_PINK), $creativeGroup);
        self::addCreativeItem(ItemIds::get($itemId, Block::COLOR_GRAY), $creativeGroup);
        self::addCreativeItem(ItemIds::get($itemId, Block::COLOR_LIGHT_GRAY), $creativeGroup);
        self::addCreativeItem(ItemIds::get($itemId, Block::COLOR_CYAN), $creativeGroup);
        self::addCreativeItem(ItemIds::get($itemId, Block::COLOR_PURPLE), $creativeGroup);
        self::addCreativeItem(ItemIds::get($itemId, Block::COLOR_BLUE), $creativeGroup);
        self::addCreativeItem(ItemIds::get($itemId, Block::COLOR_BROWN), $creativeGroup);
        self::addCreativeItem(ItemIds::get($itemId, Block::COLOR_GREEN), $creativeGroup);
        self::addCreativeItem(ItemIds::get($itemId, Block::COLOR_RED), $creativeGroup);
        self::addCreativeItem(ItemIds::get($itemId, Block::COLOR_BLACK), $creativeGroup);
    }

    private static function initFood()
    {
        self::$food[] = ItemIds::COOKIE;
        self::$food[] = ItemIds::MELON;
        self::$food[] = ItemIds::RAW_BEEF;
        self::$food[] = ItemIds::COOKED_BEEF;
        self::$food[] = ItemIds::RAW_CHICKEN;
        self::$food[] = ItemIds::COOKED_CHICKEN;
        self::$food[] = ItemIds::CARROT;
        self::$food[] = ItemIds::POTATO;
        self::$food[] = ItemIds::BAKED_POTATO;
        self::$food[] = ItemIds::PUMPKIN_PIE;
        self::$food[] = ItemIds::BREAD;
        self::$food[] = ItemIds::APPLE;
        self::$food[] = ItemIds::GOLDEN_APPLE;
        self::$food[] = ItemIds::RAW_FISH;
        self::$food[] = ItemIds::COOKED_FISH;
        self::$food[] = ItemIds::RAW_PORKCHOP;
        self::$food[] = ItemIds::COOKED_PORKCHOP;
        self::$food[] = ItemIds::RAW_MUTTON;
        self::$food[] = ItemIds::COOKED_MUTTON;
        self::$food[] = ItemIds::RAW_RABBIT;
        self::$food[] = ItemIds::COOKED_RABBIT;
        self::$food[] = ItemIds::RAW_SALMON;
        self::$food[] = ItemIds::COOKED_SALMON;
        self::$food[] = ItemIds::RABBIT_STEW;
        self::$food[] = ItemIds::CHORUS_FRUIT;
    }

    public static function registerItem($id, $class)
    {
        if (isset(self::$list[$id]) && self::$list[$id] == $class) {
            return;
        }
        self::$list[$id] = $class;
        foreach (self::$creative as $index => $itemData) {
            $item = $itemData['item'];
            if ($item->getId() == $id) {
                self::$creative[$index] = ['item' => ItemIds::get($id, $item->getDamage()), 'group' => self::CREATIVE_GROUP_NONE];
            }
        }
    }

    public static function getCreativeItems()
    {
        return ItemIds::$creative;
    }

    public static function getCreativeGroups()
    {
        return ItemIds::$creativeGroupData;
    }

    public static function removeCreativeItem(Item $item)
    {
        $index = self::getCreativeItemIndex($item);
        if ($index !== -1) {
            unset(ItemIds::$creative[$index]);
        }
    }

    /**
     * @param Item $item
     * @return int
     */
    public static function getCreativeItemIndex(Item $item)
    {
        foreach (ItemIds::$creative as $i => $d) {
            if ($item->equals($d['item'], !$item->isTool())) {
                return $i;
            }
        }

        return -1;
    }

}