<!DOCTYPE html>
<html>
    <head>

@extends ('layouts.app')

@section('content')
</head>
<body>
<h1>Datu bāzes - visi dati</h1>

<div class="alert alert-danger">
    @foreach ($data as $element)
    <h4>Name:{{$element->name}}</h4>


    <a href="/data/all/{{$element->id}}">Details</a>
</div>
        

    @endforeach


@endsection
</html>
</body>