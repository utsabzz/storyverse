<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Register</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .login-container {
            background-color: #ffffff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
            padding: 40px;
            border-radius: 10px;
            text-align: center;
        }

        .login-container h1 {
            font-size: 30px;
            margin-bottom: 30px;
            color: #333333;
        }

        .login-form, .register-form {
            width: 100%;
        }

        .login-form input, .register-form input {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 2px solid #cccccc;
            border-radius: 8px;
            font-size: 16px;
            color: #333333;
            font-weight: 500;
            background-color: #f0f0f0;
            transition: border-color 0.3s, background-color 0.3s;
        }

        .login-form input::placeholder, .register-form input::placeholder {
            color: #999999;
            font-style: italic;
        }

        .login-form input:focus, .register-form input:focus {
            outline: none;
            border-color: #007bff;
            background-color: #ffffff;
        }

        .login-form input:focus::placeholder, .register-form input:focus::placeholder {
            color: #666666;
            font-style: normal;
        }

        .login-form button, .register-form button {
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            color: #ffffff;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .login-form button:hover, .register-form button:hover {
            background-color: #0056b3;
        }

        .toggle-form {
            margin-top: 10px;
            color: #007bff;
            cursor: pointer;
        }
        input {
    width: 100%;
    padding: 12px;
    margin-bottom: 20px;
    border: 1px solid #cccccc;
    border-radius: 5px;
    font-size: 16px;
}

button {
    width: 100%;
    padding: 12px;
    background-color: #007bff;
    border: none;
    border-radius: 5px;
    color: #ffffff;
    font-size: 18px;
    cursor: pointer;
}

button:hover {
    background-color: #0056b3;
}

    </style>
</head>
<body>
    <div class="login-container">
        <h1>Welcome Back!</h1>
        <form id="login-form" action="phpHandles/login.php"  method="post">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Log In</button>
            <p class="toggle-form" onclick="toggleForm()">Don't have an account? Register</p>
        </form>
        <form id="register-form" style="display: none;" action="phpHandles/Register.php" method="post">
            <input type="text" name="username" placeholder="Full Name" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="password" name="cpassword" placeholder="Confirm Password" required>
            <button type="submit">Register</button>
            <p class="toggle-form" onclick="toggleForm()">Already have an account? Log In</p>
        </form>
    </div>

    <script>
        function toggleForm() {
            var loginForm = document.getElementById("login-form");
            var registerForm = document.getElementById("register-form");

            if (loginForm.style.display === "none") {
                loginForm.style.display = "block";
                registerForm.style.display = "none";
            } else {
                loginForm.style.display = "none";
                registerForm.style.display = "block";
            }
        }
    </script>
</body>
</html>
