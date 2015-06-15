<?php

namespace Chadicus;

abstract class Math
{
    public static function multiply($a, $b)
    {
        if (!is_numeric($a) || !is_numeric($b)) {
            throw new \InvalidArgumentException('Both inputs must be numeric');
        }
        return ($a * $b);
    }
}
