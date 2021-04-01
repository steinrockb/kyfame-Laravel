<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatusAppsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('status_apps', function (Blueprint $table) {
            $table->id();
         
            $table->boolean('under-18');
            $table->boolean('authorizedInUS');
            $table->string('levelOfEducation');
            $table->boolean('relativeSponsers');
            $table->boolean('workForSponser');
            $table->string('employedSponser');            
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