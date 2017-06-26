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

        // Two users

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

        // Rest of users


        // Locations

        $locations = array(
            'Yverdon-les-Bains',
            'Yvonand',
            'Grandson',
            'Concise'
        );
        foreach ($locations as $l) {
            DB::table('locations')->insert([
                'name' => $l
            ]);
        }

        // Ressources

        $resourcesY = array(
            'Ydon 113',
            'Ydon 192',
            'Ydon 122'
        );
        $resourcesG = array(
            'Ydon 222'
        );
        $resourcesC = array(
            'Ydon 481'
        );
        $location = App\Location::where('name','Yverdon-les-Bains')->first();
        foreach ($resourcesY as $r) {
            DB::table('resources')->insert([
                'name' => $r,
                'location_id' => $location->id
            ]);
        }
        $location = App\Location::where('name','Grandson')->first();
        foreach ($resourcesG as $r) {
            DB::table('resources')->insert([
                'name' => $r,
                'location_id' => $location->id
            ]);
        }
        $location = App\Location::where('name','Concise')->first();
        foreach ($resourcesC as $r) {
            DB::table('resources')->insert([
                'name' => $r,
                'location_id' => $location->id
            ]);
        }

        factory(App\Reservation::class, 50)->make()->each(function ($r) {
            $resId = rand(1, App\Resource::All()->count());
            $r->resource()->associate(App\Resource::find($resId));
            $r->user()->associate(factory(App\User::class)->create());
            $r->save();
        });
    }
}
