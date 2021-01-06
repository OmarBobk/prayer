<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrayerUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prayer_user', function (Blueprint $table) {
            $table->id();

            // 0: not happened, 1: on time, 2: happened on another time.
            $table->unsignedTinyInteger('status')->default(0);
            $table->string('month');
            $table->integer('day_arrangement');

            $table->foreignId('prayer_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('user_id')->default(1)->constrained()->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('prayer_users');
    }
}
