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
                <a href="{{ url('/empleados/create') }}">crear nuevo empleado</a>
                @include('stayflow.03_componentes.table')
            </article>
        </section>
        @include('stayflow.03_componentes.iconos')
    </main>
@endsection