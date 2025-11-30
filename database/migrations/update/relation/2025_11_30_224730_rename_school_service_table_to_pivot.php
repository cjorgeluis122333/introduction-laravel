<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::rename("school_service", "school_services_pivot");
    }

    public function down(): void
    {
        Schema::rename('school_service_pivot', 'school_service');
    }
};
