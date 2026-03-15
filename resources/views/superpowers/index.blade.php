<!DOCTYPE html>
<html>
<head>
    <title>Superpoderes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-dark bg-dark mb-4">
        <div class="container">
            <span class="navbar-brand mb-0 h1">⚡ Gestión de Superpoderes</span>
        </div>
    </nav>

    <div class="container">
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="mb-3">
            <a href="{{ route('superpowers.create') }}" class="btn btn-primary">+ Nuevo Superpoder</a>
        </div>

        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse($superpowers as $power)
                <tr>
                    <td>{{ $power->id }}</td>
                    <td>{{ $power->name }}</td>
                    <td>{{ $power->description }}</td>
                    <td>
                        <a href="{{ route('superpowers.edit', $power) }}" class="btn btn-sm btn-warning">Editar</a>
                        <form action="{{ route('superpowers.destroy', $power) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Eliminar?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="text-center">No hay superpoderes</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>
</html>