<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Room;
use App\Models\Ward;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected function validator(Request $request)
    {
        $rules = [
            'doctor_id' => 'required',
            'ward_id' => 'nullable',
            'room_id' => 'nullable',
            'fullname' => 'required|string|max:225',
            'phone' => 'required',
            'email' => 'nullable|email|max:64',
            'gender' => 'required',
            'age' => 'required',
            'created_by' => 'required',
            'insurance' => 'required',
            'status' => 'required',
            'next_of_kin' => 'required',
            'marital_status' => 'required',
            'disease' => 'nullable',
            'home_address' => 'required',
        ];

        return Validator::make($request->all(), $rules, []);
    }

    public function index()
    {
        $patients = Patient::all();
        return view('patient.index', compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $doctors = Doctor::all();
        $wards = Ward::all();
        $rooms = Room::all();
        return view('patient.create', compact('doctors', 'wards', 'rooms'));
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

            $patient = new Patient();
            $patient->fullname = $request->fullname;
            $patient->doctor_id = $request->doctor_id;
            $patient->ward_id = $request->ward_id;
            $patient->room_id = $request->room_id;
            $patient->phone = $request->phone;
            $patient->status = $request->status;
            $patient->email = $request->email;
            $patient->gender = $request->gender;
            $patient->age = $request->age;
            $patient->created_by = $request->created_by;
            $patient->insurance = $request->insurance;
            $patient->next_of_kin = $request->next_of_kin;
            $patient->marital_status = $request->marital_status;
            $patient->disease = $request->disease;
            $patient->home_address = $request->home_address;
            $patient->save();

            DB::commit();

            DB::commit();
            $request->session()->flash('successful', "New patient was created successfully!");
            return redirect()->route('patients.index');

        }catch(\Exception $error){
            DB::rollBack();
            return $error;
            $request->session()->flash('error', "patient creation failed!");
            return redirect()->back();
        }


        return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Patient $patient)
    {
        return view('patient.show', compact('patient'));
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
