<?php

use App\Models\Admin;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        Admin::create([
            'name'      =>  $faker->name,
            'surname'      =>  'Hello',
            'email'     =>  'admin@admin.com',
            'password'  =>  bcrypt('password'),
            'phone' => '28611131',
            'date' => '10/10/1992'
        ]);
    }
}