<!DOCTYPE html>
<html>
    <head>

@extends ('layouts.app')

@section('content')
</head>
<body>
<h1>Datu bāzes - visi dati</h1>



    <h4>Name:{{$data->name}}</h4>
        <h4>Email:{{$data->email}}</h4>
        <h4>Message:{{$data->subject}}</h4>

    <a class="btn btn-warning" href="/data/all/{{$data->id}}/delete">Dzēst</a>
    <a class="btn btn-danger" href="/data/all/{{$data->id}}/edit">Rediģēt</a>
    <br>
        

@endsection
</html>
</body>