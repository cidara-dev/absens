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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('grade_id');
            $table->string('level_id');
            $table->string('nisn');
            $table->string('code')->nullable();
            $table->string('name');
            $table->string('nik');
            $table->enum('gender',['L','P']);
            $table->string('born');
            $table->string('borndate');
            $table->string('address');
            $table->string('phone')->nullable();
            $table->string('kip')->nullable();
            $table->string('parent')->nullable();
            $table->enum('status',['Aktiv','Pindah', 'Keluar']);
            $table->string('note')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
