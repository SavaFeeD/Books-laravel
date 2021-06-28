<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Book::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'author' => $this->faker->name(),
            'name' => $this->faker->name(),
            'publishing' => $this->faker->text(10),
            'year' => rand(1900, 2020),
            'edition' => $this->faker->text(10),
            'price' => rand(10, 6000)
        ];
    }
}
