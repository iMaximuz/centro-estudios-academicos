<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 5)->create();
        $user = new App\User();
        $user->name = "Max";
        $user->email = "test@test.com";
        $user->password = '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm'; // secret
        $user->remember_token = str_random(10);
        $user->avatar_id = 1;
        $user->save();
    }
}
