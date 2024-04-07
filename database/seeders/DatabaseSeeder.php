<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         \App\Models\User::factory(10)->create();

         \App\Models\User::factory()->create([
             'username' => 'arty',
             'password' => '123qwe',
             'firstname' => 'Arty',
             'lastname' => 'The Party',
             'email' => 'giorgiomazzei1@gmail.com',
         ]);

         /* CATEGORY */

        \App\Models\Category::factory()->create([
            'name' => 'Business',
            'slug' => 'business',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
        ]);

        \App\Models\Category::factory()->create([
            'name' => 'Marketing',
            'slug' => 'marketing',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
        ]);

        \App\Models\Category::factory()->create([
            'name' => 'Personal finance',
            'slug' => 'personal-finance',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
        ]);

        \App\Models\Category::factory()->create([
            'name' => 'Time management',
            'slug' => 'time-management',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
        ]);

        \App\Models\Category::factory()->create([
            'name' => 'Business opportunities',
            'slug' => 'business-opportunities',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
        ]);

        \App\Models\Category::factory()->create([
            'name' => 'Personal development',
            'slug' => 'personal-development',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
        ]);

        /* AUTHOR */

        \App\Models\Author::factory()->create([
            'name' => 'Dan S. Kennedy',
            'slug' => 'dan-s-kennedy',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
        ]);

        \App\Models\Author::factory()->create([
            'name' => 'Bob Proctor',
            'slug' => 'bob-proctor',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
        ]);

        \App\Models\Author::factory()->create([
            'name' => 'Big Luca',
            'slug' => 'big-luca',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
        ]);

        /* COURSESS */

        \App\Models\Course::factory()->create([
            'category_id' => 2,
            'author_id' => 1,
            'slug' => 'consulting-and-coaching-bootcamp',
            'title' => 'Consulting & Coaching Bootcamp',
            'excerpt' => 'Boost your consulting career with the Consulting And Coaching Bootcamp. Learn to enhance your business, secure higher pay, and gain clients fast. Avoid common mistakes. A comprehensive blueprint for success. Invest now for substantial income growth.',
            'url' => 'consulting-and-coaching-bootcamp',
            'thumbnail' => '/images/default-1280x720.jpg'
        ]);

        \App\Models\Course::factory()->create([
            'category_id' => 2,
            'author_id' => 1,
            'slug' => 'magnetic-marketing-2014',
            'title' => 'Magnetic Marketing 2014',
            'excerpt' => 'Unlock success with Dan Kennedy`s Magnetic Marketing course. Transform your business, attract clients effortlessly, and dominate your market. A strategic blueprint for maximum impact.',
            'url' => '/media/artymoo/TOSHIBA EXT/Business, Marketing & Personal Development/Dan Kennedy/Dan Kennedy - Magnetic Marketing 2014 + Make Them Buy Now/More Bonuses',
            'thumbnail' => '/images/default-1280x720.jpg'
        ]);

        \App\Models\Course::factory()->create([
            'category_id' => 2,
            'author_id' => 1,
            'slug' => 'opportunity-marketing-concepts',
            'title' => 'Opportunity Marketing Concepts',
            'excerpt' => 'Tap into success with Dan Kennedy`s Opportunity Marketing Concepts course. Learn strategic approaches, seize opportunities, and elevate your business. A game-changing blueprint for maximum growth.',
            'url' => '/media/artymoo/TOSHIBA EXT/Business, Marketing & Personal Development/Dan Kennedy/Dan Kennedy - Opportunity Marketing Concepts',
            'thumbnail' => '/images/default-1280x720.jpg'
        ]);

        \App\Models\Course::factory()->create([
            'category_id' => 2,
            'author_id' => 1,
            'slug' => 'business-building-blueprint',
            'title' => 'Business Building Blueprint',
            'excerpt' => 'Learn how to use information marketing to boost you business growth.',
            'url' => '/media/artymoo/TOSHIBA EXT/Business, Marketing & Personal Development/Dan Kennedy',
            'thumbnail' => '/images/default-1280x720.jpg'
        ]);
    }
}
