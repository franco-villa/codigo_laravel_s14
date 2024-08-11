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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('url')->unique();
            $table->timestamps();
        });
        Schema::table('servicios', function(Blueprint $table){
            $table->unsignedBigInteger('category_id')->nullable()->after('id');

            $table->foreign('category_id')->references('id')->on('categories')
            ->onUpdate('cascade')   // Actualizará la referencia si se modifica el ID de la categoría
            ->onDelete('set null');  // Establece NULL en category_id si se elimina la categoría;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('servicios', function(Blueprint $table){
            $table->dropForeign('servicios_category_id_foreign');

            $table->dropColumn('category_id');
        });

        Schema::dropIfExists('categories');
    }
};
