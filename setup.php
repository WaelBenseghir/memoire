<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/setup.css">
    <title>Set up</title>
</head>

<body>
    <div class="content">
        <main class="main">
            <div class="container" id="signInForm">
                <h1>Welcome back!</h1>
                <p class="title__desc">Enter your details to access your account.</p>
                <form method="post" action="register.php">
                    <div>
                        <label class="input-label" for="email">Email address</label>
                        <input class="input" name="email" type="email" id="email" placeholder="Enter your email" required>
                    </div>
                    <div>
                        <label class="input-label" for="pass">Password</label>
                        <input class="input" name="password" type="password" id="pass" placeholder="Enter your password" required>
                    </div>
                    <div class="rem">
                        <div>
                            <input type="checkbox" class="checkbox" id="remember">
                            <label for="remember">Remember me</label>
                        </div>
                        <a href="#">Forgot password?</a>
                    </div>
                    <button type="submit" name="signIn">Sign in</button>
                </form>
                <p class="or">Or</p>
                <button class="sign-in">
                    <svg xmlns="http://www.w3.org/2000/svg" class="google" viewBox="-0.5 0 48 48"><g fill="none" fill-rule="evenodd"><path fill="#FBBC05" d="M9.827 24c0-1.524.253-2.986.705-4.356l-7.909-6.04A23.456 23.456 0 0 0 .213 24c0 3.737.868 7.26 2.407 10.388l7.905-6.05A13.885 13.885 0 0 1 9.827 24"/><path fill="#EB4335" d="M23.714 10.133c3.311 0 6.302 1.174 8.652 3.094L39.202 6.4C35.036 2.773 29.695.533 23.714.533a23.43 23.43 0 0 0-21.09 13.071l7.908 6.04a13.849 13.849 0 0 1 13.182-9.51"/><path fill="#34A853" d="M23.714 37.867a13.849 13.849 0 0 1-13.182-9.51l-7.909 6.038a23.43 23.43 0 0 0 21.09 13.072c5.732 0 11.205-2.036 15.312-5.849l-7.507-5.804c-2.118 1.335-4.786 2.053-7.804 2.053"/><path fill="#4285F4" d="M46.145 24c0-1.387-.213-2.88-.534-4.267H23.714V28.8h12.604c-.63 3.091-2.346 5.468-4.8 7.014l7.507 5.804c4.314-4.004 7.12-9.969 7.12-17.618"/></g></svg>
                    Sign in with Google
                </button>
                <p class="account">Don't have an account?<a id="signUpButton"> Sign up</a></p>
            </div>

            <div class="container" id="signUpForm" style="display: none;">
                <h1>Get Started Now</h1>
                <p class="title__desc">Fill in your details to set up your account.</p>
                <form method="post" action="register.php">
                    <div>
                        <label class="input-label" for="name">Name</label>
                        <input class="input" name="name" type="text" id="name" placeholder="Enter your name" required>
                    </div>
                    <div>
                        <label class="input-label" for="email">Email address</label>
                        <input class="input" name="email" type="email" id="email" placeholder="Enter your email" required>
                    </div>
                    <div>
                        <label class="input-label" for="pass">Password</label>
                        <input class="input" name="password" type="password" id="pass" placeholder="Enter your password" required>
                    </div>
                    <div class="rem">
                        <div>
                            <input type="checkbox" class="checkbox" id="remember" required>
                            <label for="remember">I agree to the <span>term & <br>policy</span></label>
                        </div>
                    </div>
                    <button type="submit" name="signUp">Sign up</button>
                </form>
                <p class="or">Or</p>
                <button class="sign-in">
                    <svg xmlns="http://www.w3.org/2000/svg" class="google" viewBox="-0.5 0 48 48"><g fill="none" fill-rule="evenodd"><path fill="#FBBC05" d="M9.827 24c0-1.524.253-2.986.705-4.356l-7.909-6.04A23.456 23.456 0 0 0 .213 24c0 3.737.868 7.26 2.407 10.388l7.905-6.05A13.885 13.885 0 0 1 9.827 24"/><path fill="#EB4335" d="M23.714 10.133c3.311 0 6.302 1.174 8.652 3.094L39.202 6.4C35.036 2.773 29.695.533 23.714.533a23.43 23.43 0 0 0-21.09 13.071l7.908 6.04a13.849 13.849 0 0 1 13.182-9.51"/><path fill="#34A853" d="M23.714 37.867a13.849 13.849 0 0 1-13.182-9.51l-7.909 6.038a23.43 23.43 0 0 0 21.09 13.072c5.732 0 11.205-2.036 15.312-5.849l-7.507-5.804c-2.118 1.335-4.786 2.053-7.804 2.053"/><path fill="#4285F4" d="M46.145 24c0-1.387-.213-2.88-.534-4.267H23.714V28.8h12.604c-.63 3.091-2.346 5.468-4.8 7.014l7.507 5.804c4.314-4.004 7.12-9.969 7.12-17.618"/></g></svg>
                    Sign up with Google
                </button>
                <p class="account">Have an account?<a id="signInButton"> Sign in</a></p>
            </div>
        </main>
    </div>

    <div class="background">
        <svg xmlns="http://www.w3.org/2000/svg" class="wave" viewBox="0 0 1440 320"><path fill="#fff" d="M0 96h80c80 0 240 0 400 26.7C640 149 800 203 960 224s320 11 400 5.3l80-5.3V0H0Z"/></svg>
    </div>
    
    <script src="Src/setup.js"></script>
</body>

</html>