<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assesments_app extends Model
{
    use HasFactory;

       protected $fillable = [
      'ACT',
      'ACTenglishScore',
      'ACTreadingScore',
      'ACTmathScore',
      'ACTscienceScore',
      'ACTcompositeScore',
      'SAT',
      'SATmath',
      'SATCriticalThinking',
      'SATwriting',
      'SATcomposite',
      'KYOTE',
      'KYOTEarea',
      'KYOTEscore',
      'otherAssesments',
      'skillsUSA',
      'projectLeadTheWay',
      'manufacturingAcedemics',
      'awardsAndHonors',
      'highSchoolActivities',
      'technicalProgrrams',
      'additionalComments',
      'studentApplication_id',   
              
    ];

         public function Student_application()
    {
        return $this->belongsTo(Student_application::class);
    }




}