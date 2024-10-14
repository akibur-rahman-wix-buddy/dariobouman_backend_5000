<?php

namespace Database\Seeders\Seed;

use App\Helper\Helper;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{

    private $helper;

    /**
     * Create a new instance of the ProductController.
     *
     * @param App/Helper/Helper $helper An instance of the Helper class used for utility functions.
     */
    public function __construct(Helper $helper)
    {
        $this->helper = $helper;
    }

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         //creating users
         $user = User::create([
            'first_name' => 'Admin',
            'last_name' => 'Admin',
            'email' => 'admin@admin.com',
            'handle' => $this->helper->generateUniqueSlug('admin', 'users', 'handle'),
            'password' => bcrypt('12345678'),
            'role' => 'admin',
            'email_verified_at' => now(),
        ]);
        $user->profile()->create();

        // creating users
        $user = User::create(attributes: [
            'first_name' => 'user1',
            'last_name' => 'user1',
            'email' => 'user1@user.com',
            'handle' => $this->helper->generateUniqueSlug('user1', 'users', 'handle'),
            'password' => bcrypt('12345678'),
            'email_verified_at' => now(),
        ]);
        $user->profile()->create();

        $user = User::create([
            'first_name' => 'user2',
            'last_name' => 'user2',
            'email' => 'user2@user.com',
            'handle' => $this->helper->generateUniqueSlug('user2', 'users', 'handle'),
            'password' => bcrypt('12345678'),
            'email_verified_at' => now(),
        ]);
        $user->profile()->create();

        $user = User::create([
            'first_name' => 'user3',
            'last_name' => 'user3',
            'email' => 'user3@user.com',
            'handle' => $this->helper->generateUniqueSlug('user3', 'users', 'handle'),
            'password' => bcrypt('12345678'),
            'email_verified_at' => now(),
        ]);
        $user->profile()->create();
    }
}
