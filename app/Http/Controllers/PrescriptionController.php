<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Drug;
use App\Models\Patient;
use App\Models\Prescription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class PrescriptionController extends Controller
{

    protected function validator(Request $request)
    {
        $rules = [
            'patient_id' => 'required',
            'doctor_id' => 'required',
            'drug_id' => 'required',
            'dose' => 'nullable',
        ];

        return Validator::make($request->all(), $rules, []);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prescriptions = Prescription::all();
        $doctors = Doctor::all();
        $patients = Patient::all();
        $drugs = Drug::all();
        return view('prescription.index', compact('prescriptions', 'doctors', 'patients', 'drugs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $prescriptions = Prescription::all();
        $doctors = Doctor::all();
        $patients = Patient::all();
        $drugs = Drug::all();
        return view('prescription.create', compact('prescriptions', 'doctors', 'patients', 'drugs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            // Start Db transaction
            DB::beginTransaction();

            // Validate incoming request
            $validation = $this->validator($request);
            if ($validation->fails()) {
                return response($validation->errors(), 400);
            }

            $prescription = new Prescription();
            $prescription->patient_id = $request->patient_id;
            $prescription->doctor_id = $request->doctor_id;
            $prescription->drug_id = $request->drug_id;
            $prescription->dose = $request->dose;
            $prescription->save();

            DB::commit();
            $request->session()->flash('successful', "New prescription was created successfully!");
            return redirect()->route('prescriptions.index');

        }catch(\Exception $error){
            DB::rollBack();
            return $error;
            $request->session()->flash('error', "Prescription creation failed!");
            return redirect()->back();
        } 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
