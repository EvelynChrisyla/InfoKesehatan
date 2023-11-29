<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans&display=swap" rel="stylesheet">
   
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" type="text/css" href="{{ asset('style.css') }}">



    <title>Login</title>

</head>

<!-- <body class="vh-100 d-flex align-items-center">
    <div class="container d-flex align-items-center">
        <div class="login-image"><img src="/img/union.png" style="float:left; width:30rem" /></div>
        <div class="signin-container ">
            <span class="signin-text">
                <h2><b>Welcome To </b><img class="logoasset" src="/img/logoasset.png" /></h2>
            </span>
            <div class="signintext">Sign In to Your Account</div>

            <form class="login-form">
                <label for="email"><b>Email</b></label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>

                <label for="password"><b>Password</b></label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>

                <button type="submit"><b>Login</b></button>
            </form>
        </div>
    </div>
</body> -->

<body class="vh-100 d-flex align-items-center">
    <div class="container d-flex align-items-center">
        <div class="login-image"><img src="/img/union.png" style="float:left; width:30rem" /></div>
        <div class="signin-container ">
            <span class="signin-text">
                <h2><b>Welcome To </b><img class="logoasset" src="/img/logoasset.png" /></h2>
            </span>
            <div class="signintext">Sign In to Your Account</div>

            @if($errors->any())
                <div class="alert alert-danger" role="alert">
                    {{ $errors->first() }}
                </div>
            @endif
            
            <form action="{{ route('admin.login') }}" method="post" class="login-form">
                @csrf
                <label for="email"><b>Email</b></label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>

                <label for="password"><b>Password</b></label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>

                <button type="submit"><b>Login</b></button>
            </form> 
        </div>
    </div>
</body>

</html>
