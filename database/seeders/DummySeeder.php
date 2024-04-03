<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name' => 'tal',
                'email' => 'tal@gmail.com',
                'role' => 'guru',
                'password' => bcrypt ('12345')
            ],
            [
                'name' => 'tal guru',
                'email' => 'tal1@gmail.com',
                'role' => 'siswa',
                'password' => bcrypt ('12345')
            ], 

        ];

        foreach ($userData as $key => $val){
            User::create($val);

        }
    }
}
