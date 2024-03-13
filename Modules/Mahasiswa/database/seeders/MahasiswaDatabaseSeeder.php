<?php

namespace Modules\Mahasiswa\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Tag\Models\Mahasiswa;

class MahasiswaDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Disable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        /*
         * Mahasiswas Seed
         * ------------------
         */

        // DB::table('mahasiswas')->truncate();
        // echo "Truncate: mahasiswas \n";

        Mahasiswa::factory()->count(20)->create();
        $rows = Mahasiswa::all();
        echo " Insert: mahasiswas \n\n";

        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
