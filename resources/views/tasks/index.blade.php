@extends('app')

@section('content')
    <h1>Tasks</h1>
    <hr/>
    @foreach($tasks as $task)
        <task>
            <h2>
                <a href="{{ url('tasks', $task->id) }}">{{ $task->name }}</a>
            </h2>
            <div class="body">{{ $task->desc }}</div>
        </task>
    @endforeach
@endsection