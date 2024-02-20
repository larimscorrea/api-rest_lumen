<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
        ];
    }

}

class CourseFactory extends Factory 
{
    protected $model = Course::class;

    public function definition()
    {
        return [
            'name'=>$this->faker->name,
            'description'=>$this->faker->sentence,
            'body'=>$this->faker->paragraph,
            'price'=>$this->faker->randomFloat(2, 0, 10)
        ];
    }
}

// $factory->define(User::class, function (Faker $faker) {
//     return [
//         'name'=> $faker->name,
//         'email'=> $faker->email
//     ];

// })

// $factory->define(Course::class, function (Faker $faker) {
//     return [
//         'name'=>$faker->name,
//         'description'=> $faker->sentence,
//         'body'=>$faker->paragraph,
//         'price'=>$faker->randomFloat(2, 0, 10)
//     ];

// })