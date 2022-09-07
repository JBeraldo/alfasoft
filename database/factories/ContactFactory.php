<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    public function withFaker()
    {
        return \Faker\Factory::create('pt_PT');
    }
        /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Contact::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'contact' => $this->faker->numerify('#########'),
            'email' => $this->faker->safeEmail()
        ];
    }
}
