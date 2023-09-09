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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('public_id');
            $table->foreign('public_id')
            ->references('id')
            ->on('public')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->string('title');
            $table->string('body');
            $table->timestamps();

            // $table->foreignId('public_id')->constrained()
            // ->cascadeOnUpdate()
            // ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
