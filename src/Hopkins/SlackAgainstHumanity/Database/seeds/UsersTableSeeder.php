<?php

use Hopkins\SlackAgainstHumanity\Models\Player;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        Player::create(['user_name' => 'slack_user_name']);
    }
}
