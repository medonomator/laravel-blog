<?php

use Illuminate\Database\Seeder;
// use Illuminate\Support\Facades\DB;

class ExampleSeeders extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $name = 'Имя';

        $names[] = [
            'name' => $name
        ];

        for ($i = 1; $i <= 10; $i++) {
            $name  = 'Имя' . $i;
            $parentId = ($i > 4) ? rand(1, 4) : 1;

            $names[] = [
                'name' => $name
            ];
        }

        DB::table('example')->insert($names);
    }
}
