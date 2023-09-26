<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tb_siswa1',function(Blueprint $table){
        $table->integer('nisn');
        $table->string('nama',30)->nullable();
        $table->string('alamat',30)->nullable();
        $table->string('no_telp',13)->nullable();
        $table->string('kode_kelas',10)->nullable();
        $table->timestamps();
        $table->primary('nisn');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropDatabaseIfExists('tb_siswa1');
    }
};
