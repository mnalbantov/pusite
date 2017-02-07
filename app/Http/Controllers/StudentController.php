<?php

namespace App\Http\Controllers;

use App\User;
use Bican\Roles\Models\Role;
use Illuminate\Http\Request;

use App\Http\Requests;

class StudentController extends Controller
{
    public function home()
    {

    }

    public function student($id)
    {   
        $student = User::find($id);

        if($student->is('employer')){
           echo 'it is employer';
           exit;
        }

        echo ' not employer';


    }

    public function createRole()
    {
        $adminRole = Role::create(
            [
                'name' => 'Employer',
                'slug' => 'employer',
                'description' => 'employer who can create offers for job', // optional descriptipn
                'level' => 1 //optional, by default is 1
        ]);

    }
}
