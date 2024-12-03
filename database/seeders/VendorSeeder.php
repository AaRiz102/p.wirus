<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VendorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    DB::table('vendors')->insert([
        [
            'store_name' => 'Afifah Backdrop',
            'store_description' => 'Toko ini',
            'address' => 'Jl. Bandung',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'store_name' => 'Afifah Backdrop',
            'store_description' => 'Toko ini',
            'address' => 'Jl. Bandung',
            'created_at' => now(),
            'updated_at' => now(),
        ],
    ]);
}

}
