<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
Schema::enableForeignKeyConstraints();


class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->string('Age');
            $table->string('Gender');
            $table->string('Country');
            $table->string('Longsighted');
            $table->string('shortsighted');
            $table->string('suffering_degree');
            $table->string('problems_by1')->NULL;
            $table->string('problems_by2')->NULL;
            $table->string('problems_by3')->NULL;



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
