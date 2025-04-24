<div class="px-4 py-5 mb-5 text-center bg-hero" id="inicio">
    <div class="col-lg-6 mx-auto">
        <svg class="bi me-2 text-body-emphasis" width="72" height="57">
            <use xlink:href="#bootstrap"></use>
        </svg>
        <h1 class="display-5 text-body-emphasis">Stay Flow</h1>
    </div>
    <div class="col-lg-6 mx-auto">
        <p class="h3 mb-4">La solución todo en uno para gestionar tu pequeño negocio hotelero e incrementar ganancias.</p>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
            <a href="{{ route('register') }}" class="btn btn-primary btn-lg px-4 gap-3">¡Regístrate GRATIS!</a>
        </div>
    </div>
</div>

@push('styles')
    <style>
        .bg-hero {
            background: linear-gradient(to bottom, rgba(var(--bs-body-bg-rgb), 0.8) 50%, rgba(var(--bs-body-bg-rgb), 1)), url({{ asset('img/cover.webp') }});
            background-size: cover;
            background-repeat: no-repeat;
             background-attachment: fixed;
            background-position: bottom center;
            min-height: 80vh;

            display: flex;
            flex-flow: column;
            align-content: center;
            justify-content: center;
        }
    </style>
@endpush