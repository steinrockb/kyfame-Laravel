<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class ContactApp extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'streetAddress',
        'address2',
        'city',
        'state',
        'zip',
        'primaryPhone',
        'altPhone',
           
 
        
               
    ];

     public function studentApplication()
    {
        return $this->belongsTo(studentApplication::class);
    }
  
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
 

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    
}