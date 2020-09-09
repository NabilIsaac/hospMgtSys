<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;
use Illuminate\Support\Facades\DB;

class RoleController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $roles = Role::all();
        return view('roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('roles.create');
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

            $role = new Role();
            $role->name = $request->name;
            $role->guard_name = $request->guard_name;
            $role->save();
           

            DB::commit();
            $request->session()->flash('successful', "New role was created successfully!");
            return redirect()->route('roles.index');

        }catch(\Exception $error){
            DB::rollBack();
            return $error;
            $request->session()->flash('error', "Role profile creation failed!");
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
    public function show(Role $role)
    {
        return view('roles.show', compact('role'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        return view('roles.edit');
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
        try{
            // Start Db transaction
            DB::beginTransaction();

            $role = Role::find($id);
            $role->name = $request->name;
            $role->guard_name = $request->guard_name;
            $role->save();
           

            DB::commit();
            $request->session()->flash('successful', "Role was updated successfully!");
            return redirect()->route('roles.index');

        }catch(\Exception $error){
            DB::rollBack();
            return $error;
            $request->session()->flash('error', "ROle creation failed!");
            return redirect()->back();
        }


        return $request;
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
