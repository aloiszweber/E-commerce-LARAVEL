<?php

namespace Database\Factories;

use App\Models\Eshop;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class EshopFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Eshop::class;

    public function definition()
    {
        return [
            'path' => $this->faker->words
            'name' => $this->faker->words
            
        ];
    }
}
