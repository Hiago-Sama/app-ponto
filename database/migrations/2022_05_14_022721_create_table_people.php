<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateTablePeople extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->uuid('uid_people')->primary()->index();
            $table->string('full_name')->index()->nullable(false);
            $table->string('cpf')->unique()->index()->nullable(false);
            $table->string('email')->unique()->index()->nullable(false);
            $table->string('password')->nullable(false);
            $table->string('birthday')->index()->nullable(false);

            $table->foreignUuid('uid_address')->constrained('address', 'uid_address');
            $table->foreignUuid('uid_status')->constrained('status', 'uid_status');

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
        Schema::dropIfExists('people');
    }
}
