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
        Schema::create('actives', function (Blueprint $table) {
            $table->id();

            $table->string('name_uz');
            $table->string('name_ru')->nullable();
            $table->string('name_en')->nullable();

            $table->longText('desc_uz');
            $table->longText('desc_ru')->nullable();
            $table->longText('desc_en')->nullable();

            $table->string('img');
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
        Schema::dropIfExists('actives');
    }
};
