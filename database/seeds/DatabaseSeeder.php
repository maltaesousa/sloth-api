<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
          'login' => 'jdoe',
          'firstname' => 'Jane',
          'lastname' => 'Does',
          'role' => 'user',
          'email' => str_random(10).'@gmail.com',
          'password' => bcrypt('secret'),
      ]);

      DB::table('users')->insert([
          'login' => 'admin',
          'firstname' => 'John',
          'lastname' => 'Doe',
          'role' => 'admin',
          'email' => str_random(10).'@gmail.com',
          'password' => bcrypt('secret'),
      ]);

      factory(App\User::class, 50)->create()->each(function ($u) {
          $u->reservations()->save(factory(App\Reservation::class)->make());
      });

    }
}
