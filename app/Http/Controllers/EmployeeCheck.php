<?php

namespace App\Http\Controllers;
use App\Employee;
use App\Experience;
use App\Witness;
use PDF;
use Illuminate\Support\Facades\DB;
// use Haruncpi\LaravelIdGenerator\IdGenerator;

use Illuminate\Http\Request;

class EmployeeCheck extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return response()->json(Employee::get(),200);
        $employees = Employee::latest()->paginate(10);
        return view('employee2',compact('employees'));
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id){
        $data = Employee::findorfail($id);
    
        return view('profile',compact('data'));

    }

    

    // public function pdfview($id) 
    // {
    //     // $user = Employee::Findorfail($id);
    //     // $pdfView = Employee::all($id);

    //     $data = DB::table('employees')
    //     ->join('experiences','experiences.employee_emp_id','=','employees.emp_id')
    //     ->join('witnesses','witnesses.employee_emp_id','=','employees.emp_id')
    //    ->first();

    //     $pdf = PDF::loadview('pdfview',compact('data'));
    //     return $pdf->stream();
    //     // $pdf = PDF::loadView('pdfview', ['pdfViews'=> $pdfView])->setPaper('a4','landscape');
    //     // return $pdf->download('report.pdf');
    //     // $user = Employee::find($id);
    //     // if(is_null($user)){
    //     //     return response()->json(['message' => 'Record not Found!'],404);
    //     // }
    //     // return response()->json($user,200);

    //     // return view('employee',compact('employee'));
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit()
    // {
    //     return view('edit');
    // }

    public function edit($id)
    {
        $datas= DB::table('employees')
         ->join('experiences','experiences.employee_emp_id','=','employees.emp_id')
         ->join('witnesses','witnesses.employee_emp_id','=','employees.emp_id')
         ->where('employees.emp_id','=',$id)
         ->get();
        // $data= DB::table('employees')
        //  ->join('experiences','experiences.employee_emp_id','=','employees.emp_id')
        //  ->join('witnesses','witnesses.employee_emp_id','=','employees.emp_id')
        // //  ->where('employees.emp_id','=',$id)
        //  ->first();
        // ->get()
        // ->toArray();
        // echo "<pre>";
        // print_r($data);
        
        // $data= Employee::Findorfail($id);
        // $data2= Experience::Findorfail($id);
        // $data3= Witness::Findorfail($id);
         return view('edit',compact('datas'));
    }        

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $emp_id)
    {
        
        $input_data=array(
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
            'illness' => request('illness'),

        );

        $input_data2=array(
            'witness1_name' => request('witness1_name'),
            'witness1_cnic' => request('witness1_cnic'),
            'witness1_present_address' => request('witness1_present_address'),
            'witness1_permanent_address' => request('witness1_permanent_address'),
            'witness2_name' => request('witness2_name'),
            'witness2_cnic' => request('witness2_cnic'),
            'witness2_present_address' => request('witness2_present_address'),
            'witness2_permanent_address' => request('witness2_permanent_address'),

        );

        $input_data3=array(
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

        );

            // 'witness_name' => request('witness1_name'),
            // 'cnic' => request('witness1_cnic'),
            // 'witness_present_address' => request('witness1_present_address'),
            // 'witness_permanent_address' => request('witness1_permanent_address'),
            // 'witness_name' => request('witness2_name'),
            // 'cnic' => request('witness2_cnic'),
            // 'witness_present_address' => request('witness2_present_address'),
            // 'witness_permanent_address' => request('witness2_permanent_address')

            // 'organization' => request('organization1'),
            // 'position' => request('position1'),
            // 'from' => request('from1'),
            // 'to' => request('to1'),
            

        

        Employee::whereemp_id($emp_id)->update($input_data);
        Witness::whereemployee_emp_id($emp_id)->update($input_data2);
        Experience::whereemployee_emp_id($emp_id)->update($input_data3);

        return redirect('/employee');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data= Employee::Findorfail($id);
        $data->delete();
        return redirect('/employee');
    }

    // public function generateId()
    // {
    //     $id = IdGenerator::generate(['table' => 'employees', 'length' => 9, 'prefix' =>'ABS-']);
    //     Employee:: table('employee')->insert(['gr_no'=>$id]);


    // }
}
