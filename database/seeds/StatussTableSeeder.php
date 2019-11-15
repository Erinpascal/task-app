<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class StatussTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('statuses')->insert([
            'name' => 'pending',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()

        ]);

         DB::table('statuses')->insert([
            'name' => 'overdue',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()

        ]);

          DB::table('statuses')->insert([
            'name' => 'completed',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()

        ]);

           DB::table('statuses')->insert([
            'name' => 'uncompleted',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()

        ]);
    }
}
