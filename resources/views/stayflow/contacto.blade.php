<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contacto - StayFlow</title>
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
        .container {
            margin-top: 50px;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">StayFlow</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <!-- Contenido de Contacto -->
    <div class="container text-center">
        <h1 class="mt-5">Contacto</h1>
        <p class="lead">Información del WebAdmin</p>
        <div class="card bg-dark text-white mx-auto" style="max-width: 400px;">
            <div class="card-body">
                <h4>WebAdmin</h4>
                <p><strong>Nombre:</strong> LuisMiguel Mesonero</p>
                <p><strong>Mail:</strong> <a href="mailto:Luismix43@gmail.com" class="text-info">Luismix43@gmail.com</a></p>
                <p><strong>Teléfono:</strong> 654 332 445</p>
            </div>
        </div>
        <a href="http://localhost/StayFlow/resources/views/stayflow/landing_color.blade.php" class="btn btn-primary mt-3">Volver al inicio</a>
    </div>

    <!-- Footer -->
    <footer class="footer text-center py-3 mt-5">
        <p>&copy; 2025 StayFlow - Todos los derechos reservados.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
