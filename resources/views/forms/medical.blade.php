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
<h3> <b>Medical Information </b> </h3>
</div>

<div style="margin-left:50px">


<!-- <h3>:</h3> -->
      <h3> Applicant is on any Medication : <u> {{$data->medication}}</u></h3>
      <h3> Suffering from any Illness (If so, give details) : <u> {{$data->illness}}</u></h3>


</div>
</div>