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
    Schema::table('doctors', function (Blueprint $table) {

        if (Schema::hasColumn('doctors', 'experience')) {
            $table->dropColumn('experience');
        }

        if (Schema::hasColumn('doctors', 'status')) {
            $table->dropColumn('status');
        }

    });
}
};
