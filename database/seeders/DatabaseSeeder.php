<?php

namespace Database\Seeders;

use App\Models\Paciente;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
    /*     // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]); */
        User::create([
            'name'=>'Administrador',
            'email'=>'admin@admin.com',
            'password'=>Hash::make('12345678')
        ]);

        User::create([
            'name'=>'secretaria',
            'email'=>'secretaria@admin.com',
            'password'=>Hash::make('12345678')
        ]);

        User::create([
            'name'=>'doctor1',
            'email'=>'doctor@admin.com',
            'password'=>Hash::make('12345678')
        ]);
        User::create([
            'name'=>'paciente1',
            'email'=>'paciente@admin.com',
            'password'=>Hash::make('12345678')
        ]);

        $this->call([PacienteSeeder::class,]);
    }
}
