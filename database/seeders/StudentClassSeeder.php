<?php

namespace Database\Seeders;

use App\Models\StudentClass;
use Carbon\Carbon;
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
        $counter = 1;
        $index = 0;
        do {
            $classes[] = [
                'name' => 'XII RPL ' . $counter,
                'slug' => 'xii-rpl-' . $counter,
            ];
            StudentClass::create($classes[$index]);
            $counter++;
            $index++;
        } while ($counter <= 3);
        $classes_count = count($classes);
        $this->command->info('Berhasil menambahkan ' . $classes_count . ' kelas');
    }
}
