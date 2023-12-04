<?php

use Database\Seeders\showroom_mobilSeeder;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * @return void
     */
    public function up()
    {
        Schema::create('showroom_mobil', function (Blueprint $table) {
            $table->id();
            $table->string('nama_mobil');
            $table->string('brand_mobil');
            $table->string('warna_mobil');
            $table->string('tipe_mobil');
            $table->integer('harga_mobil');
            $table->timestamps();
        });
        $seeder = new showroom_mobilSeeder();
        $seeder ->run();
        
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('showroom_mobil');
    }
};
