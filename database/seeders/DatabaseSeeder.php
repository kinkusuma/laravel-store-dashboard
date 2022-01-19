<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        DB::unprepared(file_get_contents('database/seeders/seed/sql/master.sql'));
        $this->command->info('table master seeded!');

        DB::unprepared(file_get_contents('database/seeders/seed/sql/sales.sql'));
        $this->command->info('table sales seeded!');

        DB::unprepared(file_get_contents('database/seeders/seed/sql/sales_detail.sql'));
        $this->command->info('table sales_detail seeded!');
    }
}
