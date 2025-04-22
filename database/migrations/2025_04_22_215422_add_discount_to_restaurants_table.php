<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('restaurants', function (Blueprint $table) {
            // misal diskon disimpan sebagai persentase desimal, nullable
            $table->decimal('discount', 5, 2)->nullable()->after('column_sebelumnya');
        });
    }
    
    public function down()
    {
        Schema::table('restaurants', function (Blueprint $table) {
            $table->dropColumn('discount');
        });
    }
    
};
