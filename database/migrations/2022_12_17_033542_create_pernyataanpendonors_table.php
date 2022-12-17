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
        Schema::create('pernyataanpendonors', function (Blueprint $table) {
            $table->id();
            $table->integer('idpendonor')->required();
            $table->string('nama',50)->required();
            $table->integer('hepatitisB')->nullable();
            $table->integer('kontakhepatitis')->nullable();
            $table->integer('dapattransfusi')->nullable();
            $table->integer('tatotindik')->nullable();
            $table->integer('operasigigi')->nullable();
            $table->integer('operasikecil')->nullable();
            $table->integer('setahunoperasikecil')->nullable();
            $table->integer('vaksinsehari')->nullable();
            $table->integer('vaksinduaminggu')->nullable();
            $table->integer('imunisasirabies')->nullable();
            $table->integer('gejalaalergi')->nullable();
            $table->integer('transpalagikulit')->nullable();
            $table->integer('hamil')->nullable();
            $table->integer('menyusui')->nullable();
            $table->integer('tergantungobat')->nullable();
            $table->integer('alkohol')->nullable();
            $table->integer('sifilis')->nullable();
            $table->integer('tuberkulosis')->nullable();
            $table->integer('epilepsi')->nullable();
            $table->integer('penyakitkulit')->nullable();
            $table->integer('thalasemia')->nullable();
            $table->integer('dekathiv')->nullable();
            $table->integer('hiv')->nullable();
            $table->integer('haid')->nullable();
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
        Schema::dropIfExists('pernyataanpendonors');
    }
};
