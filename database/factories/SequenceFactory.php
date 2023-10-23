<?php

namespace Database\Factories;

use App\Models\Sequence;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class SequenceFactory extends Factory
{
    protected $model = Sequence::class;

    public function definition()
    {
        return [
            'sequence' => $this->faker->randomNumber(),
            'category' => $this->faker->word(),
            'account_vot' => $this->faker->word(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
