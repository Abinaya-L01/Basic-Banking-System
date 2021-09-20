<?php
   $con=mysqli_connect("localhost", "root","","bank");
   $name=$_POST['name'];
   $registerno=$_POST['registerno'];
   $message=$_POST['message'];
   $subject=$_POST['subject'];

   
   if( $name=="" || $registerno=="" || $subject=="")
   {
       echo "Empty fields not allowed";
   }
     if(!preg_match('/^[A-z0-9_\-]+[@][A-z0-9_\-]+([.][A-z0-9_\-]+)+[A-z.]{2,4}$/', $registerno)){
       echo '<script>alert("Invalid Email !!")</script>';
       header("refresh:0; url=contact1.php");
         exit();  
}
   else{
       $sql = "INSERT INTO cont ( Name, Email,Message,Subject) 
               VALUES ('$name', '$registerno', '$subject','$message')";

       $rs = mysqli_query($con,$sql);
       if($rs)
       {
        header("Location: contact1.php?error=Message sent !!");
        exit();
       }
       else
       {
        header("Location: contact1.php?error=Error 404 !!");
        exit();
       }
   }

?>