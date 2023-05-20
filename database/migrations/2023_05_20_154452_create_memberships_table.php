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
        Schema::create('memberships', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('l_name');
            $table->string('doc_type');
            $table->string('doc_number');
            $table->string('bir_date');
            $table->string('chris_date'); // Fecha de bautizo
            $table->string('h_spirit'); // Espiritu santo
            $table->string('is_active'); // recibió espiritu santo si - no
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('memberships');
    }
};
