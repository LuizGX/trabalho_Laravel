<?php
use App\Ticket;
    $var = Ticket::orderBy('id', 'asc')->get();
    //var_dump($var[0]['user_id']);
    //echo count($var);
    $criar=true;
    for($i=0;$i<count($var);$i++) {
        if($var[$i]['user_id']==Auth::user()->id){
            $criar=false;
        } else {
            $criar=true;
        }
    }
    
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

                @if($criar)
                <form action="{{ route('cadastrar.index') }}" class="signin">
                    @csrf
                    <span id="authenicate" class="authentication-email"></span>
                    <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">CRIAR INFORMAÇÕES PESSOAIS</button>
                </form>
                @else
                <form action="{{ route('ticket.edit', Auth::user()->id) }}" class="signin">
                    @csrf
                    <span id="authenicate" class="authentication-email"></span>
                    <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">EDITAR INFORMAÇÕES PESSOAIS</button>
                </form>
                @endif
            </div>
        </div>
    </body>
</html>