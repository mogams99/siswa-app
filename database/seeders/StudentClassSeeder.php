<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $classes = [
            [
                'name' => 'XII RPL 1',
                'slug' => 'xii-rpl-1',
            ],
        ];
    }
}
