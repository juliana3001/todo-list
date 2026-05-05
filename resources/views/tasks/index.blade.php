@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="h3">Mis Tareas</h1>
            <a href="{{ route('tasks.create') }}" class="btn btn-primary">
                + Nueva Tarea
            </a>
        </div>

        @if($tasks->isEmpty())
            <div class="card text-center p-5">
                <p class="text-muted mb-3">No tenés tareas todavía.</p>
                <a href="{{ route('tasks.create') }}" class="btn btn-primary">
                    Crear primera tarea
                </a>
            </div>
        @else
            @foreach($tasks as $task)
                <div class="card mb-3 {{ $task->completed ? 'border-success' : '' }}">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="card-title mb-1 {{ $task->completed ? 'text-decoration-line-through text-muted' : '' }}">
                                {{ $task->title }}
                            </h5>
                            @if($task->description)
                                <p class="card-text text-muted small mb-0">
                                    {{ $task->description }}
                                </p>
                            @endif
                        </div>
                        <div class="d-flex gap-2">
                            <form action="{{ route('tasks.toggle', $task) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <button class="btn btn-sm {{ $task->completed ? 'btn-success' : 'btn-outline-success' }}">
                                    {{ $task->completed ? '✓' : '○' }}
                                </button>
                            </form>
                            <a href="{{ route('tasks.edit', $task) }}" class="btn btn-sm btn-outline-primary">
                                Editar
                            </a>
                            <form action="{{ route('tasks.destroy', $task) }}" method="POST"
                                onsubmit="return confirm('¿Eliminar esta tarea?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-outline-danger">
                                    Eliminar
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</div>
@endsection