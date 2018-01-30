<?php

namespace KdManagement\Helper;

class ArrayHelper
{
    public function stripSlashes(array $array)
    {
        array_walk_recursive($array, function(&$value){
            $value = stripslashes($value);
        });

        return $array;
    }
}
