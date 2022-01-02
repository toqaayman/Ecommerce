<?php

namespace Database\Factories;

use App\Models\Image;
use Illuminate\Database\Eloquent\Factories\Factory;

class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model=Image::class;
    public function definition()
    {
        return [
            'path'=>$this->faker->imageUrl,
            'size'=>$this->faker->randomFloat(2,1,1000)
        ];
    }
}
