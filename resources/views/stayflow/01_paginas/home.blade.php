@extends('stayflow.layoutbs')

@push('styles')
   
@endpush

@push('scripts')
    
@endpush

@section('content')
    @include('stayflow.03_componentes.menu_horizontal')

    @include('stayflow.02_secciones.portada')
    @include('stayflow.02_secciones.caracteristicas')
    @include('stayflow.02_secciones.precios')
    @include('stayflow.02_secciones.footer')

    @include('stayflow.03_componentes.iconos')
@endsection
