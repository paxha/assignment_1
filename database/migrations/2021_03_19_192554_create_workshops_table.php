<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkshopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workshops', function (Blueprint $table) {
            $table->id();
            $table->foreignId('unit_id')->nullable()->constrained('units');
            $table->foreignId('campus_id')->nullable()->constrained('campuses');
            $table->foreignId('location_id')->nullable()->constrained('locations');
            $table->foreignId('teacher_id')->nullable()->constrained('teachers');
            $table->string('weekday')->nullable();
            $table->time('start_time')->nullable();
            $table->time('end_time')->nullable();
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
        Schema::dropIfExists('workshops');
    }
}
