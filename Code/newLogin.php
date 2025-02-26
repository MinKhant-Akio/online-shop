<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="../Css/login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="container">
        <form action="">
            <h1>Sign In</h1>
            <!-- <div class="social-login">
                <button type="button" class="google-btn"><i class='bx bxl-google'></i>Google +</button>
                <button type="button" class="apple-btn"><i class='bx bxl-apple'></i>Apple ID</button>
            </div> -->
            <div class="form-input">
                <input type="text" placeholder="Username" required>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <style>
                      .user-1 {
                        animation: user-1 1s cubic-bezier(0.83, -0.07, 0, 1.04) both infinite alternate-reverse;
                    }
                    @keyframes user-1 {
                      0% {
                        transform: translateY(0) translateX(0);
                      }
                      100% {
                        transform: translateY(-1px) translateX(-2px);
                      }
                    }
                    </style>
                      <circle class="user-1" cx="12" cy="8.245" r="2.5" stroke="#fff" stroke-width="1.5"/>
                      <ellipse cx="12" cy="15.926" stroke="#fff" stroke-width="1.5" rx="5" ry="2.329"/>
                    </svg>
                    
            </div>
            <div class="form-input">
                <input type="password" placeholder="Password" required>
                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"><style>@keyframes lock{0%{transform:translateY(-2px)}to{transform:translateY(0)}}</style><path fill="#fff" d="M15.236 10.811a.736.736 0 01-.736-.736V8.811a2.5 2.5 0 00-5 0v5H8v-5a4 4 0 018 0v1.236a.764.764 0 01-.764.764z" style="animation:lock 1s cubic-bezier(1,-.43,0,1.29) both infinite alternate-reverse"/><path fill="#fff" d="M6.6 13.704a3 3 0 013-3h4.8a3 3 0 013 3v3a3 3 0 01-3 3H9.6a3 3 0 01-3-3v-3z"/>
                    <path fill="#fff" d="M9.6 11.454h4.8v-1.5H9.6v1.5zm7.05 2.25v3h1.5v-3h-1.5zm-2.25 5.25H9.6v1.5h4.8v-1.5zm-7.05-2.25v-3h-1.5v3h1.5zm2.25 2.25a2.25 2.25 0 01-2.25-2.25h-1.5a3.75 3.75 0 003.75 3.75v-1.5zm7.05-2.25a2.25 2.25 0 01-2.25 2.25v1.5a3.75 3.75 0 003.75-3.75h-1.5zm-2.25-5.25a2.25 2.25 0 012.25 2.25h1.5a3.75 3.75 0 00-3.75-3.75v1.5zm-4.8-1.5a3.75 3.75 0 00-3.75 3.75h1.5a2.25 2.25 0 012.25-2.25v-1.5zm1.543 5.198a.857.857 0 011.714 0v.104a.857.857 0 11-1.714 0v-.104z"/></svg>   
            </div>
            <div class="form-input">
                <input type="password" placeholder="Confirm Password" required>
                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"><style>@keyframes check {
                    to {
                      stroke-dashoffset: 0;
                    }
                  }</style><path stroke="#fff" stroke-width="1.5" d="M5.9 8.053a2 2 0 011.507-1.938l4.683-1.192 4.517 1.184A2 2 0 0118.1 8.042v3.75a7 7 0 01-3.98 6.314l-.755.361a3 3 0 01-2.557.015l-.856-.398A7 7 0 015.9 11.736V8.053z"/><path stroke="#fff" stroke-linecap="round" stroke-width="1.5" d="M9.215 12.052l1.822 1.805 3.748-3.714" style="animation:check 2s infinite cubic-bezier(.99,-.1,.01,1.02)" stroke-dashoffset="100" stroke-dasharray="100"/></svg>
            </div>
            <button type="submit" class="btn">Register Now</button>
            <div class="login-link">
                <p>Already Have an Account? <a href="#">Login</a></p>
            </div>
        </form>
    </div>
</body>
</html>