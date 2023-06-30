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
    
        Schema::create('characters', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['D&D', 'Books']);
            $table->string('name');
            $table->string('race');
            $table->string('class')->nullable();
            $table->string('subclass')->nullable();
            $table->longtext('description');
            $table->boolean('published');
            $table->dateTime('created_at');
            $table->binary('photo');
        });

        Schema::table('characters', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('characters');

        Schema::table('character', function (Blueprint $table) {
            $table->dropForeign('user_id');
            $table->dropColumn('user_id');
        });
    }
};
