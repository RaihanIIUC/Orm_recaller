<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Auth;
use Illuminate\Support\Facades\DB;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $data =
        DB::table('users')
        ->inRandomOrder()
            ->pluck('id')
            ->first();
        return [
            'user_id' => $data,
            'title' => $this->faker->text(50),
            'description' =>
            $this->faker->paragraph(2),
        ];
    }
}
