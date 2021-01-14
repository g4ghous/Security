<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Uniform;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UniformController extends Controller
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        try {
            $emp_id = hash('sha256', request('cnic'));
             DB::beginTransaction();

            Uniform::where([
            ['item', '=', request('item')],
            ['employee_emp_id', '=', $emp_id],
            ['status','=','A']
            ])->update(array('status' => 'I'));

             Uniform::create([
                 'employee_emp_id'=>$emp_id,
                 'name'=>request('name'),
                 'item'=>request('item'),
                 'quantity'=>request('qty'),
                 'date_issued'=>request('date_issue'),
                 'date_recieved'=>request('date_recieve'),
                 'location'=>request('location'),
                 'remarks'=>request('remarks'),
                 'new_used'=>request('new_used'),
                 'status'=>'A',
            ]);



             DB::commit();


            $emp = Employee::find($emp_id);


            if ($emp->count()>0) {
                $uniforms = $emp->uniform()->where('status', '=', 'A')->get();

                return view('uniform', ['employee' => $emp,'uniforms'=>$uniforms,'status'=>'Successfully Saved!']);


            }
            else {
                return view('uniform', ['no_data' => 'No Data Found']);

            }





        } catch (\Exception $e) {
            // Rollback and then redirect
            // back to form with errors
           DB::rollback();
              return redirect('uniform')
                  ->withErrors($e->getMessage())
                  ->withInput();


            //dd($request->all());
        }


    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //

        //dd($employee->dump());




        $emp_id = hash('sha256', request('cnic'));
        $employee = Employee::where('emp_id', $emp_id)->get();


        if ($employee->isEmpty()) {
            return view('uniform', ['no_data' => 'No Data Found']);
        }
        else {
            $uniforms = $employee->uniform()->where('status', '=', 'A')->get();

            return view('uniform', ['employee' => $employee, 'uniforms' => $uniforms]);
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
