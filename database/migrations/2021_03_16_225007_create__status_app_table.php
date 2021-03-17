<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatusAppTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_status_app', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->boolean('under-18');
            $table->boolean('confirmed');
            $table->boolean('authorizedInUS');
            $table->string('levelOfEducation');
            $table->boolean('RelativeSponsers');
            $table->boolean('WorkForSponser');
            $table->boolean('EmployedWithSponser');            
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
        Schema::dropIfExists('_status_app');
    }
}