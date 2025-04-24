@extends('stayflow.layoutbs')

@push('styles')
    <link href="{{ asset('css/sidebars.css') }}" rel="stylesheet">    
@endpush

@push('scripts')
    
@endpush

@section('content')
    <main class="d-flex">
        <aside>
            @include('stayflow.03_componentes.menu_lateral')
        </aside>    
        <section class="w-100">
           

           
        </section>
        @include('stayflow.03_componentes.iconos')
    </main>
@endsection