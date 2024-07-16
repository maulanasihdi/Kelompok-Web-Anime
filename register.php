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
                <span>REGISTER</span>
            </div>
            <form action="submit_registration.php" method="POST" enctype="multipart/form-data">
                <div class="input-box">
                    <input type="text" id="fullname" name="fullname" class="input-field" required>
                    <label for="fullname" class="label">Username</label>
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
                    <input type="password" id="password" name="password" class="input-field" required>
                    <label for="password" class="label">Confirm Password</label>
                    <i class="bx bx-lock-alt icon" id="show-password"></i>
                </div>
                <div class="input-box">
                    <input type="tel" id="phone" name="phone" class="input-field">
                    <label for="phone" class="label">Phone Number</label>
                    <i class="bx bx-phone icon"></i>
                </div>

                <div class="input-box">
                    <input type="submit" class="input-submit" value="Register">
                </div>
                <div class="register">
                    <span>Already have an account? <a href="form.php">Login</a></span>
                </div>
            </form>
        </div>
    </div>

    <script src="form.js"></script> <!-- Ganti dengan file JavaScript yang sesuai -->
</body>

</html>
