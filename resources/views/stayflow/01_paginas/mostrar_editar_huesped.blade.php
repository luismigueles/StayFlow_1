@extends('stayflow.layoutbs')

@section('content')

@extends('stayflow.layoutbs')

@push('styles')
    <link href="{{ asset('css/sidebars.css') }}" rel="stylesheet">    
@endpush

@section('content')
    <main class="d-flex">
        <aside>
            @include('stayflow.03_componentes.menu_lateral')
        </aside>    
        <section class="w-100">


<article class="container">
    <h1>{{$accion}} Huesped</h1>

    <!-- Verificar si hay algún mensaje de éxito -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Formulario para registrar al huésped -->
    <form action="{{ $ruta }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control @error('nombre') is-invalid @enderror" @if($accion=='mostrar') readonly @endif id="nombre" name="nombre" value="{{ $data->nombre }}" required>
            @error('nombre')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="telefono">Teléfono</label>
            <input type="text" class="form-control @error('telefono') is-invalid @enderror" id="telefono" name="telefono" value="{{ $data->telefono }}" required>
            @error('telefono')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="email">Correo Electrónico</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ $data->email }}" required>
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        @if($accion=='editar')
        <button type="submit" class="btn btn-primary mt-3">{{$accion}}</button>
        @endif
        
    </form>
</article>

 </section>
        @include('stayflow.03_componentes.iconos')
    </main>
@endsection