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
<h3> <b>Education Information</b> </h3>
</div>

<div style="margin-left:50px">


<!-- <h3 >Education Information :</h3> -->
      <h3>Primary / Secondary Education (Date of Completion) : <u> {{$data->primary_school}} ({{$data->primary_date}}) ; {{$data->secondary_school}} ({{$data->secondary_date}})</u></h3>
      <!-- <h3>Date : <u></u></h3>
      <h3>Secondary Education : <u></u></h3>
      <h3>Date : <u></u></h3> -->
      <h3>Tertiary Education (If any) : <u> {{$data->tertiary_school}}({{$data->tertiary_date}})</u></h3>
      <!-- <h3>Date : <u></u></h3> -->
      <h3>Profession : <u>{{$data->profession}}</u></h3> 


</div>
</div>