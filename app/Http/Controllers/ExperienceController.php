<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Experience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ExperienceController extends Controller
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
    public function create(Request $request)
    {
        //
        $emp_id = hash('sha256',request('cnic'));



        $validator = Validator::make($request->all(),[
            'cnic' => 'required',
            'organization1' => 'required',
            'position1' => 'required',
            'from1' => 'required',
            'to1' => 'required',

        ]);


        if ($validator->fails())
        {
            return response()->json(['status'=>'val_errors','errors'=>$validator->errors()->all()]);
        }



        try {

            $experience = [[
                'employee_emp_id' => $emp_id,
                'organization' => request('organization1'),
                'position' => request('position1'),
                'from' => request('from1'),
                'to' => request('to1')
            ]];

            //array_push($experience,$experience1);
            if (strlen(trim(request('organization2'))) > 0 and strlen(trim(request('position2'))) > 0 and
                strlen(trim(request('from2'))) > 0 and strlen(trim(request('to2'))) > 0) {

                $experience2 = [
                    'employee_emp_id' => $emp_id,
                    'organization' => request('organization2'),
                    'position' => request('position2'),
                    'from' => request('from2'),
                    'to' => request('to2')
                ];

                array_push($experience, $experience2);

            }

            if (strlen(trim(request('organization3'))) > 0 and strlen(trim(request('position3'))) > 0 and
                strlen(trim(request('from3'))) > 0 and strlen(trim(request('to3'))) > 0) {
                $experience3 = [
                    'employee_emp_id' => $emp_id,
                    'organization' => request('organization3'),
                    'position' => request('position3'),
                    'from' => request('from3'),
                    'to' => request('to3')
                ];

                array_push($experience, $experience3);

            }

            if (strlen(trim(request('organization4'))) > 0 and strlen(trim(request('position4'))) > 0 and
                strlen(trim(request('from4'))) > 0 and strlen(trim(request('to4'))) > 0) {
                $experience4 = [
                    'employee_emp_id' => $emp_id,
                    'organization' => request('organization4'),
                    'position' => request('position4'),
                    'from' => request('from4'),
                    'to' => request('to4')
                ];

                array_push($experience, $experience4);
            }

            if (strlen(trim(request('organization5'))) > 0 and strlen(trim(request('position5'))) > 0 and
                strlen(trim(request('from5'))) > 0 and strlen(trim(request('to5'))) > 0) {

                $experience5 = [
                    'employee_emp_id' => $emp_id,
                    'organization' => request('organization5'),
                    'position' => request('position5'),
                    'from' => request('from5'),
                    'to' => request('to5')
                ];

                array_push($experience, $experience5);
            }


            DB::beginTransaction();

            $emp = Employee::find($emp_id);



            $emp->experience()->createMany($experience);

            $emp->status()->update(['experience'=>'Y']);

            //dd($request->all();

            DB::commit();

            // dd($experience);
            //return redirect('home')->with('status', 'emergency')->with('emp_id',$emp_id);
            return response()->json(['status'=>'success']);
        }catch (\Exception $e){
            // Rollback and then redirect
            // back to form with errors
            DB::rollback();
            /*return redirect('home')
                ->withErrors( $e->getMessage() )
                ->withInput();*/

            return response()->json(['status'=>'error','error'=>$e->getMessage()]);
        }



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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function show(Experience $experience)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function edit(Experience $experience)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Experience $experience)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function destroy(Experience $experience)
    {
        //
    }
}
