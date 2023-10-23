<?php

namespace Database\Factories;

use App\Models\invoice;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class invoiceFactory extends Factory
{
    protected $model = invoice::class;

    public function definition()
    {
        return [
            'invoice_no' => $this->faker->word(),
            'matric' => $this->faker->word(),
            'charge' => $this->faker->randomFloat(),
            'payment' => $this->faker->randomFloat(),
            'paid' => $this->faker->boolean(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
