@extends('layout/default')

@section('content')

<a href="{{ route('tasks.edit', $task) }}" class="btn btn-primary">Labot</a>
<h1>{{ $task->name }}, {{ $task->hours }}</h1>
<p>{{ $task->description }}


@endsection