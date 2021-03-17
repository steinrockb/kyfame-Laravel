<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class contact_app extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'id',
      'start_date',
      'completedDate',
      'transcriptPath',
      'essay',
      'CurrentSection',
      

               
    ];

     public function user()
    {
        return $this->belongsTo(user::class);
    }
    
        public function contact_app()
    {
        return $this->hasOne(contact_app::class);
    }
          public function employment_app()
    {
        return $this->hasOne(employment_app::class);
    }
          public function Assesment_app()
    {
        return $this->hasOne(Assesment_app::class);
    }
          public function Status_app()
    {
        return $this->hasOne(Status_app::class);
    }

}