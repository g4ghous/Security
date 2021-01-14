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
<h3> <b>Background Information</b> </h3>
</div>

<div style="margin-left:50px">
      
      <h3>Date : <u>{{$data->date}}</u></h3>
      <h3>Apply For :<u>{{$data->apply_for}}</u> </h3>
      <!-- <h3>Background Information :</h3> -->
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

</div>
</div>