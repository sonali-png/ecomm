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
        Schema::table('users' , function(Blueprint $table) {
            $table->tinyInteger('role')->after('email')->default(0)->comment('0-User,1-Admin');
        });
    }

    /**
     * Reverse the migrati 
     * ons.
     */
    public function down(): void
    {
        Schema::table('users' , function(Blueprint $table) {
            $table->dropColumn('role');
        });
    }
};
