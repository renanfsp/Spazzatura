<?php

namespace Database\Seeders;

// use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // DB::table("users")->insert([
        //     'name' => 'João Silva',
        //     'email' => 'joao.silva@example.com',
        //     'email_verified_at' => now(),
        //     'password' => bcrypt('123456789'),
        //     'remember_token' => Str::random(60),
        //     'document' => '12.345.678/0001-99',
        //     'role' => 'cooperativa',
        //     'created_at' => now(),
        //     'updated_at'=> now(),
        // ]);

        // DB::table("users")->insert([
        //     'name' => 'Carlos Souza',
        //     'email' => 'carlos.souza@example.com',
        //     'email_verified_at' => now(),
        //     'password' => bcrypt('123456789'),
        //     'remember_token' => Str::random(60),
        //     'document' => '321.654.987-00',
        //     'role' => 'coletor',
        //     'created_at' => now(),
        //     'updated_at'=> now(),
        // ]);

        // DB::table("users")->insert([
        //     'name' => 'Maria Oliveira',
        //     'email' => 'maria.oliveira@example.com',
        //     'email_verified_at' => now(),
        //     'password' => bcrypt('123456789'),
        //     'remember_token' => Str::random(60),
        //     'document' => '98.765.432/0001-00',
        //     'role' => 'comercio',
        //     'created_at' => now(),
        //     'updated_at'=> now(),
        // ]);
    }
}
