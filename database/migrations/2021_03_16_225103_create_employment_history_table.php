<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmploymentHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employment_history', function (Blueprint $table) {
            $table->id();
            $table->string('employerName');
            $table->string('employerPhone');
            $table->string('workDuties');
            $table->date('employmentStart');
            $table->date('employmentEnd');
            $table->string('reasonForLeaving');
            $table->timestamp('completedDate');
            $table->foreignId('studentApplication_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employment_history');
    }
}
