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
        Schema::create('catreId', function (Blueprint $table) {
            $table->id();
            $table->string('nomR');
            $table->string('CIN');
            $table->string('nomU');
            $table->string('typeU');
            $table->string('assoc');
            $table->integer('nbrC');
            $table->string('anneeSco');
            $table->timestamps();
        });        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
