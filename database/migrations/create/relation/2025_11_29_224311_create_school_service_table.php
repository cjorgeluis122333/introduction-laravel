<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('school_service', function (Blueprint $table) {
            $table->foreignId('school_id')->constrained('schools');
            $table->foreignId('service_id')->constrained('services');
            // Clave primaria compuesta
            $table->primary(['school_id', 'service_id']);
            //Additional column(PIVOT)
            $table->decimal('cost')->nullable(); // Campo adicional
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('school_service');
    }
};
