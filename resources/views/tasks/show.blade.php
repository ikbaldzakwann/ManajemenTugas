@extends('layout')

@section('content')
    <h1>Task Detail</h1>

    <div class="card mt-3">
        <div class="card-header">
            <h5>{{ $task->title }}</h5>
        </div>
        <div class="card-body">
            <p><strong>Description:</strong> {{ $task->description }}</p>
            <p><strong>Status:</strong> {{ $task->is_completed ? 'Completed' : 'Pending' }}</p>
            <p><strong>Created At:</strong> {{ $task->created_at->format('d-m-Y H:i') }}</p>
            <p><strong>Updated At:</strong> {{ $task->updated_at->format('d-m-Y H:i') }}</p>
            <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Back to Task List</a>
            <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>
@endsection
