@extends('layouts.app')

@section('content')
<h2 class="m-3">Lista dei progetti</h2>

<ul>
    @foreach ($projects as $project)
    <li class="m-2">
        <p><strong>{{$project['title']}}</strong></p>
        <p>{{$project['description']}}</p>
    </li>
    @endforeach
</ul>
@endsection