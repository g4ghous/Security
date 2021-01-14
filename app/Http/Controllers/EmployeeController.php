<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Experience;
use App\Status;
use App\Witness;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class EmployeeController extends Controller
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
        
        
        // $id = IdGenerator::generate(['table' => 'employees', 'length' => 9, 'prefix' =>'ABS-']);

        $emp_id = hash('sha256', request('cnic'));

        try {


            DB::beginTransaction();
            Employee::create([
                // 'gr_no' => $id,
                'emp_id' => $emp_id,
                'id'=> request('id'),
                'date' => request('date'),
                'apply_for' => request('apply_for'),
                'name' => request('name'),
                'cnic' => request('cnic'),
                'gender' => request('gender'),
                'dob' => request('dob'),
                'birth_place' => request('birth_place'),
                'contact' => request('contact'),
                'religion' => request('religion'),
                'nationality' => request('nationality'),
                'blood_group' => request('blood_group'),
                'cast' => request('cast'),
                'marital_status' => request('marital_status'),
                'spouse' => request('spouse'),
                'address_present' => request('address_present'),
                'address_permanent' => request('address_permanent'),
                'next_of_kin' => request('next_of_kin'),
                'kin_contact' => request('kin_contact'),
                'kin_address' => request('kin_address'),
                'primary_school' => request('primary_school'),
                'primary_date' => request('primary_date'),
                'secondary_school' => request('secondary_school'),
                'secondary_date' => request('secondary_date'),
                'tertiary_school' => request('tertiary_school'),
                'tertiary_date' => request('tertiary_date'),
                'profession' => request('profession'),
                'height' => request('height'),
                'weight' => request('weight'),
                'hair_eye_color' => request('hair_eye_color'),
                'dissabilities' => request('disabilities'),
                'medication' => request('medication'),
                'illness' => request('illness')]);

            $emp = Employee::find($emp_id);


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


            //$experience =[];
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


            $emp->experience()->createMany($experience);

            DB::commit();

            // dd($experience);
            return redirect('home')->with('status', 'Successfully Saved!');

        } catch (\Exception $e) {
            // Rollback and then redirect
            // back to form with errors
            DB::rollback();
            return redirect('home')
                ->withErrors($e->getMessage())
                ->withInput();
        }
    }

    public function create_bgInfo(Request $request)
    {
        //
        
        $emp_id = hash('sha256', request('cnic'));
        // $gr = IdGenerator::generate(['table' => 'employees', 'length' => 9, 'prefix' =>'ABS-']);

        try {


            DB::beginTransaction();
            Employee::create([
                // 'gr_no' => $gr,
                'emp_id' => $emp_id,
                
                'date' => request('date'),
                'apply_for' => request('apply_for'),
                'name' => request('name'),
                'cnic' => request('cnic'),
                'gender' => request('gender'),
                'dob' => request('dob'),
                'birth_place' => request('birth_place'),
                'contact' => request('contact'),
                'religion' => request('religion'),
                'nationality' => request('nationality'),
                'blood_group' => request('blood_group'),
                'cast' => request('cast'),
                'marital_status' => request('marital_status'),
                'spouse' => request('spouse'),
                'address_present' => request('address_present'),
                'address_permanent' => request('address_permanent'),
            ]);

            $emp = Employee::find($emp_id);


            $statuses = [
                'employee_emp_id' => $emp_id,
                'background' => 'Y',
                'emergency' => 'N',
                'education' => 'N',
                'experience' => 'N',
                'physical' => 'N',
                'medical' => 'N',
                'witness' => 'N',
            ];


            $emp->status()->create($statuses);

            //dd($request->all());

            DB::commit();

            // dd($experience);
            //
            //return redirect('home')->with('status', 'emergency')->with('emp_id',$emp_id);

            return response()->json(['status' => 'success']);


        } catch (\Exception $e) {
            // Rollback and then redirect
            // back to form with errors
            DB::rollback();
            return response()->json(['status' => 'error', 'error' => $e->getMessage()]);
            /*return redirect('home')
                ->withErrors( $e->getMessage() )
                ->withInput();*/
        }
    }


    public function create_emergency(Request $request)
    {
        $emp_id = hash('sha256', request('cnic'));


        try {


            DB::beginTransaction();
            Employee::where('emp_id', $emp_id)->update([
                'next_of_kin' => request('next_of_kin'),
                'kin_contact' => request('kin_contact'),
                'kin_address' => request('kin_address'),
            ]);

            $emp = Employee::find($emp_id);


            $emp->status()->update(['emergency' => 'Y']);

            //dd($request->all();

            DB::commit();

            // dd($experience);
            //return redirect('home')->with('status', 'emergency')->with('emp_id',$emp_id);
            return response()->json(['status' => 'success']);
        } catch (\Exception $e) {
            // Rollback and then redirect
            // back to form with errors
            DB::rollback();
            /*return redirect('home')
                ->withErrors( $e->getMessage() )
                ->withInput();*/

            return response()->json(['status' => 'error', 'error' => $e->getMessage()]);
        }


    }

    public function create_education(Request $request)
    {
        $emp_id = hash('sha256', request('cnic'));


        $validator = Validator::make($request->all(), [
            'primary_school' => 'required',
            'primary_date' => 'required',
            'secondary_school' => 'required',
            'secondary_date' => 'required',
            'tertiary_school' => 'nullable',
            'tertiary_date' => 'nullable',
            'profession' => 'required',

        ]);


        if ($validator->fails()) {
            return response()->json(['status' => 'val_errors', 'errors' => $validator->errors()->all()]);
        }


        try {


            DB::beginTransaction();
            Employee::where('emp_id', $emp_id)->update([
                'primary_school' => request('primary_school'),
                'primary_date' => request('primary_date'),
                'secondary_school' => request('secondary_school'),
                'secondary_date' => request('secondary_date'),
                'tertiary_school' => request('tertiary_school'),
                'tertiary_date' => request('tertiary_date'),
                'profession' => request('profession'),
            ]);

            $emp = Employee::find($emp_id);


            $emp->status()->update(['education' => 'Y']);

            //dd($request->all();

            DB::commit();

            // dd($experience);
            //return redirect('home')->with('status', 'emergency')->with('emp_id',$emp_id);
            return response()->json(['status' => 'success']);
        } catch (\Exception $e) {
            // Rollback and then redirect
            // back to form with errors
            DB::rollback();
            /*return redirect('home')
                ->withErrors( $e->getMessage() )
                ->withInput();*/

            return response()->json(['status' => 'error', 'error' => $e->getMessage()]);
        }


    }
    public function create_experience2(Request $request)

    {

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
                'organization1' => request('organization1'),
                'position1' => request('position1'),
                'from1' => request('from1'),
                'to1' => request('to1'),
                'organization2' => request('organization2'),
                'position2' => request('position2'),
                'from2' => request('from2'),
                'to2' => request('to2'),
                'organization3' => request('organization3'),
                'position3' => request('position3'),
                'from3' => request('from3'),
                'to3' => request('to3'),
                'organization4' => request('organization4'),
                'position4' => request('position4'),
                'from4' => request('from4'),
                'to4' => request('to4'),
                'organization5' => request('organization5'),
                'position5' => request('position5'),
                'from5' => request('from5'),
                'to5' => request('to5'),
            ]];

            


            DB::beginTransaction();

            $emp = Employee::find($emp_id);



            $emp->experience();

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



    public function create_experience(Request $request)

    {
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
                'organization1' => request('organization1'),
                'position1' => request('position1'),
                'from1' => request('from1'),
                'to1' => request('to1'),
                'organization2' => request('organization2'),
                'position2' => request('position2'),
                'from2' => request('from2'),
                'to2' => request('to2'),
                'organization3' => request('organization3'),
                'position3' => request('position3'),
                'from3' => request('from3'),
                'to3' => request('to3'),
                'organization4' => request('organization4'),
                'position4' => request('position4'),
                'from4' => request('from4'),
                'to4' => request('to4'),
                'organization5' => request('organization5'),
                'position5' => request('position5'),
                'from5' => request('from5'),
                'to5' => request('to5'),
                
            ]];

            //array_push($experience,$experience1);
            // if (strlen(trim(request('organization2'))) > 0 and strlen(trim(request('position2'))) > 0 and
            //     strlen(trim(request('from2'))) > 0 and strlen(trim(request('to2'))) > 0) {

            //     $experience2 = [
            //         'employee_emp_id' => $emp_id,
            //         'organization2' => request('organization2'),
            //         'position2' => request('position2'),
            //         'from2' => request('from2'),
            //         'to2' => request('to2')
            //     ];

            //     array_push($experience, $experience2);

            // }

            // if (strlen(trim(request('organization3'))) > 0 and strlen(trim(request('position3'))) > 0 and
            //     strlen(trim(request('from3'))) > 0 and strlen(trim(request('to3'))) > 0) {
            //     $experience3 = [
            //         'employee_emp_id' => $emp_id,
            //         'organization' => request('organization3'),
            //         'position' => request('position3'),
            //         'from' => request('from3'),
            //         'to' => request('to3')
            //     ];

            //     array_push($experience, $experience3);

            // }

            // if (strlen(trim(request('organization4'))) > 0 and strlen(trim(request('position4'))) > 0 and
            //     strlen(trim(request('from4'))) > 0 and strlen(trim(request('to4'))) > 0) {
            //     $experience4 = [
            //         'employee_emp_id' => $emp_id,
            //         'organization' => request('organization4'),
            //         'position' => request('position4'),
            //         'from' => request('from4'),
            //         'to' => request('to4')
            //     ];

            //     array_push($experience, $experience4);
            // }

            // if (strlen(trim(request('organization5'))) > 0 and strlen(trim(request('position5'))) > 0 and
            //     strlen(trim(request('from5'))) > 0 and strlen(trim(request('to5'))) > 0) {

            //     $experience5 = [
            //         'employee_emp_id' => $emp_id,
            //         'organization' => request('organization5'),
            //         'position' => request('position5'),
            //         'from' => request('from5'),
            //         'to' => request('to5')
            //     ];

            //     array_push($experience, $experience5);
            // }


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


    public function create_physical(Request $request)
    {
        $emp_id = hash('sha256', request('cnic'));


        $validator = Validator::make($request->all(), [
            'cnic' => 'required',
            'height' => 'required',
            'weight' => 'required',
            'hair_eye_color' => 'required',
            'dissabilities' => 'nullable'
        ]);


        if ($validator->fails()) {
            return response()->json(['status' => 'val_errors', 'errors' => $validator->errors()->all()]);
        }


        try {


            DB::beginTransaction();
            Employee::where('emp_id', $emp_id)->update([
                'height' => request('height'),
                'weight' => request('weight'),
                'hair_eye_color' => request('hair_eye_color'),
                'dissabilities' => request('disabilities'),
            ]);

            $emp = Employee::find($emp_id);


            $emp->status()->update(['physical' => 'Y']);

            //dd($request->all();

            DB::commit();

            // dd($experience);
            //return redirect('home')->with('status', 'emergency')->with('emp_id',$emp_id);
            return response()->json(['status' => 'success']);
        } catch (\Exception $e) {
            // Rollback and then redirect
            // back to form with errors
            DB::rollback();
            /*return redirect('home')
                ->withErrors( $e->getMessage() )
                ->withInput();*/

            return response()->json(['status' => 'error', 'error' => $e->getMessage()]);
        }


    }

    public function create_medical(Request $request)
    {
        $emp_id = hash('sha256', request('cnic'));


        $validator = Validator::make($request->all(), [
            'cnic' => 'required',
            'medication' => 'nullable',
            'illness' => 'nullable'
        ]);


        if ($validator->fails()) {
            return response()->json(['status' => 'val_errors', 'errors' => $validator->errors()->all()]);
        }


        try {


            DB::beginTransaction();
            Employee::where('emp_id', $emp_id)->update([
                'medication' => request('medication'),
                'illness' => request('illness')]);

            $emp = Employee::find($emp_id);


            $emp->status()->update(['medical' => 'Y']);


            DB::commit();


            return response()->json(['status' => 'success']);
        } catch (\Exception $e) {
            // Rollback and then redirect
            // back to form with errors
            DB::rollback();

            return response()->json(['status' => 'error', 'error' => $e->getMessage()]);
        }


    }

    public function create_witness2(Request $request)
    {

        $emp_id = hash('sha256', request('cnic'));


        $validator = Validator::make($request->all(), [
            'cnic' => 'required',
            'witness1_name' => 'required',
            'witness1_cnic' => 'required',
            'witness1_present_address' => 'required',
            'witness1_permanent_address' => 'required',
            'witness2_name' => 'required',
            'witness2_cnic' => 'required',
            'witness2_present_address' => 'required',
            'witness2_permanent_address' => 'required',
        ]);


        if ($validator->fails()) {
            return response()->json(['status' => 'val_errors', 'errors' => $validator->errors()->all()]);
        }

        try{

            $emp = Employee::find($emp_id);

            DB::beginTransaction();

            $emp->witness()[
                [

                    'employee_emp_id' => $emp_id,
                    'witness1_name' => request('witness1_name'),
                    'witness1_cnic' => request('witness1_cnic'),
                    'witness1_present_address' => request('witness1_present_address'),
                    'witness1_permanent_address' => request('witness1_permanent_address'),
                    'witness2_name' => request('witness2_name'),
                    'witness2_cnic' => request('witness2_cnic'),
                    'witness2_present_address' => request('witness2_present_address'),
                    'witness2_permanent_address' => request('witness2_permanent_address'),
                ]
                

                    
                
            ];

            $emp->status()->update(['witness' => 'Y']);



            DB::commit();

            return response()->json(['status' => 'success']);

        }catch (\Exception $e){

            DB::rollback();

            return response()->json(['status' => 'error', 'error' => $e->getMessage()]);
        }




    }




    public function create_witness(Request $request)
    {

        $emp_id = hash('sha256', request('cnic'));


        $validator = Validator::make($request->all(), [
            'cnic' => 'required',
            'witness1_name' => 'required',
            'witness1_cnic' => 'required',
            'witness1_present_address' => 'required',
            'witness1_permanent_address' => 'required',
            'witness2_name' => 'required',
            'witness2_cnic' => 'required',
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
                    'witness1_name' => request('witness1_name'),
                    'witness1_cnic' => request('witness1_cnic'),
                    'witness1_present_address' => request('witness1_present_address'),
                    'witness1_permanent_address' => request('witness1_permanent_address'),
                    'witness2_name' => request('witness2_name'),
                    'witness2_cnic' => request('witness2_cnic'),
                    'witness2_present_address' => request('witness2_present_address'),
                    'witness2_permanent_address' => request('witness2_permanent_address'),
                ],
                
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
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

        $emp_id = hash('sha256', request('cnic'));
        $employee = Employee::where('emp_id', $emp_id)->get();
        $experience = Experience::where('employee_emp_id', $emp_id)->get();
        $witness = Witness::where('employee_emp_id', $emp_id)->get();
        $status = Status::where('employee_emp_id', $emp_id)->get();

        //dd($employee->dump());

        if (!$status->isEmpty()) {




            if ($status->pluck('emergency')[0] == 'N' || $status->pluck('education')[0] == 'N' || $status->pluck('physical')[0] == 'N' ||
                $status->pluck('experience')[0] == 'N' || $status->pluck('medical')[0] == 'N' || $status->pluck('witness')[0] == 'N') {
                return view('home', ['cnic' => $request['cnic'],'statusses'=>$status[0]]);
            }


        }


        if ($employee->isEmpty())
            return view('search', ['no_data' => 'No Data Found']);
        else
            return view('search', ['employee' => $employee, 'experience' => $experience, 'witness' => $witness]);
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
