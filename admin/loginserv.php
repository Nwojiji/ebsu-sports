<?php
$error=''; //Variable to Store error message;
if(isset($_POST['submit'])){
 if(empty($_POST['user']) || empty($_POST['pass'])){
 $error = '<script> alert("invalid username and password"); </script>';
 }
 else
 {
 //Define $user and $pass
 $user=$_POST['user'];
 $pass=$_POST['pass'];
 //Establishing Connection with server by passing server_name, user_id and pass as a patameter
 $conn = mysqli_connect("localhost", "root", "");
 //Selecting Database
 $db = mysqli_select_db($conn, "sports");
 //sql query to fetch information of registerd user and finds user match.
 $query = mysqli_query($conn, "SELECT * FROM userpass WHERE pass='$pass' AND user='$user'");
 
 $rows = mysqli_num_rows($query);
 if($rows == 1){
 header("Location: index.php"); // Redirecting to other page
 }
 else
 {
 $error = '<script> alert("invalid username and password <br> Please contact the Admin"); </script>';
 }
 mysqli_close($conn); // Closing connection
 }
}
 
?>