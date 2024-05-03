<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Setting;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

         $admin = User::create([
             'name' => 'kirin kraft',
             'email' => 'admin@kirinkraft.com',
             'password' => bcrypt('#Inc(luD7=[9k$3k'),
         ]);

        $setting = Setting::create([
            'username' => 'kirin kraft',
            'phone_number' => '+90 505 471 31 61',
            'email' => 'kirinkraft@gmail.com',
            'location' => 'Istanbul, turkey',
            'logo' => 'images/logo.png',
            'cover' => 'images/cover.png',
            'bio' => 'this is bio ',
            'title_background' => ' title in background',
            'your_name' => 'somia eldib',
            'title_card' => 'title card',
            'bio_card' => 'bio in the card',
            'signature' => 'images/signature.png',
            'followers' => '+100K',
            'facebook' => ' url facebook',
            'instagram' => 'https://www.instagram.com/kirin_kraft',
            'website' => 'url website',

        ]);
    }
}
