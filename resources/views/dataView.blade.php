@extends('layouts.app')
@section('content')
 
 


<form action="/data/all/{{$data->id}}" method="post">
    @csrf
<h1>Edit</h1>
<div class="container" style="max-width: 60%;">
    <div class="mb-3">
        <label for="name" class="form-label"></label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Vārds" value="{{ $data->name }}" >
    </div>
    <div class="mb-3">
        <label for="email" class="form-label"></label>
        <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" value="{{ $data->email }}">
    </div>
    <div class="mb-3">
        <label for="subject" class="form-label"></label>
        <input type="text" class="form-control" id="subject" name="subject" placeholder="Subjext" value="{{ $data->subject }}">
    </div>
    <div class="mb-3">
        <label for="message" class="form-label"></label>
        <textarea class="form-control" id="message" name="message" rows="3">{{ $data->message }}</textarea>
    </div>
    <button type="submit" class="btn btn-info">Pievienot</button>
    <button type="button" class="btn btn-danger" onclick="window.history.back()">Atcelt</button>
</div>
</form>
@endsection