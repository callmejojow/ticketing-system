<?php

namespace Database\Factories;

use App\Models\Ticket;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class TicketFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Ticket::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'manager_id' => User::factory(),
            'location_id' => $this->faker->randomDigit(),
            'team_id' => $this->faker->randomDigit(),
            'status' => ['pending','in progress','solved'],
            'priority' => ['urgent','limited_days','nonurgent'],
            'description' => $this->$faker->paragraph()
        ];
    }
}
