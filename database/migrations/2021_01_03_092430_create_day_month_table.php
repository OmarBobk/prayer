<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDayMonthTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('day_month', function (Blueprint $table) {
            $table->id();
//            $table->unsignedTinyInteger('day_id');
//            $table->unsignedTinyInteger('month_id');

            $table->unsignedTinyInteger('day_arrangement');
            $table->timestamps();

            $table->foreignId('day_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('month_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('day_month');
    }
}
