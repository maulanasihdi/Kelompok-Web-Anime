<?php
session_start();

    $conn = mysqli_connect("localhost", "root", "", "dbanimeflix");

    mysqli_query($conn, "SELECT * FROM animeflix");

if(isset($_POST["login"])) {
    global $conn;
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM animeflix WHERE username = '$username'");
    if(mysqli_num_rows($result) == 1) {

        $row = mysqli_fetch_assoc($result);

        if(password_verify($password, $row["password"])) {
            // $_SESSION["login"] = true;
            $_SESSION["username"] = $username;

            header("Location: INDEX.php");
            echo "<script type='text/javascript'>";
            echo "alert('Login berhasil')";
            echo "</script>";

            exit;
        }
    }

    echo "<script type='text/javascript'>";
    echo "alert('ERROR : Username / Password salah. Silahkan coba lagi')";
    echo "</script>";

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, 
    initial-scale=1.0">
    <title>Login Page</title>
    <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'>

    <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Poppins&amp;display=swap'>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>

<body>
    <div class="wrapper">
        <div class="login-box">
            <div class="login-header">
                <span>SIGN IN</span>
            </div>
            <form action="" method="post">
                <div class="input-box">
                    <input type="text" id="username" name="username" class="input-field" required>
                    <label for="username" class="label">Username
                    </label>
                    <i class="bx bx-user icon"></i>
                </div>
                <div class="input-box">
                    <input type="password" id="password" name="password" class="input-field" required>
                    <label for="password" class="label">Password</label>
                    <i class="bx bx-lock-alt icon" id="show-password">
                    </i>
                </div>
                <div class="remember-forgot">
                    <div class="remember-me">
                        <input type="checkbox" id="remember">
                        <label for="remember">Remember me</label>
                    </div>
                    <div class="forgot">
                        <a href="#">Forgot password</a>
                    </div>
                </div>

                <div class="input-box">
                    <input type="submit" class="input-submit" value="Login" name="login">
                </div>
                <div class="register">
                    <span>Don't have an account?
                        <a href="register.php">Sign up</a></span>
                </div>
            </form>
        </div>

    </div>

</body>

</html>