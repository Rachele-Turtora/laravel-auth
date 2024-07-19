@extends('layouts.app')

@section('content')
<h2 class="m-2">Modifica il progetto</h2>

<form action="{{route('admin.projects.update', $project->id)}}" method="POST" class="m-3">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="title" class="form-label">Titolo</label>
        <input type="text" class="form-control @if ($errors->get('title')) is-invalid @endif" id="title" name="title" value="{{old('title', $project->title)}}">
        @if ($errors->get('title'))
        @foreach ($errors->get('title') as $message)
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @endforeach
        @endif
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Descrizione</label>
        <textarea class="form-control @if ($errors->get('description')) is-invalid @endif" id="description" rows="3" name="description">{{old('description', $project->description)}}</textarea>
        @if ($errors->get('description'))
        @foreach ($errors->get('description') as $message)
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @endforeach
        @endif
    </div>
    <button type="submit" class="btn btn-outline-secondary">Modifica progetto</button>
</form>
@endsection