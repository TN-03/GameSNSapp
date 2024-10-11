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
        Schema::table('party_requests', function (Blueprint $table) {
            $table->foreignId('looking_for_party_id')->constrained('looking_for_partys','id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('party_requests', function (Blueprint $table) {
            //
        });
    }
};
