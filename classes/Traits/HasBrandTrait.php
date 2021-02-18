<?php

namespace Traits;

use Interfaces\HasBrandInterface;

trait HasBrandTrait
{

    /**
     * @var string
     */
    public $brand = '';

    /**
     * @return string|null
     */

    public function getBrand(): ?string
    {
        return $this->brand;
    }

    public function setBrand(?string $brand): HasBrandInterface
    {
        $this->brand = $brand;

        return $this;
    }
}
