<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(1)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => 'tedfsdfd',
        ]);

        Listing::create([
            'title'=>'Laravel senior developer',
            'tags'=>'laravel, javascript',
            'company'=>'Acme Corp',
            'location'=>'Boston, MA',
            'email'=>'email1@email.com',
            'website'=>'https://www.acme.com',
            'description'=>'Lorem ipsum dolor sit amet, c' 

        ]);

        Listing::create([
            'title'=>'Fullstack- engineer',
            'tags'=>'laravel, backend, api',
            'company'=>'Stark Industries',
            'location'=>'New York, NY',
            'email'=>'email12@email.com',
            'website'=>'https://www.stark.com',
            'description'=>'Lorem ipsum dolor sit.'
        ]);
    }
}
