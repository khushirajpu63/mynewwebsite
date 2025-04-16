<?php
$servername ="localhost";
$username = "root";
$password ="";
$dbname ="flower";
// create connection 
$conn = new mysqli ($servername ,$username ,$password,$dbname);
// check connection 
if ($conn->connect_error){
    die("connecvtion failed".$conn->connect_error);
}
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get form data
  $fname = $_POST["fname"];
  $lname = $_POST["lname"];
  $mail = $_POST["mail"];
  $pass = $_POST["pass"];
  // insert into data
  $sql ="INSERT INTO users(fname , lname, mail, pass)VALUES('$fname','$lname','$mail','$pass')";
  if ($conn->query($sql)==true){
    echo"register successfull";
  }
  else{
    echo"error".$sql."<br>".$conn->error;
  }
  }
$conn->close();

?>
