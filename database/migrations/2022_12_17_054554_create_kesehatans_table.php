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
        Schema::create('kesehatans', function (Blueprint $table) {
            $table->id();
            $table->string("idpendonor",50);
            $table->string("usia");
            $table->string("beratbadan");
            $table->string("temperature");
            $table->string("tekanandarah");
            $table->string("nadi");
            $table->string("hemoglobin");
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
        Schema::dropIfExists('kesehatans');
    }
};
