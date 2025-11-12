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
    {    //Connect to table notes
        Schema::table('notes', function (Blueprint $table) {
          $table->string("author"); //Create new attribute
          $table->dropColumn("deadline");//Remove one column
        });
        //
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
       Schema::dropColumns(['author']);
    }
};
