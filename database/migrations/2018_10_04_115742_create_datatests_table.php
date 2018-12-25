<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatatestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datatests', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('dataset_id')->unsigned();
            $table->foreign('dataset_id')->references('id')->on('datasets')->onDelete('cascade');
            $table->string('prediksi')->nullable();
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
        Schema::dropIfExists('datatests');
    }
}
