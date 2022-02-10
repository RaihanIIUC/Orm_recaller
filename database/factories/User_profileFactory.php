<?php

namespace Database\Factories;

 use App\Models\User_profile;
use Illuminate\Database\Eloquent\Factories\Factory;

class User_profileFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User_profile::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'=> rand(1,10000)
        ];
    }
}
