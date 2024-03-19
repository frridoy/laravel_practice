<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void //for add the column
    {
        Schema::table('customers', function (Blueprint $table) {
            $table->string('country',30)->after('address');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void //for delete the column
    {
        Schema::table('customers', function (Blueprint $table) {
            $table->dropColumn('dob');
        });
    }
};
