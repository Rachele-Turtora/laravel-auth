@extends('layouts.app')

@section('content')
<h2 class="m-2">Modifica il progetto</h2>

@include('partials.errors')

<form action="{{route('admin.projects.update', $project->id)}}" method="POST" class="m-3">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="title" class="form-label">Titolo</label>
        <input type="text" class="form-control" id="title" name="title" value="{{old('title', $project->title)}}">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Descrizione</label>
        <textarea class="form-control" id="description" rows="3" name="description">{{old('description', $project->description)}}</textarea>
    </div>
    <button type="submit" class="btn btn-outline-secondary">Modifica progetto</button>
</form>
@endsection