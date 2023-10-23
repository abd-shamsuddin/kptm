<?php

namespace Database\Factories;

use App\Models\InvoiceLine;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class InvoiceLineFactory extends Factory
{
    protected $model = InvoiceLine::class;

    public function definition()
    {
        return [
            'invoice_no' => $this->faker->word(),
            'account_code' => $this->faker->word(),
            'charge' => $this->faker->randomFloat(),
            'credit' => $this->faker->randomFloat(),
            'paid' => $this->faker->boolean(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
