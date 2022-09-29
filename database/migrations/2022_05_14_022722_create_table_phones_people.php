<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateTablePhonesPeople extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phones_people', function (Blueprint $table) {
            $table->uuid('uid_phone')->primary()->index();
            $table->string('phone_number')->unique()->index()->nullable(false);

            $table->foreignUuid('uid_people')->constrained('people', 'uid_people');

            $table->dateTime('created_at')->useCurrent()->index();
            $table->dateTime('updated_at')->useCurrent()->useCurrentOnUpdate()->index();

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
        Schema::dropIfExists('phones_people');
    }
}
