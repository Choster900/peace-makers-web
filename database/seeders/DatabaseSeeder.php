<?php

/*namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    /*public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}*/

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->createUser();
    }

    private function createUser(): void
    {
        $password = '123';

        $hashedPassword = Hash::make($password);

        $user = new User;

        $user->name = 'sa';
        $user->email = 'prueba@gmail.com';
        $user->password = $hashedPassword;
        
        $user->save();
    }
}