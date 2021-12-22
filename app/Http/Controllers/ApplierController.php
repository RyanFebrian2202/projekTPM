<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApplierRequest;
use App\Models\Applier;
use App\Models\Job;
use Illuminate\Http\Request;

class ApplierController extends Controller
{
    public function getCreatePage(){
        return view('create');
    }

    public function createApplier(ApplierRequest $request){

        Applier::create([
            'name'=>$request->name,
            'age'=>$request->age,
            'job_id'=>$request->job_id,
            'CV'=>$request->file('CV')->store('storageCV'),
        ]);

        return redirect(route('getAppliers'));
    }

    public function getAppliers(Request $request){

        if($request->input('search')){
            $appliers = Applier::where('name','like','%'.request('search').'%')->get();
        } else{
            $appliers = Applier::all();
        }

        //cara lain pake $appliers = DB::table('appliers')->get();
        return view('view',['appliers'=>$appliers]);
    }

    public function getApplierById($id){
        $applier = Applier::find($id);
        return view('update',['applier' => $applier]);
    }

    public function updateApplier(ApplierRequest $request, $id){
        $applier = Applier::find($id);

        // $applier->name = $request->name;
        // $applier->age = $request->age;
        // $applier->job_idn = $request->job_idn;
        // $applier->CV = $request->CV;
        // $applier->save();

        $applier->update([
            'name'=> $request->name,
            'age'=> $request->age,
            'job_id'=> $request->job_id,
            'CV'=>$request->file('CV')->store('storageCV'),
        ]);

        return redirect(route('getAppliers'));
    }

    public function deleteApplier($id){
        Applier::destroy($id);
        return redirect(route('getAppliers'));
    }
}