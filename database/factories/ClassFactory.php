<?php

namespace Database\Factories;

use App\Models\Model;
use App\Models\SchoolClass;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Model>
 */
class ClassFactory extends Factory
{
    protected $model = SchoolClass::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->unique()->randomElement([
                '10 AKL',
                '11 AKL',
                '12 AKL',
                '10 TKJ 1',
                '10 TKJ 2',
                '11 TKJ 1',
                '11 TKJ 2',
                '12 TKJ 1',
                '12 TKJ 2',
                '10 BiD',
                '11 BiD',
                '12 BiD',
            ]),
        ];
    }
}
