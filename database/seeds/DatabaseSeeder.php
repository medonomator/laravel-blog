<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ExampleSeeders::class);
        // factory(\App\Models\Example::class, 10)->create();
    }
}
