<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableUserXAcademyTraining extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_x_compnay', function (Blueprint $table) {
            $table->foreignUuid('uid_user')->constrained('users', 'uid_user');
            $table->foreignUuid('uid_company')->constrained('company', 'uid_company');

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
        Schema::dropIfExists('user_x_academy_training');
    }
}
