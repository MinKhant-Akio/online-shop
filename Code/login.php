<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../Css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>

    
    <div class="login-form-container">
        <form action="login.php" method="post" id="form">
            <h3 class="login">Login</h3>
            <?php
                if(isset($_POST['submit']))
                {
                    $e=$_POST['email'];
                    $pw=$_POST['password'];
                    if($e='admin@gmail.com' && $pw='admin123')
                    {
                        // echo "<script>location.assign('home.php')</script>";
                        header('location:home.php');
                    }
                }
            ?>
            <div class="input-container">
            <i class="bi bi-envelope"></i>
                <input type="email" name="email" placeholder="Enter Your Email Address">
            </div>
            <div class="input-container">
            <i class="bi bi-key"></i>
            <input type="password" name="password" placeholder="Enter Your Password">
            </div>
            <div class="checkbox">
                <input type="checkbox" id="remember">
                <label for="remember">Remember Me</label>
            </div>
            <input type="submit" value="Login" name="submit" class="btnn">
            <a href="#" class="text-white">Forget Password?</a>
            <a href="register.php" class="text-white">Don't Have An Account?</a>
            <a href="homepage.php" class="button" id="back"><i class="bi bi-x-lg"></i></a>
        </form>
    </div>
   
</body>

</html>