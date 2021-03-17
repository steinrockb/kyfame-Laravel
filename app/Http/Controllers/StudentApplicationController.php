<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\StudentApplication;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class StudentApplicationController extends Controller
{
    
   
        public function __contruct()
        {
            $user = Auth::user();
            $application = new StudentApplication();
            return view('userApplication/application', ['user' => $user]);            
        }

         public function create(Request $request)
       {
            $application = new StudentApplication;
            $user = Auth::user();
            $application->user_id = $request->user()->id;                  
            $application->save();

          event(new student_application($application));
       }
   

//    public function store(Request $request)
//     {
//          ($application = User::create([
//             'id' => $request->id,
         
//         ]));

//         event(new student_application($application));

        
//     }
}