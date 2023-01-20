<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link rel="icon" href="../img/core-img/favicon.ico">
    <!--Stylesheet-->
    <style media="screen">
        *,
        *:before,
        *:after {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #080710;
        }

        .background {
            width: 430px;
            height: 520px;
            position: absolute;
            transform: translate(-50%, -50%);
            left: 50%;
            top: 50%;
        }

        .background .shape {
            height: 200px;
            width: 200px;
            position: absolute;
            border-radius: 50%;
        }

        .shape:first-child {
            background: linear-gradient(
                    #1845ad,
                    #23a2f6
            );
            left: -80px;
            top: -100px;
        }

        .shape:last-child {
            background: linear-gradient(
                    to right,
                    #ffe433,
                    #ffdb49
            );
            right: -30px;
            bottom: -280px;
        }

        form {
            height: 750px;
            width: 400px;
            background-color: rgba(255, 255, 255, 0.13);
            position: absolute;
            transform: translate(-50%, -50%);
            top: 60%;
            left: 50%;
            border-radius: 10px;
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 0 40px rgba(8, 7, 16, 0.6);
            padding: 50px 35px;
        }

        form * {
            font-family: 'Poppins', sans-serif;
            color: #ffffff;
            letter-spacing: 0.5px;
            outline: none;
            border: none;
        }

        form h3 {
            font-size: 32px;
            font-weight: 500;
            line-height: 42px;
            text-align: center;
        }

        label {
            display: block;
            margin-top: 30px;
            font-size: 16px;
            font-weight: 500;
        }

        input {
            display: block;
            height: 50px;
            width: 100%;
            background-color: rgba(255, 255, 255, 0.07);
            border-radius: 3px;
            padding: 0 10px;
            margin-top: 8px;
            font-size: 14px;
            font-weight: 300;
        }

        ::placeholder {
            color: #e5e5e5;
        }

        button {
            margin-top: 50px;
            width: 100%;
            background-color: #ffffff;
            color: #080710;
            padding: 15px 0;
            font-size: 18px;
            font-weight: 600;
            border-radius: 5px;
            cursor: pointer;
        }

        .social {
            margin-top: 30px;
            display: flex;
        }

        .social div {

            width: 150px;
            border-radius: 3px;
            padding: 5px 10px 10px 5px;
            background-color: rgba(255, 255, 255, 0.27);
            color: #eaf0fb;
            text-align: center;
        }

        .social div:hover {
            background-color: rgba(255, 255, 255, 0.47);
        }

        .social .fb {
            margin-left: 25px;
        }

        .social i {
            margin-right: 4px;
        }

    </style>
</head>
<body>
<?php
include 'config.php';
if (isset($_POST['username'])&&isset($_POST['login'])&&isset($_POST['password'])&&isset($_POST['RepeatPassword'])){
    if($_POST['password']==$_POST['RepeatPassword']){
        global $pdo;
        session_start();
        $sql="INSERT INTO `Persons` (`id`, `Name`, `login`, `password`) VALUES (NULL, :username,:login,:password)";
        $doing=$pdo->prepare($sql);
        $doing->bindValue(":username",$_POST['username']);
        $doing->bindValue(":login",$_POST['login']);
        $doing->bindValue(":password",$_POST['password']);
        $_SESSION['login']=$_POST['login'];
        $_SESSION['password']=$_POST['password'];
        $_SESSION['username']=$_POST['username'];
        $append=$doing->execute();
        echo '<script>
                    setTimeout(\'location.href="login.php"\', 3000);
                    </script>';
    }
}
?>
<div class="background">
    <div class="shape"></div>
    <div class="shape"></div>
</div>
<form method="post">
    <h3>Create account</h3>
    <label for="username">Username</label>
    <input type="text" placeholder="Your name" id="username" name="username" required>
    <label for="login">login</label>
    <input type="text" placeholder="Email or Phone" id="login" name="login" required>
    <label for="password">Password</label>
    <input type="password" placeholder="Password" id="password" name="password" required>
    <label for="RepeatPassword">Repeat Password</label>
    <input type="password" placeholder="Repeat Password" id="RepeatPassword" name="RepeatPassword" required>
    <button type="submit">Create account</button>
    <div class="social">
        <div class="go"><i class="fab fa-google"></i> Google</div>
        <div class="fb"><i class="fab fa-facebook"></i> Facebook</div>
    </div>
</form>
</body>
</html>
