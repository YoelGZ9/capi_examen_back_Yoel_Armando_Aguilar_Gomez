<?php

namespace Database\Factories;

use App\Models\UserDomicilio;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

class UserDomicilioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UserDomicilio::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'domicilio' => $this->faker->randomElement(['reg 210', 'reg. 111', 'reg. 100', 'reg 101', 'reg 200']),
            'numero_exterior' => $this->faker->randomElement(['1', '2', '3', '4', '5']),
            'colonia' => 'Las lajas', // password
            'cp' => '77519',
            'ciudad' => $this->faker->state,
        ];
    }
}
