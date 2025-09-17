<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login - SMKN1 BINUT</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet" />
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap");

        * {
            box-sizing: border-box;
            font-family: "Outfit";
        }

        body,
        html {
            margin: 0;
            padding: 0;
            height: 100%;
            background-color: #f8f8f8;
        }

        ::-webkit-scrollbar {
            display: none;
        }

        .login-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            height: calc(100vh - 120px);
            /* biar ngitung tinggi dikurangi navbar+footer */
        }

        .container {
            width: 800px;
            height: 500px;
            display: flex;
            border-radius: 30px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            background-color: white;
        }

        .left {
            flex: 1;
            padding: 50px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            background-color: #e9e9e9;
        }

        .left p {
            margin-top: 10px;
            font-size: 14px;
            color: #666;
        }

        .input-field {
            margin: 20px 0 10px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 8px;
            outline: none;
            font-size: 14px;
        }

        .forgot {
            font-size: 12px;
            color: #888;
            margin-bottom: 20px;
        }

        .forgot a {
            text-decoration: none;
            color: inherit;
        }

        .login-btn {
            padding: 12px;
            background-color: #1a56db;
            color: white;
            font-weight: bold;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            width: 100%;
        }

        .right {
            flex: 1;
            background-color: #f2f2f2;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .right img {
            max-width: 100%;
            height: auto;
        }

        .welcome-text {
            text-align: center;
            width: 100%;
            margin-bottom: 20px;
            margin-top: 25px;
        }

        .right img {
            width: 100%;
            margin: 10px;
            height: 300px;
            margin-right: 75px;
            margin-top: 40px;
            max-width: 360px;
            transform: translateX(30px);
        }
    </style>
</head>

<body>

    <div class="login-wrapper">
        <div class="container">
            <div class="left">

                <div class="welcome-text">
                    <h1>Welcome</h1>
                    <p>"Big dreams start with small habits."</p>
                </div>

                <form action="../auth/login.php" method="POST">
                    <div class="input-field">
                        <input type="text" placeholder="username" name="username" required>
                    </div>
                    <div class="input-field">
                        <input type="password" placeholder="Password" name="password" required>
                    </div>
                    <div class="forgot">
                        <a href="#">Forgot Password?</a>
                    </div>
                    <button class="login-btn">Login</button>
                </form>

            </div>
            <div class="right">
                <img src="assets/image/logo_smk.png" alt="To-Do List">
            </div>
        </div>
    </div>

</body>

</html>