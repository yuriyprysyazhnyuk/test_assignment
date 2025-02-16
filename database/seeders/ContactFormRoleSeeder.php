<?php

namespace Database\Seeders;

use App\Models\ContactFormRole;
use Illuminate\Database\Seeder;

/**
 * Class ContactFormRoleSeeder
 * @package Database\Seeders
 */
class ContactFormRoleSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $roles = [
            'Kermit the Frog',
            'Miss Piggy',
            'Fozzie Bear',
            'Gonzo the Great',
            'Rowlf the Dog',
            'Scooter',
            'Animal',
            'Pepe the King Prawn',
            'Rizzo the Rat',
            'Dr. Teeth and the Electric Mayhem',
            'Dr. Bunsen Honeydew',
            'Beaker',
            'The Swedish Chef',
            'Statler and Waldorf',
            'Sam Eagle',
            'Walter',
            'Camilla the Chicken',
            'Uncle Deadly',
            'Bobo the Bear',
            'Robin the Frog',
            'Sweetums',
            'Lew Zealand',
            'Crazy Harry',
            'Beauregard',
            'Link Hogthrob',
            'The Newsman',
            'Pops',
            'Marvin Suggs',
            'Clifford',
        ];

        array_map(fn($role) => ContactFormRole::factory()->create(['name' => $role]), $roles);
    }
}
