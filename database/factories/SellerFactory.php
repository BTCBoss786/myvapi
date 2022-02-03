<?php

namespace Database\Factories;

use App\Models\Segment;
use Illuminate\Database\Eloquent\Factories\Factory;

class SellerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $segmentIds = Segment::all()->pluck('id');
        return [
            'segment_id' => $segmentIds->random(),
            'name' => $this->faker->company(),
            'location' => $this->faker->city(),
            'validity' => $this->faker->date()
        ];
    }
}
