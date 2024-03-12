<?php

namespace Modules\Employee\Database\Seeders;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Modules\Employee\Entities\Employee;

class EmployeeDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Model::unguard();

        $this->call(EmployeeSeeder::class);
    }
}
