<?php
    $conn = mysqli_connect("localhost", "root", "", "dbanimeflix");

    mysqli_query($conn, "SELECT * FROM animeflix");

    function registrasi($data) {
        global $conn;
        $username = strtolower(stripslashes($data["username"]));
        $password = mysqli_real_escape_string($conn, $data["password"]);
        $password2 = mysqli_real_escape_string($conn, $data["password2"]);
        $email = mysqli_real_escape_string($conn, $data["email"]);
        $phone = mysqli_real_escape_string($conn, $data["phone"]);

        $result = mysqli_query($conn, "SELECT * FROM animeflix WHERE username='$username' OR email='$email' OR phone='$phone' ");
        if(mysqli_fetch_assoc($result) ) {
            echo "<script type='text/javascript'>";
            echo "alert('ERROR : Username sudah terdaftar. Silahkan coba lagi!!')";
            echo "</script>";
        return false;
        }

        if($password !== $password2) {
            echo "<script type='text/javascript'>";
            echo "alert('ERROR : Konfirmasi password tidak sesuai. Silahkan coba lagi!!')";
            echo "</script>";
            return false;      
        }
        
        $password = password_hash($password, PASSWORD_DEFAULT);
        mysqli_query($conn, "INSERT INTO animeflix VALUES('', '$username', '$email', '$password', '$phone')");
        return mysqli_affected_rows($conn);

    }

    if( isset($_POST["register"]) ) {
        if(registrasi( $_POST) > 0 ) {
            echo "<script type='text/javascript'>";
            echo "alert('User baru berhasil ditambahkan')";
            echo "</script>";
        } else {
            echo mysqli_error($conn);
        }
    }
    

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins&amp;display=swap">
    <link rel="stylesheet" href="register.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>
    <div class="wrapper">
        <div class="login-box">
            <div class="login-header">
                <span>SIGN UP</span>
            </div>
            <form action="" method="POST">
                <div class="input-box">
                    <input type="text" id="username" name="username" class="input-field" required>
                    <label for="username" class="label">Username</label>
                    <i class="bx bx-user icon"></i>
                </div>
                <div class="input-box">
                    <input type="email" id="email" name="email" class="input-field" required>
                    <label for="email" class="label">Email Address</label>
                    <i class="bx bx-mail-send icon"></i>
                </div>
                <div class="input-box">
                    <input type="password" id="password" name="password" class="input-field" required>
                    <label for="password" class="label">Password</label>
                    <i class="bx bx-lock-alt icon" id="show-password"></i>
                </div>
                <div class="input-box">
                    <input type="password" id="password2" name="password2" class="input-field" required>
                    <label for="password2" class="label">Confirm Password</label>
                    <i class="bx bx-lock-alt icon" id="show-password"></i>
                </div>
                <div class="input-box">
                    <input type="text" id="phone" name="phone" class="input-field" required>
                    <label for="phone" class="label">Phone Number</label>
                    <i class="bx bx-phone icon"></i>
                </div>

                <div class="input-box">
                    <input type="submit" class="input-submit" value="Register" name="register">
                </div>
                <div class="register">
                    <span>Already have an account? <a href="login.php">Sign in</a></span>
                </div>
            </form>
        </div>
    </div>

     
</body>

</html>
