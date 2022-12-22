<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('email') -> unique();
            $table->string('password') -> nullable();
            $table->string('profile_photo_path', 2048) -> nullable();
            $table->rememberToken();

            $table->enum('role', [User::ADMIN,User::CUSTOMER]) -> default(User::CUSTOMER);
            $table->boolean('status') -> default(1);

            $table->foreignId('current_team_id') -> nullable();

            $table->timestamp('email_verified_at') -> nullable();
            $table->timestamp('last_login_at') -> nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
