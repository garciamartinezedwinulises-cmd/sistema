@extends('layouts.app')
@section('content')

<h1 class="mb-4">Detalles del Usuario</h1>

<div class="card shadow-sm" style="max-width: 500px;">
    <div class="card-header bg-primary text-white">
        <h5 class="card-title mb-0">
            <i class="fas fa-user-circle me-2"></i> {{ $usuario->nombre }}
        </h5>
    </div>
    <div class="card-body">
        <ul class="list-group list-group-flush mb-3">
            <li class="list-group-item"><strong>ID en Sistema:</strong> {{ $usuario->id }}</li>
            <li class="list-group-item"><strong>Nombre Completo:</strong> {{ $usuario->nombre }}</li>
            <li class="list-group-item"><strong>Correo Electrónico:</strong> {{ $usuario->email }}</li>
            <li class="list-group-item"><strong>Registrado el:</strong> {{ $usuario->created_at->format('d/m/Y H:i') }}</li>
        </ul>
        
        <div class="d-flex gap-2">
            <a href="{{ route('usuarios.edit', $usuario) }}" class="btn btn-warning">
                <i class="fas fa-edit"></i> Editar
            </a>
            <a href="{{ route('usuarios.index') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Volver a la lista
            </a>
        </div>
    </div>
</div>

@endsection