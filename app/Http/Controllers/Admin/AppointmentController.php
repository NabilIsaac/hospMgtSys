<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class AppointmentController extends Controller
{

    protected function validator(Request $request)
    {
        $rules = [
            'patient_id' => 'required',
            'doctor_id' => 'required',
            'appointment_date' => 'required',
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
        $appointments = Appointment::all();
        $doctors = Doctor::all();
        $patients = Patient::all();
        return view('appointments.index', compact('appointments', 'doctors', 'patients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $appointments = Appointment::all();
        $doctors = Doctor::all();
        $patients = Patient::all();
        return view('appointments.create', compact('appointments', 'doctors', 'patients'));
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

            $appointment = new Appointment();
            $appointment->patient_id = $request->patient_id;
            $appointment->doctor_id = $request->doctor_id;
            $appointment->appointment_date = $request->appointment_date;
            $appointment->save();

            DB::commit();
            $request->session()->flash('successful', "New appointment was created successfully!");
            return redirect()->route('appointments.index');

        }catch(\Exception $error){
            DB::rollBack();
            return $error;
            $request->session()->flash('error', "Appointment creation failed!");
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
