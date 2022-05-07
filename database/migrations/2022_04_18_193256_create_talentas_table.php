<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('talentas', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('nama');
            $table->string('password');
            $table->string('link')-> default ('talent.jpg');
            $table->string('talent')-> default ('My Talent');
            $table->text('desc')-> default ('My desk');
            $table->text('marque')-> default ('My marque');
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
        Schema::dropIfExists('talentas');
    }
};
