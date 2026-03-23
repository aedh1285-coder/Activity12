<!DOCTYPE html>
<html>
<head>
    <title>Detalle del Universo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-dark bg-dark mb-4">
        <div class="container">
            <span class="navbar-brand mb-0 h1">Detalle del Universo</span>
        </div>
    </nav>

    <div class="container">
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <div class="card">
            <div class="card-header bg-dark text-white">
                <h3>{{ $universe->name }}</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th class="table-dark" style="width: 200px;">ID</th>
                        <td>{{ $universe->id }}</td>
                    </tr>
                    <tr>
                        <th class="table-dark">Nombre</th>
                        <td>{{ $universe->name }}</td>
                    </tr>
                    <tr>
                        <th class="table-dark">Compañía</th>
                        <td>{{ $universe->company }}</td>
                    </tr>
                    <tr>
                        <th class="table-dark">Edad</th>
                        <td>{{ $universe->age }} años</td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="mt-3">
            <a href="{{ route('universes.index') }}" class="btn btn-secondary">Volver</a>
            <a href="{{ route('universes.edit', $universe) }}" class="btn btn-warning">Editar</a>
            <form action="{{ route('universes.destroy', $universe) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('¿Eliminar?')">Eliminar</button>
            </form>
        </div>
    </div>
</body>
</html>