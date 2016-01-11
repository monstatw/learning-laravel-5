@extends('app')

@section('content')
    <h1>{{ $task->name }}</h1>
    <task>
        {{ $task->desc }}
    </task>
@endsection