<!DOCTYPE html>
<html>
<head>
    <title>Superhéroes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-dark bg-dark mb-4">
        <div class="container">
            <span class="navbar-brand mb-0 h1">🦸 Gestión de Superhéroes</span>
        </div>
    </nav>

    <div class="container">
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="mb-3">
            <a href="{{ route('superheroes.create') }}" class="btn btn-primary">+ Nuevo Superhéroe</a>
        </div>

        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Nombre Real</th>
                    <th>Género</th>
                    <th>Universo</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse($superheroes as $hero)
                <tr>
                    <td>{{ $hero->id }}</td>
                    <td>{{ $hero->name }}</td>
                    <td>{{ $hero->real_name ?? 'Desconocido' }}</td>
                    <td>
                        @if($hero->gender == 'Male') Masculino
                        @elseif($hero->gender == 'Female') Femenino
                        @else Otro @endif
                    </td>
                    <td>{{ $hero->universe->name ?? 'N/A' }}</td>
                    <td>
                        <a href="{{ route('superheroes.edit', $hero) }}" class="btn btn-sm btn-warning">Editar</a>
                        <form action="{{ route('superheroes.destroy', $hero) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Eliminar?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="text-center">No hay superhéroes</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>
</html>