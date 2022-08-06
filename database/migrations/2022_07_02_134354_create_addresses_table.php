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
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->string('tmeporary_district');
            $table->string('tmeporary_tole');
            $table->string('tmeporary_wad_no')->nullable();
            $table->string('tmeporary_house_no')->nullable();

            $table->string('permanent_district');
            $table->string('permanent_tole');
            $table->string('permanent_wad_no')->nullable();
            $table->string('permanent_house_no')->nullable();
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
        Schema::dropIfExists('addresses');
    }
};
