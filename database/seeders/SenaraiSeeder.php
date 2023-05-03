<?php

namespace Database\Seeders;

use App\Models\Senarai;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SenaraiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Senarai::factory(10)
            ->for(User::factory()->state([
                'email' => 'rasyidialwee@gmail.com'
            ]))->create();
    }
}
