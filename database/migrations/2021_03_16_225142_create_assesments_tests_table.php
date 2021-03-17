<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssesmentsTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assesments_tests', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->boolean('ACT');
            $table->string('ACTenglishScore');
            $table->string('ACTreadingScore');
            $table->string('ACTmathScore');
            $table->string('ACTscienceScore');
            $table->string('ACTcompositeScore');
            $table->boolean('SAT');
            $table->string('SATmath');
            $table->string('SATCriticalThinking');
            $table->string('SATwriting');
            $table->string('SATcomposite');
            $table->boolean('KYOTE');
            $table->string('KYOTEarea');
            $table->string('KYOTEscore');
            $table->string('otherAssesments');
            $table->boolean('skillsUSA');
            $table->boolean('projectLeadTheWay');
            $table->string('manufacturingAcedemics');
            $table->string('awardsAndHonors');
            $table->string('highSchoolActivities');
            $table->string('technicalProgrrams');
            $table->string('additionalComments');
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
        Schema::dropIfExists('assesments_tests');
    }
}