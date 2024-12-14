<?php

namespace Database\Factories;

use App\Models\Payment;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Payment>
 */
class PaymentFactory extends Factory
{
    /**
     * The name of the corresponding model.
     *
     * @var string
     */
    protected $model = Payment::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'payment_amount' => $this->faker->randomFloat(2, 1000, 100000), 
            'payment_date' => $this->faker->dateTimeThisYear(), 
            'payment_method' => $this->faker->randomElement(['Credit', 'Debit', 'Cash', 'E-Wallet']), 
            'image' => $this->faker->imageUrl(640, 480, 'transaction', true, 'Payment'), 
        ];
    }
}
