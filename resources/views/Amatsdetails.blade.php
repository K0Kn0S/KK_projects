<!DOCTYPE html>
<html>
    <head>

@extends ('layouts.app')

@section('content')
</head>
<body>
<h1>Amats</h1>



    <h4>{{$Amatsdata->id}}</h4>
        <h4>{{$Amatsdata->Nosaukums}}</h4>

    <a class="btn btn-warning" href="/data/amats/{{$Amatsdata->id}}/delete">Dzēst</a>
    <a class="btn btn-danger" href="/data/amats/{{$Amatsdata->id}}/edit">Rediģēt</a>
    <br>
        

@endsection
</html>
</body>