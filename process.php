

<?php
try {
  $hostname="localhost";
   $username="root";
    $password="";
  	$dbname="login";
  	 $db_server=mysqli_connect($hostname, $username, $password,$dbname);
  	 if (!$db_server) die("not connected". mysql_error());


  $username=$_POST['user'];
  $password=$_POST['pass'];

  $username= stripcslashes($username);
  $password= stripcslashes($password);
  //$username= mysql_real_escape_string($username);
  //$password= mysql_real_escape_string($password);


  //mysqli_connect("localhost", "root", "", "login");
  //mysqli_select_db();


  $results = mysqli_query($db_server,"select * from users where username = '$username'  and password = '$password'")
  			or die("Failed to query database".mysqli_error());

  $row = mysqli_fetch_assoc($results);
  //$row['username'] auto einai anti to "gg"
  //$row ['password']
  if ("gg" == $username && "gn" == $password){
    echo "Login_Succesfully!  Welcome " .$username;
  header("Location: account.php");

  //.$row ['username']
  	}else{
  	echo "Failed to Login!";
    header("Location: login.php");
  	}
} catch (\Exception $e) {
  echo "A PROBLEM OCCURED!";
  header("Location: login.php");
}
?>
