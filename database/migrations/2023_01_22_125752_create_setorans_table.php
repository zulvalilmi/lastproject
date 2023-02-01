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
        Schema::create('setorans', function (Blueprint $table) {
            $table->id();
            $table->Integer('santri_id');
            $table->Integer('tahfidz_id');
            $table->string('surat_ziyadah');
            $table->string('ayat_ziyadah');
            $table->string('surat_murojaah');
            $table->string('ayat_murojaah');
            $table->string('total_hafalan');
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
        Schema::dropIfExists('setorans');
    }
};
