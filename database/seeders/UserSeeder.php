<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'superadmin',
                'email' => 'admin@indatechno.com',
                'password' => Hash::make('passwordasdf'),
                'role_id' => '1',
                'phone' => '089629143617',
                'image' => '',
            ],
            [
                'name' => 'Operator',
                'email' => 'operator@indatechno.com',
                'password' => Hash::make('passwordasdf'),
                'role' => '2',
                'phone' => '082186666158',
                'image' => '',
            ],
            [
                'name' => 'BK',
                'email' => 'bk@indatechno.com',
                'password' => Hash::make('passwordasdf'),
                'role' => '3',
                'phone' => '082186666158',
                'image' => '',
            ],
            [
                'name' => 'Parent1',
                'email' => 'parent1@indatechno.com',
                'password' => Hash::make('passwordasdf'),
                'role' => '4',
                'phone' => '0821866663123',
                'image' => '',
            ],
            [
                'name' => 'Parent2',
                'email' => 'parent2@indatechno.com',
                'password' => Hash::make('passwordasdf'),
                'role' => '4',
                'phone' => '082186666141',
                'image' => '',
            ],
        ];
        User::insert($data);
    }
}
