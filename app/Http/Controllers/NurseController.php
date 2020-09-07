<?php

namespace App\Http\Controllers;

use App\Models\Nurse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class NurseController extends Controller
{

    protected function validator(Request $request)
    {
        $rules = [
            'name' => 'required|string|max:225',
            'phone' => 'required',
            'email' => 'nullable|email|max:64',
            'brief_history' => 'nullable',
            'specialization' => 'nullable',
            'home_address' => 'required',
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
        $nurses = Nurse::all();
        return view('nurse.index', compact('nurses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nurses = Nurse::all();
        return view('nurse.create', compact('nurses'));
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

            $nurse = new Nurse();
            $nurse->name = $request->name;
            $nurse->phone = $request->phone;
            $nurse->email = $request->email;
            $nurse->brief_history = $request->brief_history;
            $nurse->specialization = $request->specialization;
            $nurse->home_address = $request->home_address;
            $nurse->save();

            DB::commit();
            $request->session()->flash('successful', "New Nurse was created successfully!");
            return redirect()->route('nurses.index');

        }catch(\Exception $error){
            DB::rollBack();
            return $error;
            $request->session()->flash('error', "Nurse creation failed!");
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
