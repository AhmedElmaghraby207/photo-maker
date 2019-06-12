<?php

use Illuminate\Database\Seeder;

class InfoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Info::create([
            'email' => 'photo_maker@gmail.com',
            'phone' => '+02 01004545454'
        ]);
    }
}
