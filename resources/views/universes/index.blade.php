<!DOCTYPE html>
<html>
<head>
    <title>Universos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-dark bg-dark mb-4">
        <div class="container">
            <span class="navbar-brand mb-0 h1">🌌 Gestión de Universos</span>
        </div>
    </nav>

    <div class="container">
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <div class="mb-3">
            <a href="{{ route('universes.create') }}" class="btn btn-primary">+ Nuevo Universo</a>
        </div>

        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Compañía</th>
                    <th>Edad</th>
                    <th>Superhéroes</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse($universes as $universe)
                <tr>
                    <td>{{ $universe->id }}</td>
                    <td>{{ $universe->name }}</td>
                    <td>{{ $universe->company }}</td>
                    <td>{{ $universe->age }} años</td>
                    <td>
                        @foreach($universe->superheroes as $hero)
                            <span class="badge bg-info">{{ $hero->name }}</span>
                        @endforeach
                    </td>
                    <td>
                        <a href="{{ route('universes.edit', $universe) }}" class="btn btn-sm btn-warning">Editar</a>
                        <form action="{{ route('universes.destroy', $universe) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Eliminar?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="text-center">No hay universos</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>
</html>