<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animals', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('race');
            $table->string('color')->nullable();
            $table->integer('age')->nullable();
            $table->char('friendliness')->nullable();
            $table->char('size')->nullable();
            $table->char('sex')->nullable();
            $table->text('details')->nullable();
            $table->string('status')->default('Found');
            $table->string('last_latitude')->nullable();
            $table->string('last_longitude')->nullable();
            $table->integer('user_id')->unsigned();
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
        Schema::dropIfExists('animals');
    }
}
