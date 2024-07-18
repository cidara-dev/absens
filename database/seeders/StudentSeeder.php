<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use File;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Student::truncate();

        $json = File::get("database/data/students.json");
        $locals = json_decode($json);

        foreach ($locals as $key => $value) {
            Student::create([
                "id" => $value->id,
                "image" => $value->image,
                "grade_id" => $value->grade_id,
                "level_id" => $value->level_id,
                "nisn" => $value->nisn,
                "code" => $value->code,
                "name" => $value->name,
                "nik" => $value->nik,
                "gender" => $value->gender,
                "born" => $value->born,
                "borndate" => $value->borndate,
                "address" => $value->address,
                "phone" => $value->phone,
                "kip" => $value->kip,
                "parent" => $value->parent,
                "status" => $value->status,
                "note" => $value->note,
            ]);
        }
    }
}
