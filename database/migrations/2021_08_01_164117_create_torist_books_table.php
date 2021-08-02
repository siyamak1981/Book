<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateToristBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('torist_books', function (Blueprint $table) {
            $table->id();
            $table->string('title', 200);
            $table->string('subtitle', 300);
            $table->string('slug', 100)->unique();
            $table->text('body');
            $table->string('image')->nullable();
            $table->string('alt')->nullable();
            $table->boolean('status')->nullable();
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
        Schema::dropIfExists('torist_books');
    }
}
