<?php

namespace Database\Factories;

use App\Models\Vot;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class VotFactory extends Factory
{
    protected $model = Vot::class;

    public function definition()
    {
        return [
            'category' => $this->faker->word(),
            'account_vot' => $this->faker->word(),
            'account_code' => $this->faker->word(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
