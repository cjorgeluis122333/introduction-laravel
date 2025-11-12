<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('notes', function (Blueprint $table) {
            $table->id();
            $table->string(column: 'title', length: 255);
            $table->string('description', 255)->nullable();
            $table->date('deadline');
            $table->boolean("done")->default(false);
            $table->timestamps();
//            $table->text("For Big Text");
//            $table->enum("state", ["DRAFT", "PUBLISHED","DELETE"]);
//            $table->double("a double value");
//            $table-> unsignedInteger(""); //Integer positive
//            $table->bigInteger("");  //Used for create foreing key to relations
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notes');
    }
};
