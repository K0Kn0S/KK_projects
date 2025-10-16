<!DOCTYPE html>
<html>
    <head>

@extends ('layouts.app')

@section('content')
</head>
<body>
<h1>Datu darbinieki - visi darbinieki</h1>

    @foreach ($ddata as $darb)

    <div class="alert alert-danger">
        <h4>{{$darb->Vards}}</h4>
    <a href="/data/darbu/{{$darb->id}}/details">Details</a>
 </div>

    @endforeach


@endsection
</html>
</body>