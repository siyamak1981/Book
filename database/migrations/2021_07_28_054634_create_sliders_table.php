<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sliders', function (Blueprint $table) {
            $table->id();
            $table->string('subtitle', 200);
            $table->string('slug', 100)->unique();
            $table->text('body');
            $table->boolean('status')->nullable();;
            $table->string('image')->nullable();
            $table->string('shape1')->nullable();
            $table->string('shape2')->nullable();
            $table->string('shape3')->nullable();
            $table->string('shape4')->nullable();
            $table->string('shape5')->nullable();
            $table->string('shape6')->nullable();
            $table->string('alt1')->nullable();
            $table->string('alt2')->nullable();
            $table->string('alt3')->nullable();
            $table->string('alt4')->nullable();
            $table->string('alt5')->nullable();
            $table->string('alt6')->nullable();
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
        Schema::dropIfExists('sliders');
    }
}
