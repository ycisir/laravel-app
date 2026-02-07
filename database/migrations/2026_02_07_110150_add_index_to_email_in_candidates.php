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
        Schema::table('candidates', function (Blueprint $table) {
            $table->unique('email');
            // $table->unique(['email', 'candidate_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('candidates', function (Blueprint $table) {
            // for best practices make sure to create new migration for dropping index or primary keys
            $table->dropUnique('candidates_email_unique');
            // $table->dropUnique(['candidates_email_unique', 'candidate_id_unique']);
        });
    }
};
