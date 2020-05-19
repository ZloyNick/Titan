<?php


namespace pocketmine\item;


use pocketmine\Player;

interface Food
{

    /**
     * Returns amount of food value to addition
     *
     * @return float
     */
    public function getFoodAddition() : float;

    /**
     * Returns amount of saturation value to addition
     *
     * @return float
     */
    public function getSaturationAddition() : float;

    /**
     * Needs for food, that
     * adds effects
     *
     * @param Player $player
     */
    public function onConsume(Player $player) : void;

}