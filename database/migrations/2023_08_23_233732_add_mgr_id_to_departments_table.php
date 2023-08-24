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
        Schema::table('departments', function (Blueprint $table) {
            $table->bigInteger("mgr_id",false,true)->nullable();
            $table->text("hiringDare")->nullable();
            $table->foreign('mgr_id')->references('id')->on('instructors')->onDelete('SET NULLL')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('departments', function (Blueprint $table) {
            //
        });
    }
};
