<?php

namespace Traits;

trait HasCompatibilityTrait
{
    /**
     * @var array
     */
     public $compatibility = [];

     /**
     * @return array
     */
    public function getCompatibility()
    {
        return $this->compatibility;
    }

    /**
     * @param array
     * @return $this
     */

    public function setCompatibility(array $compatibility)
    {
        $this->compatibility = $compatibility;
        return $this;
    }

    public function isCompatibleWith($className)
    {
        return in_array($className, $this->compatibility);
    }
}