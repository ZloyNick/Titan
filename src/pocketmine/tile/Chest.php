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

namespace pocketmine\tile;

use pocketmine\inventory\ChestInventory;
use pocketmine\inventory\DoubleChestInventory;
use pocketmine\inventory\InventoryHolder;
use pocketmine\item\Item;
use pocketmine\level\format\FullChunk;
use pocketmine\math\Vector3;
use pocketmine\nbt\NBT;
use pocketmine\nbt\tag\Compound;
use pocketmine\nbt\tag\Enum;
use pocketmine\nbt\tag\IntTag;
use pocketmine\nbt\tag\StringTag;

class Chest extends Spawnable implements InventoryHolder, Container, Nameable
{

    /** @var ChestInventory */
    protected $inventory;
    /** @var DoubleChestInventory */
    protected $doubleInventory = null;

    public function __construct(FullChunk $chunk, Compound $nbt)
    {
        parent::__construct($chunk, $nbt);
        $this->inventory = new ChestInventory($this);

        if (!isset($this->namedtag->Items) or !($this->namedtag->Items instanceof Enum)) {
            $this->namedtag->Items = new Enum("Items", []);
            $this->namedtag->Items->setTagType(NBT::TAG_Compound);
        }

        for ($i = 0; $i < $this->getSize(); ++$i) {
            $this->inventory->setItem($i, $this->getItem($i));
        }
    }

    /**
     * @return int
     */
    public function getSize()
    {
        return 27;
    }

    /**
     * This method should not be used by plugins, use the Inventory
     *
     * @param int $index
     *
     * @return Item
     */
    public function getItem($index)
    {
        $i = $this->getSlotIndex($index);
        if ($i < 0) {
            return ItemIds::get(ItemIds::AIR, 0, 0);
        } else {
            return NBT::getItemHelper($this->namedtag->Items[$i]);
        }
    }

    /**
     * @param $index
     *
     * @return int
     */
    protected function getSlotIndex($index)
    {
        foreach ($this->namedtag->Items as $i => $slot) {
            if ((int)$slot["Slot"] === (int)$index) {
                return (int)$i;
            }
        }

        return -1;
    }

    public function close()
    {
        if ($this->closed === false) {
            if ($this->doubleInventory instanceof DoubleChestInventory) {
                foreach ($this->doubleInventory->getViewers() as $player) {
                    $player->removeWindow($this->doubleInventory);
                }
            } else {
                foreach ($this->inventory->getViewers() as $player) {
                    $player->removeWindow($this->inventory);
                }
            }
            parent::close();
        }
    }

    public function saveNBT()
    {
        parent::saveNBT();
        $this->namedtag->Items = new Enum("Items", []);
        $this->namedtag->Items->setTagType(NBT::TAG_Compound);
        for ($index = 0; $index < $this->getSize(); ++$index) {
            $this->setItem($index, $this->inventory->getItem($index));
        }
    }

    /**
     * This method should not be used by plugins, use the Inventory
     *
     * @param int $index
     * @param Item $item
     *
     * @return bool
     */
    public function setItem($index, Item $item)
    {
        $i = $this->getSlotIndex($index);

        $d = NBT::putItemHelper($item, $index);

        if ($item->getId() === ItemIds::AIR or $item->getCount() <= 0) {
            if ($i >= 0) {
                unset($this->namedtag->Items[$i]);
            }
        } elseif ($i < 0) {
            for ($i = 0; $i <= $this->getSize(); ++$i) {
                if (!isset($this->namedtag->Items[$i])) {
                    break;
                }
            }
            $this->namedtag->Items[$i] = $d;
        } else {
            $this->namedtag->Items[$i] = $d;
        }

        return true;
    }

    /**
     * @return ChestInventory|DoubleChestInventory
     */
    public function getInventory()
    {
        if ($this->isPaired() and $this->doubleInventory === null) {
            $this->checkPairing();
        }
        return $this->doubleInventory instanceof DoubleChestInventory ? $this->doubleInventory : $this->inventory;
    }

    public function isPaired()
    {
        if (!isset($this->namedtag->pairx) or !isset($this->namedtag->pairz)) {
            return false;
        }

        return true;
    }

    protected function checkPairing()
    {
        if (($pair = $this->getPair()) instanceof Chest) {
            if (!$pair->isPaired()) {
                $pair->createPair($this);
                $pair->checkPairing();
            }
            if ($this->doubleInventory === null) {
                if ($pair->doubleInventory !== null) {
                    $this->doubleInventory = $pair->doubleInventory;
                } elseif (($pair->x + ($pair->z << 15)) > ($this->x + ($this->z << 15))) { //Order them correctly
                    $this->doubleInventory = new DoubleChestInventory($pair, $this);
                    $pair->doubleInventory = $this->doubleInventory;
                } else {
                    $this->doubleInventory = new DoubleChestInventory($this, $pair);
                    $pair->doubleInventory = $this->doubleInventory;
                }
            }
        } else {
            $this->doubleInventory = null;
            unset($this->namedtag->pairx, $this->namedtag->pairz);
        }
    }

    /**
     * @return Chest
     */
    public function getPair()
    {
        if ($this->isPaired()) {
            $tile = $this->getLevel()->getTile(new Vector3((int)$this->namedtag["pairx"], $this->y, (int)$this->namedtag["pairz"]));
            if ($tile instanceof Chest) {
                return $tile;
            }
        }

        return null;
    }

    private function createPair(Chest $tile)
    {
        $this->namedtag->pairx = new IntTag("pairx", $tile->x);
        $this->namedtag->pairz = new IntTag("pairz", $tile->z);

        $tile->namedtag->pairx = new IntTag("pairx", $this->x);
        $tile->namedtag->pairz = new IntTag("pairz", $this->z);
    }

    /**
     * @return ChestInventory
     */
    public function getRealInventory()
    {
        return $this->inventory;
    }

    public function getName()
    {
        return isset($this->namedtag->CustomName) ? $this->namedtag->CustomName->getValue() : "Chest";
    }

    public function setName($str)
    {
        if ($str === "") {
            unset($this->namedtag->CustomName);
            return;
        }

        $this->namedtag->CustomName = new StringTag("CustomName", $str);
    }

    public function pairWith(Chest $tile)
    {
        if ($this->isPaired() or $tile->isPaired()) {
            return false;
        }

        $this->createPair($tile);

        $this->spawnToAll();
        $tile->spawnToAll();
        $this->checkPairing();

        return true;
    }

    public function unpair()
    {
        if (!$this->isPaired()) {
            return false;
        }

        $tile = $this->getPair();
        unset($this->namedtag->pairx, $this->namedtag->pairz);

        $this->spawnToAll();

        if ($tile instanceof Chest) {
            unset($tile->namedtag->pairx, $tile->namedtag->pairz);
            $tile->checkPairing();
            $tile->spawnToAll();
        }
        $this->checkPairing();

        return true;
    }

    public function getSpawnCompound()
    {
        if ($this->isPaired()) {
            $c = new Compound("", [
                new StringTag("id", Tile::CHEST),
                new IntTag("x", (int)$this->x),
                new IntTag("y", (int)$this->y),
                new IntTag("z", (int)$this->z),
                new IntTag("pairx", (int)$this->namedtag["pairx"]),
                new IntTag("pairz", (int)$this->namedtag["pairz"])
            ]);
        } else {
            $c = new Compound("", [
                new StringTag("id", Tile::CHEST),
                new IntTag("x", (int)$this->x),
                new IntTag("y", (int)$this->y),
                new IntTag("z", (int)$this->z)
            ]);
        }

        if ($this->hasName()) {
            $c->CustomName = $this->namedtag->CustomName;
        }

        return $c;
    }

    public function hasName()
    {
        return isset($this->namedtag->CustomName);
    }
}
