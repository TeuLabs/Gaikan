<?php

namespace Gaikan;

class Component {

    public array $props = [];

    public function __construct(array $props)
    {
        $this->props = $props;
    }

    protected function has_prop($query): bool
    {
        if (!array_key_exists($query, $this->props)) {
            return false;
        }

        return true;
    }

}