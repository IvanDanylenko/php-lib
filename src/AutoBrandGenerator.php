<?php

namespace PhpLib;

class AutoBrandGenerator
{
    protected static $brands = ['Aston Martin', 'Audi', 'BMW', 'Cadillac', 'Chevrolet', 'Datsun', 'Ferrari', 'Ford', 'Honda', 'Mercedes', 'Nissan', 'Porsche', 'Rolls-Royce', 'Toyota', 'Volkswagen', 'Fiat', 'Mitsubishi', 'Mazda', 'Tesla'];

    public static function generate()
    {
        $arrKey = mt_rand(0, count(static::$brands) - 1);
        return static::$brands[$arrKey];
    }
}

echo mt_rand(2, 3);
