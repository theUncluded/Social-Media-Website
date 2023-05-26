<?php
$servername = "localhost";
$username = "chen";
$password = "wenxuan5538";
$dbname = "chen_";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $hashed_pw = password_hash($password, PASSWORD_DEFAULT);
    

    // check if the username or email already exists in the database
    $sql = "SELECT COUNT(*) AS count FROM usersTable WHERE username = ? OR email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username, $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    if ($row['count'] > 0) {
        echo "Username or email already exists, please choose another one.";
        ?>
        <form method="POST" action="FinalProject226.php">
        <label>Back to register page!</label>
        <input type="submit" value="Back">
        <?php
    } else {
        // insert the new user into the database
        $sql = "INSERT INTO usersTable (username, email, password) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $username, $email, $hashed_pw);
        if ($stmt->execute()) {
            echo "Registration successful!";
            header("Location: FinalProject226.php");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            header("Location: FinalProject226.php");
        }
    }
}

$conn->close();
?>



