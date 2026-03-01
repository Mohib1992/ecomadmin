<?php

namespace Database\Seeders;

use App\CustomerProxy;
use Database\Factories\CustomerFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Customer extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CustomerProxy::factory()->count(100)->create();
    }
}
