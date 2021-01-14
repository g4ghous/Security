<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

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
      font-size: 14px;
      
}

.align-sec{
      text-align: right !important;
}

/* .align-sec .align_sign{
      border-bottom: 1px solid black;
      width:50%;
      float: right !important;
} */
/* .box{
    border:1px solid black;
    padding:5px;  
} */
.border-remove{
    border-style: none !important;
}
table, td, th {
   /* border: 1px solid black; */
   text-align:center;
}

td, th {
    border: 1px solid black;
    text-align: left;
    padding: 8px;
}

.tab2{
    
    display: inline-block; 
    margin-left: 140px; 
}

.tab1{
    
    display: inline-block; 
    margin-left: 40px; 
}
</style>


<div class="font">
    <div class="edit">
        <img src="http://airbornsecurity.pk/public/images/logo.png">
        <h3> <b>UNIFORM ISSUANCE VOUCHER</b> </h3>
    </div>

    <div style="margin-left:20px">

        <h4>ZISS NO.:____________<span class="tab1"></span> Name: <u>{{$data->name}}</u> <span class="tab1"></span> Location___________________</h4>
        <h4>Date Issued:_______________ <span class="tab1"></span> Date Received:___________________</h4>


        <table style="width:100%">
        
            <!-- <th class="border-remove" colspan="2"></th>
            <th colspan="4">Sr.No.</th>
            <th colspan="4">Name Of Item</th> -->

        <tr>
            <th>Sr.No.</th>
            <th>Name Of Item</th>
            <th>Date</th>
            <th>Qty.</th>
            <th>New</th>
            <th>Used</th>
            <th>Date</th>
            <th>Qty.</th>
            <th>New</th>
            <th>Used</th>
            <th>Remarks</th>

        </tr>
        <tr>
            <td>1</td>
            <td>Pants</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            
        </tr>
        <tr>
            <td>2</td>
            <td>Shirts</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>3</td>
            <td>T.Shirt</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            
        </tr>
        <tr>
            <td>4</td>
            <td>Belt,Waist</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            
        </tr>
        <tr>
            <td>5</td>
            <td>Shoes DMS</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>6</td>
            <td>Long Boots</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>7</td>
            <td>Cap,Jockey</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>8</td>
            <td>Barred Cap</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>9</td>
            <td>Shalwar</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>10</td>
            <td>Qameez</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>11</td>
            <td>Whistle + Dori</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>12</td>
            <td>Sup Patti</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
                
        <tr>
            <td>13</td>
            <td>Anklets</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>14</td>
            <td>Scarf</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>15</td>
            <td>Security Strips</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>16</td>
            <td>Jackets/Jersey</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>17</td>
            <td>Commando Pant</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>18</td>
            <td>Company Card</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        </table>
        <br>
        <br>
        <h4>Issued by:______________ <span class="tab2"></span> Received by:_______________</h4>
    </div>
     

</div>