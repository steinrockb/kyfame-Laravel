<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentApplicationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studentApplications', function (Blueprint $table) {
            $table->id();
            $table->timestamp('start_date');          
            $table->string('transcriptPath');
            $table->string('essay');
            $table->string('CurrentSection');
        
        
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('studentApplication');
    }
}