<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Group;
use App\Models\Message;
use App\Models\Conversation;
use Carbon\Carbon;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
            'phone' => fake()->phoneNumber(),
            'is_admin' => true,
        ]);

        User::factory()->create([
            'name' => 'User',
            'email' => 'user@example.com',
            'password' => bcrypt('password'),
            'phone' => fake()->phoneNumber(),
            'is_admin' => false,
        ]);

        User::factory(10)->create();

        for ($i=0; $i < 5; $i++) { 
            $group = Group::factory()->create([
                'owner_id' => 1
            ]);
            $users = User::inRandomOrder()->limit(rand(2, 5))->pluck('id')->toArray();
            $group->users()->attach(array_unique([1, ...$users]));
        }

        Message::factory(100)->create();
        $messages = Message::whereNull('group_id')->orderBy('created_at')->get();
        $conversations = $messages->groupBy(function ($message) {
            return collect([$message->sender_id, $message->receiver_id])->sort()->implode('_');
        })->map(function ($group_messages) {
            return [
                'user_id1' => $group_messages->first()->sender_id,
                'user_id2' => $group_messages->first()->receiver_id,
                'last_message_id' => $group_messages->last()->id,
                'created_at' => new Carbon(),
                'updated_at' => new Carbon()
            ];
        })->values();

        Conversation::insertOrIgnore($conversations->toArray());
        
    }
}
