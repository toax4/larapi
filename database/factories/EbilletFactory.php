<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class EbilletFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $companiesId = DB::table('companies')->pluck('id');

        return [
            'number' => str_replace(' ', '', $this->faker->sentence()),
            'company_id' => $this->faker->randomElement($companiesId),
        ];
    }
}
