<?php

namespace Database\Seeders;

use App\Models\Grade;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => '7',
            ],
            [
                'name' => '8',
            ],
            [
                'name' => '9',
            ],
        ];
        Grade::insert($data);
    }
}
