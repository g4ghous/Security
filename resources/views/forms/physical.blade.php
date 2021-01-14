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
<h3> <b>Physical Information</b> </h3>
</div>

<div style="margin-left:50px">


<!-- <h3 > : </h3> -->

      
      <h3>Height : <u> {{$data->height}}</u> Weight : <u> {{$data->weight}}</u> KG          Hair/Eye Color : <u> {{$data->hair_eye_color}}</u></h3>
      <!-- <h3></h3>
      <h3></h3> -->
      <h3>Dissabilities (If any) : <u>{{$data->dissabilities}}</u></h3>


</div>
</div>