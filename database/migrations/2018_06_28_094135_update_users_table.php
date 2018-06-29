<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('image')->nullable();
            $table->date('birthday')->nullable();
            $table->string('address')->nullable();
            $table->boolean('gender')->nullable();
            $table->integer('user_role');
            $table->boolean('hidden');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table)
        {
            $table->dropColumn('image');
            $table->dropColumn('birthday');
            $table->dropColumn('address');
            $table->dropColumn('gender');
            $table->dropColumn('user_role');
            $table->dropColumn('hidden');
        });
    }
}
