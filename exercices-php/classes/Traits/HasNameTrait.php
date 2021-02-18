<?php

namespace Traits;

use Interfaces\HasNameInterface;

trait HasNameTrait
{
    /**
     * @var string
     */
    protected $name = '';

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     * return HasNameInterface
     */
    public function setName(?string $name): HasNameInterface
    {
        $this->name = $name;
        return $this;
    }
}
