<style>
.edit{
      display:flex;
      /* justify-content:center;
      align-items:center;
      background-color:red; */
      
}

.edit img{
      width:80px;
      margin-left:50px;
     
}

.edit h3{
      margin-left:30%;
}

.font{
      font-family: Roboto;
      
}

</style>


<div class="font">
<div class="edit">
<img src="http://airbornsecurity.pk/public/images/logo.png">
<h3> <b>APPLICATION FORM FOR ENROLLMENT</b> </h3>
</div>
<!-- <button><a href="{{action('EmployeeCheck@pdfview', $data->emp_id)}}">Download PDF</a></button> -->
<div style="margin-left:50px">
      
      <h3>Date : <u>{{$data->date}}</u></h3>
      <h3>Apply For :<u>{{$data->apply_for}}</u> </h3>
      <h3>Background Information :</h3>
      <h3>Name in full (as per CNIC): <u>{{$data->name}}</u></h3>
      <h3>CNIC No. : <u> {{$data->cnic}}</u>  Sex : <u> {{$data->gender}}</u></h3>
      <!-- <h3></u></h3> -->
      <h3>Date of Birth : <u> {{$data->dob}}</u> Place of Birth : <u> {{$data->birth_place}}</u> Contact No. : <u> {{$data->contact}}</h3>
      <!-- <h3></h3> -->
      <!-- <h3></u></h3> -->
      <h3>Religion : <u> {{$data->religion}}</u></h3>
      <h3>Nationality : <u> {{$data->nationality}}</u></h3>
      <h3>Blood Group : <u> {{$data->blood_group}}</u> Cast : <u> {{$data->cast}}</u></h3>
      <!-- <h3></h3> -->
      <h3>Martial Status : <u> {{$data->marital_status}}</u> Spouse : <u> {{$data->spouse}}</u></h3>
      <h3></h3>
      <h3>Current Address : <u>{{$data->address_present}}</u></h3>
      <h3>Permanent Address : <u>{{$data->address_permanent}}</u></h3>

      <br>
      <h3>In Case of Emergency (Next of Kin): <u> {{$data->next_of_kin}}</u></h3>
      <!-- <h3></h3> -->
      <h3>Contact No :<u>{{$data->kin_contact}}</u></h3>
      <h3>Address : <u>{{$data->kin_address}}</u></h3>

      <br>
      <h3 >Education Information :</h3>
      <h3>Primary / Secondary Education (Date of Completion) : <u> {{$data->primary_school}} ({{$data->primary_date}}) ; {{$data->secondary_school}} ({{$data->secondary_date}})</u></h3>
      <!-- <h3>Date : <u></u></h3>
      <h3>Secondary Education : <u></u></h3>
      <h3>Date : <u></u></h3> -->
      <h3>Tertiary Education (If any) : <u> {{$data->tertiary_school}}({{$data->tertiary_date}})</u></h3>
      <!-- <h3>Date : <u></u></h3> -->
      <h3>Profession : <u>{{$data->profession}}</u></h3> 


      <h3 >Experience :</h3>
<table style="width:100%;text-align:center";>
      <tr>
      <th>Organization</th>
      <th>Position</th>
      <th>From </th>
      <th>To</th>
      </tr>
      <tr>
      <td>{{$data->organization1}}</td>
      <td>{{$data->position1}}</td>
      <td>{{$data->from1}}</td>
      <td>{{$data->to1}}</td>
      </tr>
      <tr>
      <td>{{$data->organization2}}</td>
      <td>{{$data->position2}}</td>
      <td>{{$data->from2}}</td>
      <td>{{$data->to2}}</td>
      </tr>
      <tr>
      <td> {{$data->organization3}}</td>
      <td> {{$data->position3}}</td>
      <td> {{$data->from3}}</td>
      <td> {{$data->to3}}</td>
      </tr>
      <tr>
      <td> {{$data->organization4}}</td>
      <td> {{$data->position4}}</td>
      <td> {{$data->from4}}</td>
      <td> {{$data->to4}}</td>
      </tr>
      <tr>
      <td> {{$data->organization5}}</td>
      <td> {{$data->position5}}</td>
      <td> {{$data->from5}}</td>
      <td>{{$data->to5}}</td>
      </tr>
      
      
      
</table>

     
      
      <br>
      <h3 >Physical Information : </h3>
      <h3>Height : <u> {{$data->height}}</u> Weight : <u> {{$data->weight}}</u> KG          Hair/Eye Color : <u> {{$data->hair_eye_color}}</u></h3>
      <!-- <h3></h3>
      <h3></h3> -->
      <h3>Dissabilities (If any) : <u>{{$data->dissabilities}}</u></h3>
      <br>

      <h3>Medical Information :</h3>
      <h3> Applicant is on any Medication : <u> {{$data->medication}}</u></h3>
      <h3> Suffering from any Illness (If so, give details) : <u> {{$data->illness}}</u></h3>
      <br>

      <h3 >Witness Form : </h3>
      <h3>Witness 1 : </h3>
      <h3>Name : <u> {{$data->witness1_name}}</u></h3>
      <h3>CNIC : <u> {{$data->witness1_cnic}}</u></h3>
      <h3>Current Address : <u> {{$data->witness1_present_address}}</u></h3>
      <h3>Permanent Address : <u> {{$data->witness1_permanent_address}}</u></h3>

      <h3>Witness 2 : </h3>
      <h3>Name : <u> {{$data->witness2_name}}</u></h3>
      <h3>CNIC : <u> {{$data->witness2_cnic}}</u></h3>
      <h3>Current Address : <u> {{$data->witness2_present_address}}</u></h3>
      <h3>Permanent Address : <u> {{$data->witness2_permanent_address}}</u></h3>
</div>
</div>