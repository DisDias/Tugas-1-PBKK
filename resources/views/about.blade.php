<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-color: darkslategray;
            color: aliceblue;
        }
    </style>
</head>
<body>
    <center>
        <br>
    <h1>Halo, Salam Kenal!!!</h1>
    <br>
    <h3>{{ $name }}</h3>
    <p> {{ $email }}</p>
    <img src="{{ asset('post-images/dias.jpg') }}" width="200" height="225">
    
    <br><br>
    <br>
    <a href="/dashboard" class="btn btn-danger">Home</a>
    <center>
</body>
</html>