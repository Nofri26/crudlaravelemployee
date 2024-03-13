<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Modules\Employee\Database\Seeders\EmployeeDatabaseSeeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();

        $this->call(AuthTableSeeder::class);

        Schema::enableForeignKeyConstraints();

        // if ($this->command->confirm('Do you want to refresh migration before seeding, it will clear all old data ?')) {
        //     $this->command->call('migrate:refresh');
        //     $this->command->info('Data cleared, starting from blank database');
        // }

        // User::factory()->create();
        // $this->command->info('sample user seeded');

        // if($this->command->confirm('Do you want to seed some sample Employee?')) {
        //     $this->call(EmployeeDatabaseSeeder::class);
        // }
        
    }
}
