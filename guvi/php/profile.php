<?php 

$a=mysqli_connect("localhost:3308","root","","guvi");
$stmt_ins=$a->prepare("insert into profile(email,dob,age,contact)values (?,?,?,?)");
$stmt_ins->bind_param("ssss",$email,$dob,$age,$contact);
$email=$_POST["email"];
$dob=$_POST["dob"];
$age=$_POST["age"];
$contact=$_POST["age"];

   $stmt_ins->execute();
   $stmt_ins->close();
   ?>