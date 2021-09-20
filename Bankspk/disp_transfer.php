<html>
<head>
<link rel="stylesheet" href="table1.css"> 
</head>
<body>
<br>
<div class="home" align="right">
<div id="logo">
    <img src="spk.jfif" width="35" height="35">
    </div>
<b><input type="button" id="btn1" onclick="location.href='Main_Bk.html';" value="Home" /></b>
</div>
<h1 align="center"><b>Transaction History</b></h1>
<table>
<tr>
<th>Sender Name</th>
<th>Recipient Name</th>
<th>Amount_Transfered</th>

</tr>
<?php
  $con=mysqli_connect("localhost","root","","bank");
    mysqli_select_db($con,'bank');

    $sql="SELECT * from transfer";
    $records=mysqli_query($con,$sql);
    

    while($row=mysqli_fetch_array($records)){
           echo "<tr>";
	   echo "<td >".$row['sender_name']."</td>";
	   echo "<td>".$row['recipient_name']."</td>";
            echo "<td>".$row['amount_transfered']."</td>";
}
?>
</table>
</body>
</html>