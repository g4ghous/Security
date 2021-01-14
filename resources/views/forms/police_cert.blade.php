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

.align-sec h4{
      text-align: right !important;
}

.align-left{
    margin-left: 70px;
      
}
.align-left-a{
    margin-left: 38px;
      
}

.body{
    margin-left:50px;
}
</style>
<div class="font">
<div class="edit">
<img src="http://airbornsecurity.pk/public/images/logo.png">
<h3 > <b>POLICE CHARACTER FORM</b> </h3>
</div>
<div class="body" >
      
      <h4>DATE: <u>{{$data->date}}</u></h4>
      <h4>TO : STATION HOUSE OFFICER,</h4> 
      <h4 class="align-left-a"> POLICE STATION,</h4>
      <h4 class="align-left-a"> KARACHI, </h4>
      <h4>SIR :        VERIFCATION OF CHARACTER & ANTECEDENTS</h4>
      <h4>DEAR SIR,</h4>
      <div class="align-left">
      <h4>NAME IN FULL (as per CNIC): <u>{{$data->name}}</u></h4>
      <h4>DATE OF BIRTH : <u> {{$data->dob}}</u></h4>
      <h4>CNIC No. : <u> {{$data->cnic}}</u> </h4>
      <h4>DATE OF ISSUE :________________</h4>
      <h4>DATE OF EXPIRY :_______________</h4>
      </div>
      <p>HAS APPLIED FOR A JOB IN THIS COMPANY.</p>
      <p>HIS APPOINTMENT SHALL BE CONFIRMED AFTER VERIFICATION OF HIS CHARACTER AND ANTECEDENTS BY YOUR OFFICE.</p>
      <p>YOUR ACTION SHALL BE HIGHLY APPRECIATED</p>
      <br>
      
      <div class="align-sec">
      <h4>SHO ________________________________</h4>
      <br>
      <h4>Police Station _________________________</h4>
      <br>
      <h4>P.S Stamp ___________________________</h4>
      </div>
      <h4>____________________</h4>
      <h4> Manager Operations </h4>
</div>
</div>