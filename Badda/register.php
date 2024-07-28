<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>

    <div class="login-form-container">
        <form action="register.php" method="post" id="form">
            <h3 class="login">Register</h3>
            <div class="input-container">
            <i class="bi bi-envelope"></i>
                <input type="email" name="email" placeholder="Enter Your Email Address">
            </div>
            <div class="input-name">
            <input type="text" name="first name" placeholder="First Name" class="firstn">
            <input type="text" name="last name" placeholder="Last Name">
            </div>
            <div class="input-container">
            <i class="bi bi-telephone"></i>           
            <input type="text" name="phone number" placeholder="Enter Your Phone Number">
            </div>
            <div class="input-container">
            <i class="bi bi-key"></i>
            <input type="password" name="password" placeholder="Enter Your Password">
            </div>
            <div class="input-container">
            <i class="bi bi-key-fill"></i>
            <input type="password" name="password" placeholder="Confirm Your Password">
            </div>
            <p class="text-white mt-3">By clicking register, you agree to our terms & services </p>
            <input type="submit" value="Register" name="submit" class="btnn">
            <p class="text-white mt-2">Already Have An Account? <a href="login.php">Login Now</a></p>
            <a href="homepage.php" class="button" id="back"><i class="bi bi-x-lg"></i></a>
        </form>
    </div>

</body>

</html>