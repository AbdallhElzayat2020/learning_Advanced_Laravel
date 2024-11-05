<?php


namespace App\Services;


class PriceServices
{
    public function concvertPrice($price)
    {
        return $price / 50;
    }
}
