<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            EstadoCivilSeeder::class,
            GradoAcademicoSeeder::class,
            RazaSeeder::class,
            ReligionSeeder::class,
            SexoSeeder::class,
            TipoDocumentoSeeder::class,
            UbigeoSeeder::class,
            UserSeeder::class,
            PersonaSeeder::class,
            // Agrega aquí otros seeders que tengas
        ]);
    }
}
