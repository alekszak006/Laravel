<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h3>Dane uzytkownika:</h3>
{{print_r($user)}} <hr>
Imię i nazwisko: {{$user['firstname']}} {{$user['lastname']}} <br>
Miasto: {{$user['city']}} <br>
Hobby:
{{--print_r($user['Hobby'])--}} <br>
{{--hobby 1: {{$user['Hobby'][0]}}--}}
<ul>
    @foreach($user['Hobby'] as $hobby)
        <li>{{$hobby}}</li>
    @endforeach
</ul>
</body>
</html>
