<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateTableUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->uuid('uid_user')->primary()->index();

            $table->foreignUuid('uid_people')->constrained('people', 'uid_people');
            $table->foreignUuid('uid_status')->constrained('status', 'uid_status');
            $table->foreignUuid('uid_function')->constrained('functions', 'uid_function');

            $table->string('username')->index()->nullable(false);
            $table->string('password')->index()->nullable(false);

            $table->dateTime('created_at')->useCurrent()->index();
            $table->dateTime('updated_at')->useCurrent()->useCurrentOnUpdate()->index();
            $table->dateTime('last_login')->useCurrent()->index();

            $table->softDeletes();
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
}
