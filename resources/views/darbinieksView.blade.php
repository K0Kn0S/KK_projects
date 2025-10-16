@extends('layouts.app')
@section('content')
 
 

<form action="/data/darbu/{{$ddata->id}}" method="post">
    @csrf
<h1>Edit</h1>
<div class="container" style="max-width: 60%;">
    <div class="mb-3">
        <label for="Vards" class="form-label"></label>
        <input type="text" class="form-control" id="Vards" name="Vards" placeholder="Vārds" value="{{ $ddata->Vards }}" >
    </div>
    <div class="mb-3">
        <label for="Uzvards" class="form-label"></label>
        <input type="text" class="form-control" id="Uzvards" name="Uzvards" placeholder="Uzvards" value="{{ $ddata->Uzvards }}">
    </div>
    <div class="mb-3">
        <label for="Dzimsanas_gads" class="form-label"></label>
        <input type="date" class="form-control" id="Dzimsanas_gads" name="Dzimsanas_gads"  value="{{ $ddata->Dzimsanas_gads }}">
    </div>
    <div class="mb-3">
        <label for="Tel_numurs" class="form-label"></label>
        <input type="text" class="form-control" id="Tel_numurs" name="Tel_numurs" value="{{$ddata->Tel_numurs}}">
    </div>
    <button type="submit" class="btn btn-info">Pievienot</button>
    <button type="button" class="btn btn-danger" onclick="window.history.back()">Atcelt</button>
</div>
</form>
@endsection