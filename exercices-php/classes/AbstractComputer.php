<?php

use Interfaces\HasNameInterface;
use Traits\HasNameTrait;

abstract class AbstractComputer implements HasNameInterface
{
    use HasNameTrait;
    /*
        propriétés
    */
    /**
     * @var array
     */
    protected $components = [];

    /**
     * @ var array
     */
    protected $devices = [];


    /*
        GETTER
    */

    /**
     * @return array
     */

    public function getComponents(): array
    {
        return $this->components;
    }

    /**
     * @return array
     */

    public function getDevices():array
    {
        return $this->devices;
    }


    /*
        SETTER
    */


    /**
     * @param array $components
     * @return array
     */

    public function setComponents(array $components): array
    {
        $this->components = $components;
        return $this->components;
    }

    /**
     * @param array $devices
     * @return array
     */

    public function setDevices(array $devices):array
    {
        $this->devices = $devices;
        return $this->devices;
    }
}
