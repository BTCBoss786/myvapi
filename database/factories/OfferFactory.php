<?php

namespace Database\Factories;

use App\Models\Seller;
use Illuminate\Database\Eloquent\Factories\Factory;

class OfferFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $sellerIds = Seller::all()->pluck('id');
        return [
            'seller_id' => $sellerIds->random(),
            'name' => $this->faker->name(),
            'image' => $this->faker->url(),
            'type' => $this->faker->word(),
            'detail' => $this->faker->sentence(),
            'start_date' => $this->faker->date(),
            'end_date' => $this->faker->date()
        ];
    }
}
