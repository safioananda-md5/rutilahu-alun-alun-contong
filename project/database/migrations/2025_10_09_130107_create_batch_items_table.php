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
        Schema::create('batch_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('batch_id');
            $table->foreign('batch_id')
                ->references('id')->on('batches')
                ->onDelete('cascade');
            $table->unsignedBigInteger('submission_id');
            $table->foreign('submission_id')
                ->references('id')->on('submissions')
                ->onDelete('cascade');
            $table->integer('rank');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('batch_items');
    }
};
