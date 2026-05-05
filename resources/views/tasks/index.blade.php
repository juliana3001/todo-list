@extends('layouts.app')

@section('content')

@php
    $total = $tasks->count();
    $completadas = $tasks->where('completed', true)->count();
    $porcentaje = $total > 0 ? round(($completadas / $total) * 100) : 0;
@endphp

<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h1 class="h3 mb-0 fw-600">Mis Tareas</h1>
        <small class="text-muted">{{ $completadas }} de {{ $total }} completadas</small>
    </div>
    <a href="{{ route('tasks.create') }}" class="btn btn-primary px-4">
        + Nueva Tarea
    </a>
</div>

@if($total > 0)
<div class="card mb-4">
    <div class="card-body py-3">
        <div class="d-flex justify-content-between mb-1">
            <small class="text-muted">Progreso general</small>
            <small class="fw-500 text-muted">{{ $porcentaje }}%</small>
        </div>
        <div class="progress" style="height: 8px; border-radius: 4px;">
            <div class="progress-bar" style="width: {{ $porcentaje }}%; border-radius: 4px;"></div>
        </div>
    </div>
</div>
@endif

@if($tasks->isEmpty())
    <div class="card">
        <div class="empty-state">
            <div class="empty-icon">📝</div>
            <h5 class="text-muted mb-3">No tenés tareas todavía</h5>
            <a href="{{ route('tasks.create') }}" class="btn btn-primary px-4">
                Crear primera tarea
            </a>
        </div>
    </div>
@else
    @foreach($tasks as $task)
        <div class="card mb-3 task-card {{ $task->completed ? 'task-completed' : 'task-pending' }}">
            <div class="card-body d-flex justify-content-between align-items-center py-3 px-4">
                <div class="me-3">
                    <h6 class="mb-1 {{ $task->completed ? 'text-decoration-line-through text-muted' : 'fw-500' }}">
                        {{ $task->title }}
                    </h6>
                    @if($task->description)
                        <small class="text-muted">{{ $task->description }}</small>
                    @endif
                </div>
                <div class="d-flex gap-2 align-items-center flex-shrink-0">
                    <form action="{{ route('tasks.toggle', $task) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button type="submit"
                            class="{{ $task->completed ? 'btn-toggle-done' : 'btn-toggle-pending' }}"
                            title="{{ $task->completed ? 'Marcar pendiente' : 'Marcar completada' }}">
                            {{ $task->completed ? '✓' : '' }}
                        </button>
                    </form>
                    <a href="{{ route('tasks.edit', $task) }}"
                        class="btn btn-sm btn-outline-secondary px-3" style="border-radius: 8px;">
                        Editar
                    </a>
                    <form action="{{ route('tasks.destroy', $task) }}" method="POST"
                        onsubmit="return confirm('¿Eliminar esta tarea?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-outline-danger px-3" style="border-radius: 8px;">
                            Eliminar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
@endif

@endsection