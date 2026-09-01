<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Kurse;
use App\Models\Anmeldung;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

     $kurse = [ 
        ['bezeichnung' => 'PHP 101', 'beschreibung' => 'Php Grundlagenkurs'],
        ['bezeichnung' => 'SQL 101', 'beschreibung' => 'SQL Grundlagenkurs'],
        ['bezeichnung' => 'HTML 101', 'beschreibung' => 'HTML Grundlagenkurs'],
        ['bezeichnung' => 'CSS 101', 'beschreibung' => 'CSS Grundlagenkurs'],
        ['bezeichnung' => 'Laravel für Anfänger', 'beschreibung' => 'Laravel Grundlagenkurs']
    ];

    foreach ($kurse as $kurs) 
        {
            
                Kurse::create($kurs);
        }
        

    }

}
