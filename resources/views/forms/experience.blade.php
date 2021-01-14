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
<h3> <b>Experience</b> </h3>
</div>

<div style="margin-left:50px">

<!-- <h3 >Experience :</h3> -->
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



</div>
</div>