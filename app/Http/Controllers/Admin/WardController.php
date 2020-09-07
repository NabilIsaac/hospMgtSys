<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\Ward;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class WardController extends Controller
{

    protected function validator(Request $request)
    {
        $rules = [
            'name' => 'required',
            'supervisor_id' => 'nullable',
            'block_name' => 'nullable',
            'no_of_rooms' => 'nullable',
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
        $wards = Ward::all();
        $doctors = Doctor::all();
        return view('ward.index', compact('wards', 'doctors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $wards = Ward::all();
        $doctors = Doctor::all();
        return view('ward.create', compact('wards', 'doctors'));
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

            $ward = new Ward();
            $ward->name = $request->name;
            $ward->supervisor_id = $request->supervisor_id;
            $ward->block_name = $request->block_name;
            $ward->no_of_rooms = $request->no_of_rooms;
            $ward->save();

            DB::commit();
            $request->session()->flash('successful', "New ward was created successfully!");
            return redirect()->route('wards.index');

        }catch(\Exception $error){
            DB::rollBack();
            return $error;
            $request->session()->flash('error', "Ward creation failed!");
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
