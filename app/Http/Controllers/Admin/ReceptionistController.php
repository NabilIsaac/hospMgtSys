<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Receptionist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ReceptionistController extends Controller
{

    protected function validator(Request $request)
    {
        $rules = [
            'name' => 'required|string|max:225',
            'phone' => 'required',
            'email' => 'nullable|email|max:64',
            'brief_history' => 'nullable',
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
        $receptionists = Receptionist::all();
        return view('receptionist.index', compact('receptionists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $receptionists = Receptionist::all();
        return view('receptionist.create', compact('receptionists'));
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

            $receptionist = new Receptionist();
            $receptionist->name = $request->name;
            $receptionist->phone = $request->phone;
            $receptionist->email = $request->email;
            $receptionist->brief_history = $request->brief_history;
            $receptionist->home_address = $request->home_address;
            $receptionist->save();

            DB::commit();
            $request->session()->flash('successful', "New Receptionist was created successfully!");
            return redirect()->route('receptionists.index');

        }catch(\Exception $error){
            DB::rollBack();
            return $error;
            $request->session()->flash('error', "receptionist creation failed!");
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
