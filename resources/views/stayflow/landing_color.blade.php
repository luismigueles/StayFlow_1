<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>StayFlow - Gestión Hotelera</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #4a4e51;
            color: #ecf5f4;
        }
        .navbar, .footer {
            background-color: #3a3d40 !important;
        }
        .navbar-dark .navbar-nav .nav-link {
            color: #ecf5f4 !important;
        }
        .navbar-brand {
            color: #ecf5f4 !important;
        }
        .bg-primary {
            background-color: #5a9ea8 !important;
        }
        .btn-light {
            color: #4a4e51;
            background-color: #ecf5f4;
            border: none;
        }
        .bg-light {
            background-color: #5a646b !important;
            color: #ecf5f4 !important;
        }
        .btn-primary {
            background-color: #6aa3b3;
            border-color: #6aa3b3;
        }
        .btn-primary:hover {
            background-color: #5a9ea8;
            border-color: #5a9ea8;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="#">StayFlow</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="#features">Características</a></li>
                <li class="nav-item"><a class="nav-link" href="#testimonials">Testimonios</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Contacto</a></li>
                <li class="nav-item">
                       <a href="{{route('login')}}" class="btn btn-light ms-3">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

    
    <header class="bg-primary text-white text-center py-5">
        <div class="container">
            <h1>Optimiza la gestión de tu hotel con StayFlow</h1>
            <p class="lead">Una plataforma segura y eficiente para administrar tu hotel sin complicaciones.</p>
            <a href="#contact" class="btn btn-light btn-lg">Solicita una Demo</a>
        </div>
    </header>
    
    <section id="features" class="py-5">
        <div class="container text-center">
            <h2>Características</h2>
            <div class="row mt-4">
                <div class="col-md-4">
                    <h4>Gestión de Reservas</h4>
                    <p>Administra habitaciones y reservas de manera sencilla.</p>
                </div>
                <div class="col-md-4">
                    <h4>Control de Personal</h4>
                    <p>Optimiza la comunicación y asignación de tareas.</p>
                </div>
                <div class="col-md-4">
                    <h4>Seguridad y Autonomía</h4>
                    <p>Funciona sin depender de plataformas externas.</p>
                </div>
            </div>
        </div>
    </section>
    
    <section id="testimonials" class="bg-light py-5">
        <div class="container text-center">
            <h2>Testimonios</h2>
            <div class="row mt-4">
                <div class="col-md-6">
                    <blockquote class="blockquote">
                        <p>"StayFlow nos ha simplificado la vida. Ahora todo está bajo control."</p>
                        <footer class="blockquote-footer">Juan Pérez, Hotel Sol</footer>
                    </blockquote>
                </div>
                <div class="col-md-6">
                    <blockquote class="blockquote">
                        <p>"La mejor inversión que hemos hecho en gestión hotelera."</p>
                        <footer class="blockquote-footer">Ana López, Hotel Estrella</footer>
                    </blockquote>
                </div>
            </div>
        </div>
    </section>
    
    <section id="contact" class="py-5 text-center">
        <div class="container">
            <h2>Contacto</h2>
            <p>Solicita más información o una demostración personalizada.</p>
            <a href="http://localhost/StayFlow/resources/views/stayflow/contacto.blade.php" class="btn btn-primary mt-3">Contáctanos</a>
        </div>
    </section>
    
    <footer class="footer text-white text-center py-3">
        <p>&copy; 2025 StayFlow - Todos los derechos reservados.</p>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
