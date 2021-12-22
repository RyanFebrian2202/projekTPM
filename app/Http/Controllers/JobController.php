<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function getJobs(){
        $jobs = Job::all();
        return view('create', ['jobs'=>$jobs]);
    }
}
