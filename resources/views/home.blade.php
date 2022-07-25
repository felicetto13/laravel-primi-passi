<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>First web application</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/css/bootstrap.min.css' integrity='sha512-XWTTruHZEYJsxV3W/lSXG1n3Q39YIWOstqvmFsdNEEQfHoZ6vm6E9GK2OrF6DSJSpIbRbi+Nn0WDPID9O7xB2Q==' crossorigin='anonymous'/>
    
</head>
<body>
    <div class="container py-5 text-center">
        <h1>Hello World!</h1>
        <h2><---  Utenti registrati  ---></h2>
        <ul class="list-unstyled">
        @forelse ($users as $user)
        <li class="d-flex flex-column"><span>Utente <strong>{{$loop->iteration}}</strong>:</span>
            <span>Nome Utente: {{$user["username"]}}</span>
            <span>Password: {{$user["password"]}}</span>
            <span>Ruolo: {{$user["role"]}}</span>
        </li>
        @empty
            <li>Non ci sono utenti da visualizzare</li>
        @endforelse
    </ul>
    </div>
</body>
</html>