<?php
namespace Component;

use Interfaces\HasBrandInterface;
use Interfaces\HasNameInterface;
use Traits\HasBrandTrait;
use Traits\HasNameTrait;

abstract class AbstractComponent implements HasNameInterface, HasBrandInterface
{
    use HasBrandTrait;
    use HasNameTrait;
}
