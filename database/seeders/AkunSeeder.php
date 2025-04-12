<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $user = [
            [
                'username'=>'admin1',
                'password'=>Hash::make('halouniverse1!')
            ],
            
            [
                'username'=>'dev1',
                'password'=>Hash::make('halobyte1!')
            ],
            [
                'username'=>'user2',
                'password'=>Hash::make('halodunia1!')
            ],

        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}