<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Manufacturer;
use Illuminate\Support\Facades\DB;



class ManufacturerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Manufacturer')->delete();
        Manufacturer::factory()->count(25)->create();
    }
}
