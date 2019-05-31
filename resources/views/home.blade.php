<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/home.css">
    </head>
    <body>
        <div class="container login-container">
            <div class="main-container login-card">
                <img src="https://images.assetsdelivery.com/compings_v2/triken/triken1608/triken160800029.jpg" alt="..." class="img-circle profile-img">
                <p class="profile-name" id="profile-name-card">Login</p>

                <form class="signin">
                <span id="authenicate" class="authentication-email"></span>
                <input type="email" id="email" class="form-control animated bounceIn" for="inputSuccess3" placeholder="E-mail" required autofocus> 
                <input type="password" id="password" class="form-control animated bounceInUp" placeholder="Senha" required autofocus> 
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">ENTRAR</button>
                </form>
                
                <button class="btn btn-block register" onclick="window.location='{{ route('cadastrar.index') }}'">REGISTRAR</button>
                <button class="btn btn-block register" onclick="window.location='{{ route('ticket.index') }}'">Lista</button>
            </div>
        </div>
    </body>
</html>
