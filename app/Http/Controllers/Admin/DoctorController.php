<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\DoctorType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected function validator(Request $request)
    {
        $rules = [
            'doctor_type_id' => 'required',
            'name' => 'required|string|max:225',
            'phone' => 'required',
            'email' => 'nullable|email|max:64',
            'specialization' => 'required',
            'brief_history' => 'nullable',
            'home_address' => 'required',
        ];

        return Validator::make($request->all(), $rules, []);
    }

    public function index()
    {
        $doctors = Doctor::all();
        $doctor_types = DoctorType::all();
        return view('doctor.index', compact('doctor_types', 'doctors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $doctor_types = DoctorType::all();
        return view('doctor.create', compact('doctor_types'));
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

            $doctor = new Doctor();
            $doctor->name = $request->name;
            $doctor->doctor_type_id = $request->doctor_type_id;
            $doctor->phone = $request->phone;
            $doctor->email = $request->email;
            $doctor->specialization = $request->specialization;
            $doctor->brief_history = $request->brief_history;
            $doctor->home_address = $request->home_address;
            $doctor->save();

            DB::commit();
            $request->session()->flash('successful', "New doctor was created successfully!");
            return redirect()->route('doctors.index');

        }catch(\Exception $error){
            DB::rollBack();
            return $error;
            $request->session()->flash('error', "doctor creation failed!");
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
