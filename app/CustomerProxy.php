<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;
use Konekt\Customer\Models\Customer;

class CustomerProxy extends Customer
{
    protected static function newFactory(): ?Factory
    {
        return null;
    }

    public static function factory($count = null, ?Model $parent = null)
    {
        $factory = \Database\Factories\CustomerFactory::new();
        
        if ($parent) {
            $factory->recycle($parent);
        }
        
        return $factory->count($count ?? 1);
    }
}
