<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$email = $_POST["email"];
$passwordA = $_POST["passwordA"];

session_start();



if($email == ""){
  $_SESSION["signup-status"] = "<font color = \"red\"> Empty email </font>";
  header("Location: sign.php");
    return false;
}
else if($passwordA == ""){
  $_SESSION["signup-status"] = "<font color = \"red\"> Empty password </font>";
  header("Location: sign.php");
    return false;
}

// insert into database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blog";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT * FROM users WHERE email = '$email'";
// echo $sql;
$result = $conn->query($sql);

if ($result->num_rows == 0) {
  $_SESSION["signup-status"] = "<font color = \"red\"> Invalid email </font>";
  header("Location: sign.php");
  return false;
}
elseif ($result->num_rows > 1) {
  $_SESSION["signup-status"] = "<font color = \"red\"> Database error: more than 1 entry </font>";
  header("Location: sign.php");
    return false;
}

$row = $result->fetch_assoc();

// to execute on password verification
if($row['password'] == $passwordA){
    if($row['isadmin'] == 1){
        $_SESSION["login-status"] = 2; 
        header("Location: ./display-posts.php");
    }
    else{
        $_SESSION["login-status"] = 1;
        header("Location: ./display-posts.php"); 
    }
}
else{
  $_SESSION["signup-status"] = "<font color = \"red\"> Incorrect password </font>";
  header("Location: sign.php");
    return false;
}

mysqli_close($conn);

?>