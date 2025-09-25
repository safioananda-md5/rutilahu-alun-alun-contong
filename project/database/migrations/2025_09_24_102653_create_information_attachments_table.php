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
        Schema::create('information_attachments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('information_id');
            $table->foreign('information_id')
                ->references('id')->on('informations')
                ->onDelete('cascade');
            $table->string('filename');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('information_attachments');
    }
};
