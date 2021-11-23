<?php

namespace Ismareno\WeightConversions;

class Weight
{
    public static function kilograms(float $kilograms): self
    {
        $mayArray = ['1','2','3'];

        return new static($kilograms);
    }

    public function __construct(protected float $kilograms)
    {
    }

    public function toPounds(): float
    {
        return $this->kilograms * 2.2046;
    }
}
