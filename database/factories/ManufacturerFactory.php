<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;

class ManufacturerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
      public function definition()
      {
          $productIds=product::pluck('id')->toArray();
          $index=array_rand($productIds);
          return [
              'name'=>$this->faker->unique()->text(100),
              'description'=>$this->faker->sentence(25),
              'image_id'=>$productIds[$index],

          ];
      }
}
