<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Group;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Message>
 */
class MessageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $sender_id = fake()->randomElement([0, 1]);
        if ($sender_id == 0) {
            $sender_id = fake()->randomElement(User::where('id', '!=', 1)->pluck('id')->toArray());
            $receiver_id = 1;
        } else {
            $receiver_id = fake()->randomElement(User::all()->pluck('id')->toArray());
        }
        $group_id = null;

        if(fake()->boolean(50)) {
            $group_id = fake()->randomElement(Group::all()->pluck('id')->toArray());

            // select group by group_id
            $group = Group::find($group_id);
            $sender_id = $group->users()->inRandomOrder()->first()->id;
            $receiver_id = null;
        }
        return [
            'sender_id' => $sender_id,
            'receiver_id' => $receiver_id,
            'group_id' => $group_id,
            'message' => fake()->realText(),
            'created_at' => fake()->dateTimeBetween('-1 year', 'now')
        ];
    }
}
