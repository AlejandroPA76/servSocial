<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class TodosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userJefe=User::create([
            'name' => 'jefe alejandro',
            'email' => 'alejandrojefe@gmail.com',
            'password' => Hash::make('admin'),
            'tipo' => '1',

        ]);

         $userAdmin=User::create([
            'name' => 'admin alejandro',
            'email' => 'alejandroadmin@gmail.com',
            'password' => Hash::make('admin'),
            'tipo' => '2',

        ]);

          $userUsuario=User::create([
            'name' => 'usuario alejandro',
            'email' => 'alejandrok@gmail.com',
            'password' => Hash::make('admin'),
            'tipo' => '3',

        ]);
    }
}
