<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @var string
     */
    protected $model = Contact::class;
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'phone' => $this->faker->phoneNumber,
            'avatar' => 'https://i.pravatar.cc/150?img=1',
            'category' => $this->faker->randomElement(['family', 'friend', 'work']),
            'description' => $this->faker->text,
        ];
    }
}
