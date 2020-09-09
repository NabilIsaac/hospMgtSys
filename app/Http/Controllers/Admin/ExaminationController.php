<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Examination;
use App\Models\Nurse;
use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Traits\HasRoles;

class ExaminationController extends Controller
{

    protected function validator(Request $request)
    {
        $rules = [
            'patient_id' => 'required',
            'symptoms' => 'required',
            'comment' => 'nullable',
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
        $nurseId = Auth::id();

        if (Auth::user()->hasRole('admin')) {
            $examinations = Examination::all();
        }elseif(Auth::user()->hasRole('nurse')){
            $examinations = Examination::where('created_by', $nurseId)->get();
        }

        // return $nur;
        $nurses = Nurse::all();
        $patients = Patient::all();
        return view('examination.index', compact('examinations', 'nurses', 'patients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $examinations = Examination::all();
        $nurses = Nurse::all();
        $patients = Patient::all();
        return view('examination.create', compact('examinations', 'nurses', 'patients'));
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

            $examination = new Examination();
            $examination->patient_id = $request->patient_id;
            $examination->created_by = Auth::user()->id;
            $examination->symptoms = $request->symptoms;
            $examination->comment = $request->comment;
            $examination->save();

            DB::commit();
            $request->session()->flash('successful', "New examination was created successfully!");
            return redirect()->route('examinations.index');

        }catch(\Exception $error){
            DB::rollBack();
            return $error;
            $request->session()->flash('error', "Examination creation failed!");
            return redirect()->back();
        } 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Examination $examination)
    {
        return view('examination.show', compact('examination'));
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
