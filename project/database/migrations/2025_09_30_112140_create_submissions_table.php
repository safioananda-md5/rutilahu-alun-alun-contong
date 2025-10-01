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
        Schema::create('submissions', function (Blueprint $table) {
            $table->id();
            $table->string('submission_id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade');
            $table->string('address');
            $table->integer('no_rt');
            $table->integer('no_rw');
            $table->float('revenue');
            $table->float('asset');
            $table->integer('dependents');
            $table->integer('building_area');
            $table->integer('building_legality');
            $table->integer('roof_condition');
            $table->integer('wall_condition');
            $table->integer('floor_condition');
            $table->string('certificate_of_domicile');
            $table->string('certificate_of_ownership');
            $table->string('statement_of_nodispute');
            $table->string('statement_of_neverreceivedassistance');
            $table->string('statement_of_sellthehouse');
            $table->string('statement_of_incomebelowminimumwage');
            $table->integer('status');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('submissions');
    }
};
