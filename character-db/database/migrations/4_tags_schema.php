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
        
        Schema::create('tags', function (Blueprint $table) {
            $table->id();
        });

        Schema::table('tags', function (Blueprint $table) {
            $table->unsignedBigInteger('character_id');
            $table->foreign('character_id')->references('id')->on('characters')->onDelete('cascade');
            $table->unsignedBigInteger('keyword_id');
            $table->foreign('keyword_id')->references('id')->on('keywords')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tags');

        Schema::table('tags', function (Blueprint $table) {
            $table->dropForeign('character_id');
            $table->dropColumn('character_id');
            $table->dropForeign('keyword_id');
            $table->dropColumn('keyword_id');
        });

    }
};
