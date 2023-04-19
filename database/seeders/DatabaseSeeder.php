<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        $this->call(binance::class);
        $this->call(bitcoin::class);
        $this->call(dogecoin::class);
        $this->call(etherium::class);
        $this->call(iota::class);
        $this->call(solana::class);
        $this->call(stellar::class);
        $this->call(tron::class);
    }
}
