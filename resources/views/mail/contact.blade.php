<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>hai una nuova richiesta da {{ config('app.name') }}</h3>

    <div>
        Nome: <span> {{$name}} </span><br>
        Email: <span> {{$email}} </span><br>
        Messaggio: {{$content}}
    </div>
</body>
</html>