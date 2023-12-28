<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Collaborator;
use App\Models\EmployeePosition;
use App\Models\Position;
use App\Models\Unit;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Unit::factory()
            ->count(100)
            ->create();

        Collaborator::factory()
            ->count(100)
            ->create();

        Position::factory()
            ->count(10)
            ->sequence(
                ['position' => 'Product Owner'],
                ['position' => 'Scrum Master'],
                ['position' => 'TecLead'],
                ['position' => 'Dev FullStack'],
                ['position' => 'Dev Front-End'],
                ['position' => 'Dev Back-End'],
                ['position' => 'Devops Engineer'],
                ['position' => 'Analista Senior'],
                ['position' => 'Product Manager'],
                ['position' => 'Scrum Master Senior'],
            )
            ->create();

        EmployeePosition::factory()
            ->count(100)
            ->create();
    }
}
