<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::beginTransaction();

        Schema::disableForeignKeyConstraints();

        $this->call([
            BlackOpsSeeder::class,
            // BlackOps2Seeder::class,
            // BlackOps3Seeder::class,
            // BlackOps4Seeder::class,
            // BlackOpsColdWarSeeder::class,
        ]);

        Schema::enableForeignKeyConstraints();
        DB::commit();
    }
}
