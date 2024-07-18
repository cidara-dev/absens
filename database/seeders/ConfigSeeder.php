<?php

namespace Database\Seeders;

use App\Models\Config;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'image' => '',
                'name' => 'MTSN1 KALIANDA',
                'address' => 'Jl. Klaianda km1',
                'npsn' => '32543634',
                'phone' => '089629143617',
                'version' => '1.0.0',
                'licency' => 'Pro',
                'status' => 'Paid',

                ]
        ];
        Config::insert($data);
    }
}
