<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="login/style.css">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'> 
           <!--https://boxicons.com/ -->

    <title>Login & Register Page  ->> Our Culture</title>

    <style>
        /* Basic styling */
        .password-container {
            width: 100%;
            position: relative;
            display: flex;
            align-items: center;
        }
        .password-container input[type="password"],
        .password-container input[type="text"] {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
        }
        .password-container .eye-icon {
            position: absolute;
            right: 10px;
            cursor: pointer;
            user-select: none;
        }
    </style>
</head>

<body>

    <div class="container" id="container">
        <div class="form-container sign-up">
            <form action="php_files/registration.php" method="POST">
                <h1>Create Account</h1>
                <div class="social-icons">
                    <a href="#" class="icons"><i class="bx bxl-google"></i></a>
                    <a href="#" class="icons"><i class="bx bxl-facebook"></i></a>
                    <a href="#" class="icons"><i class="bx bxl-github"></i></a>
                    <a href="#" class="icons"><i class="bx bxl-linkedin"></i></a>
                </div>
                <span><b>Register with E-mail</b></span>
                <input type="text" name="name" placeholder="Name">
                <input type="email" name="email" placeholder="Enter E-mail">
                <div class="password-container">
                    <input type="password" id="signup-password" name="password" placeholder="Enter Password">
                    <i class="bx bx-show eye-icon" id="signup-eye" onclick="togglePassword('signup-password', 'signup-eye')"></i>
                </div>
                <button>Sign Up</button>
            </form>
        </div>


        <div class="form-container sign-in">
            <form action="php_files/login.php" method="POST">
                <h1>Sign In</h1>
                <div class="social-icons">
                    <a href="#" class="icons"><i class="bx bxl-google"></i></a>
                    <a href="#" class="icons"><i class="bx bxl-facebook"></i></a>
                    <a href="#" class="icons"><i class="bx bxl-github"></i></a>
                    <a href="#" class="icons"><i class="bx bxl-linkedin"></i></a>
                </div>
                <span><b>Login With Email & Password</b></span>
                <input type="email" name="email" placeholder="Enter E-mail">
                <div class="password-container">
                    <input type="password" id="login-password" name="password" placeholder="Enter Password">
                    <i class="bx bx-show eye-icon" id="login-eye" onclick="togglePassword('login-password', 'login-eye')"></i>
                </div>
                <a href="#"><b>Forget Password?</b></a>
                <button>Sign In</button>
            </form>
        </div>


        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Welcome To <br>Our Culture of India</h1>
                    <p>Sign in With ID & Passowrd</p>
                    <button class="text-light" id="login">Sign In</button>
                </div>

                <div class="toggle-panel toggle-right">
                    <h1>Hii User's</h1>
                   <h5><p><bold>Join Our Culture </bold></p></h5> 
                    <button class="text-light" id="register">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

    <script src="login/script.js"></script>

    <script>
        function togglePassword(inputId, iconId) {
            var passwordInput = document.getElementById(inputId);
            var eyeIcon = document.getElementById(iconId);
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eyeIcon.classList.remove('bx-show');
                eyeIcon.classList.add('bx-hide');
            } else {
                passwordInput.type = 'password';
                eyeIcon.classList.remove('bx-hide');
                eyeIcon.classList.add('bx-show');
            }
        }
    </script>

</body>

</html>