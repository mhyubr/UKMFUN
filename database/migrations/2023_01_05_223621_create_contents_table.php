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
        Schema::create('contents', function (Blueprint $table) {
            $table->id('id_content')->unsigned()->autoIncrement();
            $table->integer('id_ukm');
            $table->string('nama_ukm', 255);
            $table->string('deskripsi');
            $table->string('logo', 255)->unique();
            $table->string('jumbotron', 255);
            $table->string('visi');
            $table->string('misi');
            $table->string('galeri', 255);
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
        Schema::dropIfExists('contents');
    }
};