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

.align-sec h3{
      text-align: right !important;
}

.align-sec .align_sign{
      border-bottom: 1px solid black;
      width:50%;
      float: right !important;
}

</style>


<div class="font">
<div class="edit">
<img src="http://airbornsecurity.pk/public/images/logo.png">
<h3> <b>Physical Information</b> </h3>
</div>

<div style="margin-left:50px">


<!-- <h3 > : </h3> -->

      <h3>DATE: <u>{{$data->date}}</u></h3>
      <h4>I DO HEREBY CERTIFY THAT I HAVE EXAMINED MR. <u>{{$data->name}}</u></h4>
      <h4>A CANDIDATE FOR EMPLOYEE IN AIRBOURNE SECURITY SERVICES (PVT.) LTD. DEPARTMENT AND CANNOT DISCOVER THAT HE/SHE HAS ANY DISEASE, BODILY INFECTION</h4>
      <h4>I DO NOT CONSIDER THIS A DISQUALIFICATION FOR THE POST OF SECURITY GUARD AND HIS/HER AGE IS ACCORDING TO HIS/HER STATEMENT.</h4>
      <h4>HE/SHE HAS NORMAL DISTANT VISION AND HE/SHE IS FREE FROM COLOR BLINDNESS</h4>

      <h3>PHYSICAL MEASUREMENT:</h3>

      <h3>Height : <u> {{$data->height}}</u></h3> 
      <h3>Weight : <u> {{$data->weight}}</u> KG</h3> 
      <br> 
      <br>       
      <!-- <h3>Hair/Eye Color : <u> {{$data->hair_eye_color}}</u></h3> -->
      <!-- <h3></h3>
      <h3></h3> -->
      <!-- <h3>Dissabilities (If any) : <u>{{$data->dissabilities}}</u></h3> -->
      <div class="align-sec">
      <h3 class="align_sign"></h3>
      <h3>SIGNATURE OF MEDICAL OFFICER</h3>
      </div>
</div>
</div>