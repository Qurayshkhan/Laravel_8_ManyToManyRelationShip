<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSingersSongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('singers_songs', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('singers_id');
          
            // $table->foreign('singers_id')->references('id')->on('singers');
            // $table->unsignedBigInteger('songs_id');
            // $table->foreign('songs_id')->references('id')->on('songs');
                //Simple way
$table->foreignId('singers_id')->constrained('singers');
$table->foreignId('songs_id')->constrained('songs');
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
        Schema::dropIfExists('singers_songs');
    }
}
