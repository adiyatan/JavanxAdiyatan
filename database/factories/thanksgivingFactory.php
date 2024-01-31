<?php

namespace Database\Factories;

use App\Models\thanksgiving;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\thanksgiving>
 */
class thanksgivingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = thanksgiving::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
        ];
    }
}
