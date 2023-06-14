<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('desks', function (Blueprint $table) {
            $table->id();
            $table->string('description')->unique();
            $table->string('desk_image');
            $table->foreignId('subsector_id')->constrained();
            $table->foreignId('sector_id')->constrained();
            $table->foreignId('level_id')->constrained();
            $table->foreignId('building_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('desks');
    }
};
