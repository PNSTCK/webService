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
        Schema::create('province', function (Blueprint $table) {
            $table->id('province_id') ->unsigned();
            $table->string('province_name', 100);

            $table->timestamps();
        });

        DB::table('province')->insert([
            [ 'province_name' => 'NusaTenggara Barat', 'created_at' => now(),  'updated_at' => now()],
            [ 'province_name' => 'Kalimantan Timur', 'created_at' => now(),  'updated_at' => now()],
        ]);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('province');
    }
};
