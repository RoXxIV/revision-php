<?php

namespace Device;

use Interfaces\HasBrandInterface;
use Interfaces\HasNameInterface;
use JsonSerializable;
use Traits\HasBrandTrait;
use Traits\HasNameTrait;

abstract class AbstractDevice implements HasNameInterface, HasBrandInterface, JsonSerializable
{
    use HasNameTrait;
    use HasBrandTrait;

    /**
     * @return array
     */
    public function jsonSerialize(): array
    {
        return [
            'name'  => $this->getName(),
            'brand' => $this->getBrand(),
        ];
    }
}
