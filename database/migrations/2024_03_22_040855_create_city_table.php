<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('city', function (Blueprint $table) {
            $table->id('city_id')->unsigned();
            $table->unsignedBigInteger('province_id');
            $table->string('city_type', 100);
            $table->string('city_name', 100);
            $table->timestamps();
            $table->softDeletes();

            $table -> foreign('province_id')-> references('province_id')->on('province')-> onUpdate('cascade') -> onDelete('cascade');
        });

        DB::table('city')->insert([
            [ 'city_id' => 1, 'city_type' => 'kota', 'city_name' => 'Mataram', 'created_at' => now(),  'updated_at' => now()],
            [ 'city_id' => 2, 'city_type' => 'kota', 'city_name' => 'Palangkaraya', 'created_at' => now(),  'updated_at' => now()],
        ]);


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('city');
    }
};
