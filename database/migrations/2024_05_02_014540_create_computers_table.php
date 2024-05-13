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
        Schema::create('computers', function (Blueprint $table) {
            $table->id();
            $table->string('brand');
            $table->float('ram');
            $table->integer('hard_disk');
            $table->integer('number_cores');
            $table->string('processor');
            $table->string('operative_system')->nullable();
            $table->date('date_creation');
            $table->boolean('graphic_memory?')->nullable();
            $table->float('cc_graphic_memory')->nullable();
            $table->timestamps();
            $table->foreignId('categorie_id')->nullable()->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('computers');
    }
};
