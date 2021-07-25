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
        {
            \DB::table('users')->delete();
            factory(App\Models\User::class, 3)->create();
        }
    }
}
