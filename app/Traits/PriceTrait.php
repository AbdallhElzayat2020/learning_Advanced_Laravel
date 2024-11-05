<?php


namespace App\Traits;


trait PriceTrait
{
    public function concvertPrice($price)
    {

        return $price / 50;
    }
}
