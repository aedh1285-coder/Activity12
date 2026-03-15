<!DOCTYPE html>
<html>
<head>
    <title>Editar Universo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-dark bg-dark mb-4">
        <div class="container">
            <span class="navbar-brand mb-0 h1">✏️ Editar Universo</span>
        </div>
    </nav>

    <div class="container">
        <div class="card">
            <div class="card-header">
                <h5>Editando: {{ $universe->name }}</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('universes.update', $universe) }}" method="POST">
                    @csrf
                    @method('PUT')
                    
                    <div class="mb-3">
                        <label class="form-label">Nombre</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $universe->name) }}" required>
                        @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Compañía</label>
                        <input type="text" name="company" class="form-control @error('company') is-invalid @enderror" value="{{ old('company', $universe->company) }}" required>
                        @error('company') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Años de existencia</label>
                        <input type="number" name="age" class="form-control @error('age') is-invalid @enderror" value="{{ old('age', $universe->age) }}" required>
                        @error('age') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    
                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-warning">Actualizar</button>
                        <a href="{{ route('universes.index') }}" class="btn btn-secondary">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>