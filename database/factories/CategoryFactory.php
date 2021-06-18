<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $r_image = rand(0, 5);

        $image = [
            '/images/categories/image_1.jpg',
            '/images/categories/image_2.jpg',
            '/images/categories/image_3.jpg',
            '/images/categories/image_4.jpg',
            '/images/categories/image_5.jpg',
            '/images/categories/image_6.jpg',

        ];

        return [
            'category' => $this->faker->word(),
            'image'=> $image [$r_image],
            'slug'=>$this-> faker-> slug(1),
            'infos' => $this->faker->paragraphs(3, true),
        ];
    }
}
