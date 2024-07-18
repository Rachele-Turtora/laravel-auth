@extends('layouts.app')

@section('content')
<h2 class="m-2">Crea un nuovo progetto</h2>

@include('partials.errors')

<form action="{{route('admin.projects.store')}}" method="POST" class="m-3">
    @csrf

    <div class="mb-3">
        <label for="title" class="form-label">Titolo</label>
        <input type="text" class="form-control" id="title" name="title">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Descrizione</label>
        <textarea class="form-control" id="description" rows="3" name="description"></textarea>
    </div>
    <button type="submit">Crea progetto</button>
</form>
@endsection