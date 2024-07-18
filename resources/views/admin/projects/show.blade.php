@extends('layouts.app')

@section('content')

@if (session('message'))
<div class="alert alert-success">
    {{ session('message') }}
</div>
@endif

<div class="m-3">
    <h2>{{$project['title']}}</h2>
    <p>{{$project['description']}}</p>
</div>
@endsection