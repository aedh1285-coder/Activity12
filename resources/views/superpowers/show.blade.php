<!DOCTYPE html>
<html>
<head>
    <title>Detalle del Superpoder</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-dark bg-dark mb-4">
        <div class="container">
            <span class="navbar-brand mb-0 h1">⚡ Detalle del Superpoder</span>
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
                <h3>{{ $superpower->name }}</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th class="table-dark" style="width: 200px;">ID</th>
                        <td>{{ $superpower->id }}</td>
                    </tr>
                    <tr>
                        <th class="table-dark">Nombre</th>
                        <td>{{ $superpower->name }}</td>
                    </tr>
                    <tr>
                        <th class="table-dark">Descripción</th>
                        <td>{{ $superpower->description ?? 'Sin descripción' }}</td>
                    </tr>
                    <tr>
                        <th class="table-dark">Fecha de Creación</th>
                        <td>{{ $superpower->created_at->format('d/m/Y H:i:s') }}</td>
                    </tr>
                    <tr>
                        <th class="table-dark">Última Actualización</th>
                        <td>{{ $superpower->updated_at->format('d/m/Y H:i:s') }}</td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="mt-3">
            <a href="{{ route('superpowers.index') }}" class="btn btn-secondary">Volver</a>
            <a href="{{ route('superpowers.edit', $superpower) }}" class="btn btn-warning">Editar</a>
            <form action="{{ route('superpowers.destroy', $superpower) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('¿Eliminar?')">Eliminar</button>
            </form>
        </div>
    </div>
</body>
</html>