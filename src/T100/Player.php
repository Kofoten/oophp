<?php

namespace Rasb14\T100;

/**
 * Player, a class containing player data.
 */
class Player
{
    /**
     * @var string $name The name of the player.
     * @var int $unsavedPoints The amount of unsaved points for a player.
     * @var int $savedPoints The amount of saved points for a player.
     */
    private $name;
    private $unsavedPoints;
    private $savedPoints;

    /**
     * Constructor to create a Player
     *
     * @param string $name The name of the player.
     * @param int $savedPoints The starting amount of points for a player.
     */
    public function __construct(string $name, int $savedPoints = null)
    {
        $this->name = $name;
        $this->unsavedPoints = 0;
        if ($savedPoints == null) {
            $this->savedPoints = 0;
        } else {
            $this->savedPoints = $savedPoints;
        }
    }

    /**
     * Saves the unsaved points.
     *
     * @return void.
     */
    public function save()
    {
        $this->savedPoints += $this->unsavedPoints;
        $this->unsavedPoints = 0;
    }

    /**
     * Removes the unsaved points.
     *
     * @return void.
     */
    public function removeUnsaved()
    {
        $this->unsavedPoints = 0;
    }

    /**
     * Adds to the unsaved points.
     *
     * @param int $value The value to add.
     *
     * @return void.
     */
    public function addUnsaved($value)
    {
        $this->unsavedPoints += $value;
    }

    /**
     * Gets the saved points.
     *
     * @return int as saved points.
     */
    public function savedPoints()
    {
        return $this->savedPoints;
    }

    /**
     * Gets the unsaved points.
     *
     * @return int as unsaved points.
     */
    public function unsavedPoints()
    {
        return $this->unsavedPoints;
    }

    /**
     * Gets the players name.
     *
     * @return string as player name.
     */
    public function name()
    {
        return $this->name;
    }
}
