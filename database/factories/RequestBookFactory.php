<?php

namespace Database\Factories;

use App\Models\RequestBook;
use Illuminate\Database\Eloquent\Factories\Factory;

class RequestBookFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = RequestBook::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => rand(1, 10),
            'book_id' => rand(1, 20)
        ];
    }
}
