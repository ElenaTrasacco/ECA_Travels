<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ECA TRAVELS</title>
</head>
<body>
    <div>
        <h1>Ricevuta richiesta di lavoro:</h1>
        <h3>dati mittente:</h3>
        <p>Nome:{{$user->name}}</p>
        <p>Email:{{$user->email}}</p>
        <p>Se vuoi diventare revisore  </p>
        <a href="{{route('make.revisor',compact('user'))}}">clicca qui</a>

    </div>
</body>
</html>