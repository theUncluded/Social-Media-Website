<?php
session_start(); 
$servername = "localhost";
$username = "chen";
$password = "wenxuan5538";
$dbname = "chen_";
$conn = new mysqli($servername, $username, $password, $dbname);
$usernameweb = $_POST['username'];
$passwordweb = $_POST['password'];
// retrieve hashed password for user with given username

$stmt = $conn->prepare("SELECT password AS pw FROM usersTable WHERE username = ?");
$stmt->bind_param("s", $usernameweb);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
if($row ){
    $hashed_password = $row['pw'];
    if(password_verify($passwordweb, $hashed_password)){
      $query = "SELECT userid FROM usersTable WHERE username = ?";
      $stmt = $conn->prepare($query);
      $stmt ->bind_param("s", $usernameweb);
      $stmt->execute();
      $result = $stmt->get_result();
      $row = $result->fetch_assoc();
      
    if ($row) {
      $_SESSION['userid'] = $row['userid'];
    }
      header("Location: loginsuccess.php");
    }
    else{
      header("Location: FinalProject226.php");
    }
}
else {
    echo "user not found !";
  }
mysqli_stmt_close($stmt);
mysqli_close($conn);


?>