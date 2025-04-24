@extends('stayflow.layoutbs')

@push('styles')
    <link href="{{ asset('css/sidebars.css') }}" rel="stylesheet">    
@endpush

@section('content')
<main class="d-flex">
    <aside>
        @include('stayflow.03_componentes.menu_lateral')
    </aside>
    <section class="container">
        <h1>Registrar Empleado</h1>

        <!-- Verificar si hay algún mensaje de éxito -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Formulario para registrar al huésped -->
        <form action="{{ route('huespedes.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control @error('nombre') is-invalid @enderror" id="nombre" name="nombre" value="{{ old('nombre') }}" required>
                @error('nombre')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="apellido">Apellido</label>
                <input type="text" class="form-control @error('apellido') is-invalid @enderror" id="apellido" name="apellido" value="{{ old('apellido') }}" required>
                @error('apellido')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" value="{{ old('password') }}" required>
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary mt-3">Registrar</button>
        </form>
    </section>
     @include('stayflow.03_componentes.iconos')
<main>
@endsection