<?php

namespace Database\Seeders;

use App\Models\Ebillet;
use Illuminate\Database\Seeder;

class EbilletSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Ebillet::factory(5000)->create();
    }
}
