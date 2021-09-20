<?php
   $con=mysqli_connect("localhost", "root","","bank");
   $sname=$_POST['sname'];
   $sacc=$_POST['sacc'];
   $rname=$_POST['rname'];
   $racc=$_POST['racc'];
   $amt=$_POST['amt'];
   if($sname=="" || $sacc=="" || $rname=="" || $racc=="" || $amt=="")
   {  

         header("Location:transfer.php?error=Empty Fields not allowed");
         exit();
           
   }
   
   $n="select * from customer where name='$sname' ";
   $nc = mysqli_query($con,$n);
   $n1=mysqli_fetch_array($nc);

   $ch="select * from customer where name='$rname'";
   $check = mysqli_query($con,$ch);
   $h1=mysqli_fetch_array($check);
  
   if(($amt)<0)
   {
       header("Location: transfer.php?error=Invalid Amount");
        exit();
   }
   else if(($amt)>$n1['balance'])
   {
       header("Location: transfer.php?error=Insufficint balance");
        exit();
   }

   else
   {
      $scb = $n1['balance']-$amt;
   
      $s ="update customer set balance='$scb' where account_no='$sacc'";
      $sc = mysqli_query($con,$s);
   
      $rcb = $h1['balance']+$amt;
      $r ="update customer set balance='$rcb' where account_no='$racc'";
      $rc = mysqli_query($con,$r);
   


        $sql = "INSERT INTO transfer(sender_name,recipient_name,amount_transfered) 
               VALUES ('$sname', '$rname', '$amt')";

               $rs = mysqli_query($con,$sql);
       if($rs)
       {
        header("Location: transfer.php?error=Transaction successfull");
        exit();
       }
       else
       {
           header("Location:transfer.php?Check your connection !!");
           exit();
       }
   }

?>