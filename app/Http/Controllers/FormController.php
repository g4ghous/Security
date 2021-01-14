<?php

namespace App\Http\Controllers;
use App\Employee;
use App\Experience;
use App\Witness;
use PDF;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;

use Illuminate\Http\Request;

class FormController extends Controller
{
    //

    public function appform($id){


        $data= Employee::Findorfail($id);

        $data = DB::table('employees')
        ->join('experiences','experiences.employee_emp_id','=','employees.emp_id')
        ->join('witnesses','witnesses.employee_emp_id','=','employees.emp_id')
       ->first();


        $pdf = PDF::loadview('forms.pdfview',compact('data'));
        return $pdf->download("Application_Form.pdf");
        // $output = $pdf->output();
        // // return $pdf->stream("Application_Form.pdf", array("Attachment" => false));
        // // exit(0);
        // return new Response($output, 200, array(
        //     'Content-Type' => 'application/pdf',
        //     'Content-Disposition' =>  'inline; filename="Application_Form.php"',
        
        // ));


    }

    public function bgform($id){


        $data= Employee::Findorfail($id);

        // view()->share('employee',$data);
        $pdf = PDF::loadview('forms.bg',compact('data'));
        return $pdf->download("Background_Information.pdf");

    }

    public function emergencyform($id){

        $data= Employee::Findorfail($id);
        $pdf = PDF::loadview('forms.emergence',compact('data'));
        return $pdf->download("Emerengency_Information.pdf");

    }

    public function educationform($id){

        $data= Employee::Findorfail($id);
        $pdf = PDF::loadview('forms.education',compact('data'));
        return $pdf->download("Education_Information.pdf");

    }

    public function experienceform($id){

        // $data= Experience::Findorfail($id);
        // $pdf = PDF::loadview('forms.experience',compact('data'));
        // return $pdf->download();

        $data = DB::table('employees')
        ->join('experiences','experiences.employee_emp_id','=','employees.emp_id')
        ->join('witnesses','witnesses.employee_emp_id','=','employees.emp_id')
       ->first();

        $pdf = PDF::loadview('forms.experience',compact('data'));
        return $pdf->download("Experience_Information.pdf");

    }

    public function physicalform($id){

        $data= Employee::Findorfail($id);
        $pdf = PDF::loadview('forms.physical',compact('data'));
        return $pdf->download("Physical_Information.pdf");

    }

    public function medicalform($id){

        $data= Employee::Findorfail($id);
        $pdf = PDF::loadview('forms.medical',compact('data'));
        return $pdf->download("Medical_Information.pdf");

    }

    public function witnessform($id){

        // $data= Witness::Findorfail($id);
        // $pdf = PDF::loadview('forms.witness',compact('data'));
        // return $pdf->download();


        $data = DB::table('employees')
        ->join('experiences','experiences.employee_emp_id','=','employees.emp_id')
        ->join('witnesses','witnesses.employee_emp_id','=','employees.emp_id')
       ->first();

        $pdf = PDF::loadview('forms.witness',compact('data'));
        return $pdf->download("Witness_Information.pdf");

    }

    public function phycert($id){

        $data= Employee::Findorfail($id);
        $pdf = PDF::loadview('forms.physical_cert',compact('data'));
        return $pdf->download("Physical_Certificate.pdf");

    }

    public function polcert($id){

        $data= Employee::Findorfail($id);
        $pdf = PDF::loadview('forms.police_cert',compact('data'));
        return $pdf->download("Police_Certificate.pdf");

    }

    public function resignform($id){

        $data= Employee::Findorfail($id);
        $pdf = PDF::loadview('forms.resign',compact('data'));
        return $pdf->download("Resignation_Form.pdf");

    }

    public function clear_cert($id){

        $data= Employee::Findorfail($id);
        $pdf = PDF::loadview('forms.clearance',compact('data'));
        return $pdf->download("Clearance_Certificate.pdf");

    }

    public function discharge($id){

        $data= Employee::Findorfail($id);
        $pdf = PDF::loadview('forms.discharge',compact('data'));
        return $pdf->download("Discharge_Slip.pdf");

    }

    public function uniform_issue($id){

        $data= Employee::Findorfail($id);
        $pdf = PDF::loadview('forms.uniform_issue',compact('data'));
        return $pdf->download("Uniform_Issue.pdf");

    }

    public function show ($id){
        $data= Employee::Findorfail($id);
        return view ('forms.witness',compact('data'));
    }
}
