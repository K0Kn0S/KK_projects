<!DOCTYPE html>
<html>
    <head>

@extends ('layouts.app')

@section('content')
</head>
<body>
<h1>Datu darbinieki - visi darbinieki</h1>


        <h4>Name:{{$ddata->Vards}}</h4>
        <h6>Last Name:{{$ddata->Uzvards}}</h6>
        <h6>Birth year:{{$ddata->Dzimsanas_gads}}</h6>
        <h6>Tel Number:{{$ddata->tel_numurs}}</h6>
        <a class="btn btn-warning" href="/data/darbu/{{$ddata->id}}/delete">Dzēst</a>
          <a class="btn btn-danger" href="/data/darbu/{{$ddata->id}}/edit">Rediģēt</a>
        <br><br>


@endsection
</html>
</body>