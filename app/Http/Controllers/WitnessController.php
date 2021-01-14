<?php

namespace App\Http\Controllers;

use App\Employee;
use App\User;
use App\Witness;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class WitnessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $emp_id = hash('sha256', request('cnic'));


        $validator = Validator::make($request->all(), [
            'cnic' => 'required',
            'witness1_name' => 'required',
            'witness1_cnic' => 'required',
            'witness1_present_address' => 'required',
            'witness1_permanent_address' => 'required',
            'witness2_name' => 'required',
            //'witness2_cnic' => 'required',
            'witness2_present_address' => 'required',
            'witness2_permanent_address' => 'required',
        ]);


        if ($validator->fails()) {
            return response()->json(['status' => 'val_errors', 'errors' => $validator->errors()->all()]);
        }

        try{

            $emp = Employee::find($emp_id);

            DB::beginTransaction();

            $emp->witness()->createMany([
                [

                    'employee_emp_id' => $emp_id,
                    'witness_name' => request('witness1_name'),
                    'cnic' => request('witness1_cnic'),
                    'witness_present_address' => request('witness1_present_address'),
                    'witness_permanent_address' => request('witness1_permanent_address'),
                ],
                [

                    'employee_emp_id' => $emp_id,
                    'witness_name' => request('witness2_name'),
                    'cnic' => request('witness2_cnic'),
                    'witness_present_address' => request('witness2_present_address'),
                    'witness_permanent_address' => request('witness2_permanent_address'),
                ]
            ]);

            $emp->status()->update(['witness' => 'Y']);



            DB::commit();

            return response()->json(['status' => 'success']);

        }catch (\Exception $e){

            DB::rollback();

            return response()->json(['status' => 'error', 'error' => $e->getMessage()]);
        }



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Witness  $witness
     * @return \Illuminate\Http\Response
     */
    public function show(Witness $witness)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Witness  $witness
     * @return \Illuminate\Http\Response
     */
    public function edit(Witness $witness)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Witness  $witness
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Witness $witness)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Witness  $witness
     * @return \Illuminate\Http\Response
     */
    public function destroy(Witness $witness)
    {
        //
    }



}
