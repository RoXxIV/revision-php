<?php
namespace Component;

use Interfaces\HasBrandInterface;
use Interfaces\HasNameInterface;
use JsonSerializable;
use Traits\HasBrandTrait;
use Traits\HasNameTrait;

abstract class AbstractComponent implements HasNameInterface, HasBrandInterface, JsonSerializable
{
    use HasBrandTrait;
    use HasNameTrait;

    /**
     * @return array
     */

     public function jsonSerialize(): array
     {
         return [
             'name' => $this->getName(),
             'brand' => $this->getBrand()
         ];
     }
}
