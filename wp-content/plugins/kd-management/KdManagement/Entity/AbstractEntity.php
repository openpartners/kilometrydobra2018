<?php

namespace KdManagement\Entity;

abstract class AbstractEntity
{
    public function __construct($data = [])
    {
        $data = (array) $data;

        foreach ($data as $key => $value) {
            $this->{$key} = $value;
        }
    }

    public function __invoke()
    {
        return get_object_vars ($this);
    }
}
