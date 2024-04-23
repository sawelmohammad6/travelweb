<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous">
    <link rel="stylesheet" href="loginstyle.css">
    <title>Signin and Signup</title>
</head>

<body>
    <div class="container">
        <div class="signin-signup">
            <form action="API/login.php" method="POST" class="sign-in-form">
                <h2 class="title">Sign in</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" name='email' placeholder="Username">
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" placeholder="Password">
                </div>
                <a href="#" class="forgot-password">Forgot password?</a>
                <input type="submit" value="Login" class="btn">
                <p>Don't have an account? <a href="#" class="account-text" id="sign-up-link">Sign up</a></p>
            </form>
            <form action="API/signup.php" method="POST" class="sign-up-form">
                <h2 class="title">Sign up</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" name="Username" placeholder="Full Name">
                </div>
                <div class="input-field">
                    <i class="fas fa-envelope"></i>
                    <input type="text" name="phone" placeholder="Phone Number">
                </div>
                <div class="input-field">
                    <i class="fas fa-envelope"></i>
                    <input type="text" name="email" placeholder="Email">
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" placeholder="Password">
                </div>
                <input type="submit" value="Sign up" class="btn">
                <p>Already have an account? <a href="#" class="account-text" id="sign-in-link">Sign in</a></p>
            </form>
        </div>
    </div>
    <script src="loginjs.js"></script>
</body>

</html>