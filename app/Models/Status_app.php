<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status_app extends Model
{
    use HasFactory;

    protected $fillable = [        
        'under-18',
        'authorizedInUS',
        'levelOfEducation',
        'RelativeSponsers',
        'WorkForSponser',
        'EmployedWithSponser',
        'studentApplication_id',        
    ];
    
    
           public function Student_application()
    {
        return $this->belongsTo(Student_application::class);
    }
}