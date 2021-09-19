<?php

namespace Gaikan;

class ElementAttribute
{
    /**
     * Element attributes array
     * @var array
     */
    protected array $attributes = [];

    /**
     * Store attributes to $attributes
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        $this->attributes = $attributes;
    }
}