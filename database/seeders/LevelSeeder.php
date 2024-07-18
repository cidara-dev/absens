<?php

namespace Database\Seeders;

use App\Models\Level;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => '7.1',
                'teacher' => 'sumarjo',

            ],
            [
                'name' => '7.2',
                'teacher' => 'aan',

            ],
            [
                'name' => '7.3',
                'teacher' => 'sumarni',

            ],
            [
                'name' => '8.1',
                'teacher' => 'sukamso',

            ],
            [
                'name' => '8.2',
                'teacher' => 'sumardi',

            ],
            [
                'name' => '8.3',
                'teacher' => 'diah',

            ],
            [
                'name' => '9.1',
                'teacher' => 'Ahmad Subarjo',

            ],
            [
                'name' => '9.2',
                'teacher' => 'Yandi Kurnia',

            ],
        ];
        Level::insert($data);
    }
}
