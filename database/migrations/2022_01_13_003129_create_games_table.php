<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('developer_id');
            $table->string('name');
            $table->text('description');
            $table->string('homepage');
            $table->string('cover');
            $table->enum('status', ['tampil', 'tunda']);
            $table->timestamp('verified_at')->nullable();
            $table->timestamps();
            $table->foreign('developer_id')->references('id')->on('users')->onUpdate("cascade")->onDelete("restrict");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('games');
    }
}
