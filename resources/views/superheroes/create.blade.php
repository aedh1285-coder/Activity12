<!DOCTYPE html>
<html>
<head>
    <title>Crear Superhéroe</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-dark bg-dark mb-4">
        <div class="container">
            <span class="navbar-brand mb-0 h1">➕ Nuevo Superhéroe</span>
        </div>
    </nav>

    <div class="container">
        <div class="card">
            <div class="card-header">
                <h5>Crear Superhéroe</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('superheroes.store') }}" method="POST">
                    @csrf
                    
                    <div class="mb-3">
                        <label class="form-label">Nombre</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required>
                        @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Nombre Real</label>
                        <input type="text" name="real_name" class="form-control @error('real_name') is-invalid @enderror" value="{{ old('real_name') }}">
                        @error('real_name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Género</label>
                        <select name="gender" class="form-control @error('gender') is-invalid @enderror" required>
                            <option value="">Seleccionar</option>
                            <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>Masculino</option>
                            <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>Femenino</option>
                            <option value="Other" {{ old('gender') == 'Other' ? 'selected' : '' }}>Otro</option>
                        </select>
                        @error('gender') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Universo</label>
                        <select name="universe_id" class="form-control @error('universe_id') is-invalid @enderror" required>
                            <option value="">Seleccionar universo</option>
                            @foreach($universes as $universe)
                                <option value="{{ $universe->id }}" {{ old('universe_id') == $universe->id ? 'selected' : '' }}>
                                    {{ $universe->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('universe_id') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    
                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                        <a href="{{ route('superheroes.index') }}" class="btn btn-secondary">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>