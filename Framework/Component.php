<?php

namespace Gaikan;

class Component {

    public array $props = [];
    public array $states = [];

    public function __construct(array $props = [], array $states = [])
    {
        $this->props = $props;
        $this->states = $states;
    }

    protected function has_prop($query): bool
    {
        if (!array_key_exists($query, $this->props)) {
            return false;
        }

        return true;
    }

}