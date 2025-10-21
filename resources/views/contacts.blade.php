@extends ('layouts.app')
@section('content')


@if($errors->all())
<div class="alert alert-danger">
    <ul>
@foreach($errors->all() as $kluda)
<li> <h6> 
    {{$kluda}} <br><br> </h6> </li>

    @endforeach
</ul>
</div>
@endif
<form action="/data/all/{{$data->id}}" method="post">
    @csrf
<h1>Edit</h1>
<div class="container" style="max-width: 60%;">
    <div class="mb-3">
        <label for="name" class="form-label"></label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Vārds">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label"></label>
        <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
    </div>
   
    <div class="mb-3">
        <label for="message" class="form-label"></label>
        <textarea class="form-control" id="message" name="message" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-info">Pievienot</button>
    <button type="button" class="btn btn-danger" onclick="window.history.back()">Atcelt</button>
</div>
</form>
@endsection