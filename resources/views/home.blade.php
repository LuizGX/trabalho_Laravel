<?php
use App\Ticket;
use App\User;
    $var = Ticket::findOrFail(Auth::user()->id);
    $user = User::findOrFail(Auth::user()->id);
    $criar=true;
    $admin=false;

        if($var['user_id']==Auth::user()->id){
            $criar=false;
        } else {
            $criar=true;
        }

        if($user['isAdmin'] == 1){
            $admin = true;
        }

    $user = User::findOrFail(Auth::user()->id);
    echo($user['isAdmin']);
    
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Main</title>
        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/home.css">
    </head>
    <body>
        <div class="container login-container">
            <div class="main-container login-card">
                <img src="https://images.assetsdelivery.com/compings_v2/triken/triken1608/triken160800029.jpg" alt="..." class="img-circle profile-img">
                <p class="profile-name" id="profile-name-card">{{Auth::user()->name}}</p>
                <span id="authenicate" class="authentication-email"></span>

                @if($admin == 1)
                <form action="{{ route('ticket.index') }}" class="signin">
                    @csrf
                    <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">VER TODOS OS PASSAGEIROS</button>
                </form>
                @endif
                @if($criar)
                <form action="{{ route('cadastrar.index') }}" class="signin">
                    @csrf
                    <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">CRIAR INFORMAÇÕES PESSOAIS</button>
                </form>
                @else
                <form action="{{ route('ticket.edit', Auth::user()->id) }}" class="signin">
                    @csrf
                    <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">EDITAR INFORMAÇÕES PESSOAIS</button>
                </form>
                @endif
            </div>
        </div>
    </body>
</html>