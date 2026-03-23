<!DOCTYPE html>
<html>
<head>
    <title>Panel de Control - Superhéroes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card:hover {
            transform: translateY(-5px);
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }
        .card {
            transition: all 0.3s ease;
            cursor: pointer;
        }
        .hero-icon {
            font-size: 4rem;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark mb-4">
        <div class="container">
            <span class="navbar-brand mb-0 h1">Panel de Control - Sistema de Superhéroes</span>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card text-center" onclick="window.location='{{ route('universes.index') }}'">
                    <div class="card-body">
                        <div class="hero-icon"></div>
                        <h3 class="card-title">Universos</h3>
                        <p class="card-text">Gestiona los universos de tus superhéroes favoritos</p>
                        <a href="{{ route('universes.index') }}" class="btn btn-primary">Ver Universos →</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card text-center" onclick="window.location='{{ route('superheroes.index') }}'">
                    <div class="card-body">
                        <div class="hero-icon"></div>
                        <h3 class="card-title">Superhéroes</h3>
                        <p class="card-text">Gestiona todos los superhéroes y sus poderes</p>
                        <a href="{{ route('superheroes.index') }}" class="btn btn-primary">Ver Superhéroes →</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card text-center" onclick="window.location='{{ route('superpowers.index') }}'">
                    <div class="card-body">
                        <div class="hero-icon"></div>
                        <h3 class="card-title">Superpoderes</h3>
                        <p class="card-text">Gestiona todos los superpoderes disponibles</p>
                        <a href="{{ route('superpowers.index') }}" class="btn btn-primary">Ver Superpoderes →</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>