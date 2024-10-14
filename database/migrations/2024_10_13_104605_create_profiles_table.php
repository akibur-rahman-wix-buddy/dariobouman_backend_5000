<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('cover_photo')->nullable();
            $table->string('phone')->nullable();
            $table->text('bio')->nullable();
            $table->string('company_name')->nullable();
            $table->string('website')->nullable();

            $table->timestamps();
        });



        //creating users
        $user = User::create([
            'first_name' => 'Admin',
            'last_name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('12345678'),
            'role' => 'admin',
            'email_verified_at' => now(),
        ]);
        $user->profile()->create();

        // creating users
        $user = User::create([
            'first_name' => 'user1',
            'last_name' => 'user1',
            'email' => 'user1@user.com',
            'password' => bcrypt('12345678'),
            'email_verified_at' => now(),
        ]);
        $user->profile()->create();

        $user = User::create([
            'first_name' => 'user2',
            'last_name' => 'user2',
            'email' => 'user2@user.com',
            'password' => bcrypt('12345678'),
            'email_verified_at' => now(),
        ]);
        $user->profile()->create();

        $user = User::create([
            'first_name' => 'user3',
            'last_name' => 'user3',
            'email' => 'user3@user.com',
            'password' => bcrypt('12345678'),
            'email_verified_at' => now(),
        ]);
        $user->profile()->create();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
