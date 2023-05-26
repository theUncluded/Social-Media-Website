<!DOCTYPE html>
<html>
<body>
<?php session_start(); ?>
<style>
form {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 50px;
        }

        label {
            margin-top: 10px;
            margin-bottom: 5px;
            font-weight: bold;
            font-size: 18px;
        }

        input {
            width: 300px;
            padding: 5px;
            border-radius: 5px;
            border: none;
            box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.3);
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            margin-top: 20px;
            margin-bottom: 20px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #3e8e41;
        }

        .message {
            text-align: center;
            font-weight: bold;
            font-size: 20px;
            color: #4CAF50;
        }
    
</style>

<form method="post" action="login.php">
    <label>Welcome Back! Sign In Here:</label><br>
        <label>Username:</label>
        <input type="text" name="username" required>
        <br>
        <label>Password:</label>
        <input type="password" name="password" required>
        <br> 
    <input type="submit" value="Login">
</form>

<form method="POST" action="register.php">
    <label>New User? Register Here!</label>
        <label>Username:</label>
        <input type="text" name="username" required>
        <br>
        <label>Email:</label>
        <input type="email" name="email" required>
        <br>
        <label>Password:</label>
        <input type="password" name="password" required>
        <br> 
    <input type="submit" value="Register">
</form>
<?php if (isset($message)) { echo $message; } ?>
</body>
</html>

