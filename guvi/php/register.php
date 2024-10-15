<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $query=$_POST['email'];
$a=mysqli_connect("localhost:3308","root","","guvi");
$sql="Select username from register where email LIKE ? ;";
$stmt=$a->prepare($sql);

$likequery='%'.$query.'%';
$bind= $stmt->bind_param('s',$likequery);

$exe=$stmt->execute();


$result=$stmt->get_result();

if($result->num_rows > 0){

    
 }
 else {


$stmt_ins=$a->prepare("insert into register(email,password,username)values (?,?,?)");
$stmt_ins->bind_param("sss",$email,$password,$username);
$email=$_POST["email"];
$password=$_POST["password"];
$username=$_POST["username"];

   $stmt_ins->execute();
   $stmt_ins->close();
 
 }
 

 $stmt->close();
}
?>
