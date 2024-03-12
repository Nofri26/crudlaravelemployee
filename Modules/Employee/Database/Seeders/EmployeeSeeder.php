<?php

namespace Modules\Employee\Database\Seeders;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Modules\Employee\Entities\Employee;
use App\Models\User;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Model::unguard();

        $user = User::first();

        $data = [
            [
                'nama' => 'Riki Cahya S',
                'alamat' => 'Jl. Tirtasari II No.110, Rt.03, Rw.20, Margasari, Buah Batu, Kota Bandung',
                'email' => 'srikicahya@gmail.com',
                'no_telp' => '082118277500',
            ],
        ];

        Employee::insert($data);

        // Employee::factory()->count(5)->create();
        $this->command->info('Creating employee...');
    }
}
