<!DOCTYPE html>
<html>
    <head>

@extends ('layouts.app')

@section('content')
</head>
<body>
<h1>Amati</h1>

     @foreach ($Amatsdata as $Amats)

    <div class="alert alert-danger">
        <h4>{{$Amats->Nosaukums}}</h4>
    <a href="/data/amats/{{$Amats->id}}/details">Details</a>
 </div>
        

    @endforeach


@endsection
</html>
</body>