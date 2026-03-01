<?php

namespace Database\Seeders;

use App\ProductProxy;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Product extends Seeder
{
    public function run(): void
    {
        ProductProxy::factory()->count(1000)->create();
    }
}
