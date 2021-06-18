<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $r_image = rand(0, 9);

        $image = [
            '/images/products/image_1.jpg',
            '/images/products/image_2.jpg',
            '/images/products/image_3.jpg',
            '/images/products/image_4.jpg',
            '/images/products/image_5.jpg',
            '/images/products/image_6.jpg',
            '/images/products/image_7.jpg',
            '/images/products/image_8.jpg',
            '/images/products/image_9.jpg',
            '/images/products/image_10.jpg',
        ];

        return [
            'name' => $this->faker->words(3, true),
            'image'=> $image [$r_image],
            'price' => $this->faker->numberBetween(10000, 200000),
            'description' => $this->faker->paragraphs(5, true),
            'manufactor'=>$this-> faker-> company()
        ];
    }
}
