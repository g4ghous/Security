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
<h3> <b>In Case of Emergency</b> </h3>
</div>

<div style="margin-left:50px">

<h3> (Next of Kin): <u> {{$data->next_of_kin}}</u></h3>
      <!-- <h3></h3> -->
      <h3>Contact No :<u>{{$data->kin_contact}}</u></h3>
      <h3>Address : <u>{{$data->kin_address}}</u></h3>



</div>
</div>