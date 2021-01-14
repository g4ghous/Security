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
.align-sec{
      text-align: right !important;
}
</style>


<div class="font">
<div class="edit">
<img src="http://airbornsecurity.pk/public/images/logo.png">
<h3> <b>Witness Form</b> </h3>
</div>

<div style="margin-left:50px">

<!-- <h3 >Witness Form : </h3> -->
      <h3 class="align-sec"> Date: ___________</h3>
      <h3>Employee Name: <u> {{$data->name}}</u></h3>
      <h3>Father Name: _________________________</h3>
      <h3>CNIC NO: <u> {{$data->cnic}}</u></h3>
      <h3 style="text-align:center">Witness 1 : </h3>
      <h3>Name Of Witness: <u> {{$data->witness1_name}}</u></h3>
      <h3>CNIC No.: <u> {{$data->witness1_cnic}}</u></h3>
      <h3>Current Address : <u> {{$data->witness1_present_address}}</u></h3>
      <h3>Permanent Address : <u> {{$data->witness1_permanent_address}}</u></h3>
      <h3>Date:_______________</h3>
      <br>
      <br>
      <h3 class="align-sec">____________________</h3>
      <h3 class="align-sec">Signature of Witness</h3>

      <h3 style="text-align:center">Witness 2 : </h3>
      <h3>Name of Witness : <u> {{$data->witness2_name}}</u></h3>
      <h3>CNIC No.: <u> {{$data->witness2_cnic}}</u></h3>
      <h3>Current Address : <u> {{$data->witness2_present_address}}</u></h3>
      <h3>Permanent Address : <u> {{$data->witness2_permanent_address}}</u></h3>
      <h3>Date:_______________</h3>
      <br>
      <br>
      <h3 class="align-sec">____________________</h3>
      <h3 class="align-sec">Signature of Witness</h3>



</div>
</div>