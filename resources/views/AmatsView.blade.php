@extends('layouts.app')
@section('content')
 
 

<form action="/data/amats/{{$Amatsdata->id}}" method="post">
    @csrf
<h1>Edit</h1>
<div class="container" style="max-width: 60%;">
    <div class="mb-3">
        <label for="Nosaukums" class="form-label"></label>
        <input type="text" class="form-control" id="Nosaukums" name="Nosaukums" value="{{ $Amatsdata->Nosaukums }}" >
    </div>
    <button type="submit" class="btn btn-info">Pievienot</button>
    <button type="button" class="btn btn-danger" onclick="window.history.back()">Atcelt</button>
</div>
</form>
@endsection