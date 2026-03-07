<!DOCTYPE html>
<html>
<head>
    <title>Superheroes</title>
    <style>
        table { border-collapse: collapse; width: 90%; margin: 20px auto; }
        th, td { border: 1px solid #ddd; padding: 12px; text-align: left; }
        th { background-color: #2196F3; color: white; }
        tr:nth-child(even) { background-color: #f2f2f2; }
        h1 { text-align: center; color: #333; }
        
        /* Estilos para formularios */
        .form-container {
            width: 90%;
            margin: 20px auto;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 8px;
            border: 1px solid #ddd;
        }
        
        .form-group {
            margin-bottom: 15px;
        }
        
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }
        
        input, select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }
        
        .btn {
            display: inline-block;
            padding: 8px 16px;
            margin: 5px;
            text-decoration: none;
            border-radius: 4px;
            color: white;
            border: none;
            cursor: pointer;
        }
        
        .btn-create {
            background-color: #4CAF50;
            margin: 20px auto;
            display: block;
            width: 200px;
            text-align: center;
        }
        
        .btn-edit {
            background-color: #FFC107;
            color: black;
        }
        
        .btn-save {
            background-color: #2196F3;
        }
        
        .btn-cancel {
            background-color: #6c757d;
        }
        
        .success-message {
            background-color: #d4edda;
            color: #155724;
            padding: 12px;
            margin: 20px auto;
            width: 90%;
            border-radius: 4px;
            border: 1px solid #c3e6cb;
        }
        
        .edit-form {
            background-color: #fff3cd;
            border: 1px solid #ffeeba;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 20px;
        }
        
        .edit-form h3 {
            margin-top: 0;
            color: #856404;
        }
    </style>
</head>
<body>
    <h1>Superheroes Management</h1>

    <!-- Mostrar mensaje de éxito -->
    @if(session('success'))
        <div class="success-message">
            {{ session('success') }}
        </div>
    @endif

    <!-- Botón para mostrar formulario de creación -->
    <button onclick="showCreateForm()" class="btn btn-create">+ Crear Nuevo Superhéroe</button>

    <!-- Formulario de creación (oculto por defecto) -->
    <div id="createForm" class="form-container" style="display: none;">
        <h3>Crear Nuevo Superhéroe</h3>
        <form action="{{ route('superheroes.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label>Nombre:</label>
                <input type="text" name="name" required>
            </div>
            
            <div class="form-group">
                <label>Nombre Real:</label>
                <input type="text" name="real_name">
            </div>
            
            <div class="form-group">
                <label>Género:</label>
                <select name="gender" required>
                    <option value="">Seleccionar</option>
                    <option value="Male">Masculino</option>
                    <option value="Female">Femenino</option>
                    <option value="Other">Otro</option>
                </select>
            </div>
            
            <div class="form-group">
                <label>Universo:</label>
                <select name="universe_id" required>
                    <option value="">Seleccionar universo</option>
                    @foreach($universes as $universe)
                        <option value="{{ $universe->id }}">{{ $universe->name }}</option>
                    @endforeach
                </select>
            </div>
            
            <button type="submit" class="btn btn-save">Guardar</button>
            <button type="button" onclick="hideCreateForm()" class="btn btn-cancel">Cancelar</button>
        </form>
    </div>

    <!-- Formulario de edición (solo visible cuando se edita) -->
    @if(isset($superhero))
    <div class="edit-form">
        <h3>Editando: {{ $superhero->name }}</h3>
        <form action="{{ route('superheroes.update', $superhero) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>Nombre:</label>
                <input type="text" name="name" value="{{ $superhero->name }}" required>
            </div>
            
            <div class="form-group">
                <label>Nombre Real:</label>
                <input type="text" name="real_name" value="{{ $superhero->real_name }}">
            </div>
            
            <div class="form-group">
                <label>Género:</label>
                <select name="gender" required>
                    <option value="Male" {{ $superhero->gender == 'Male' ? 'selected' : '' }}>Masculino</option>
                    <option value="Female" {{ $superhero->gender == 'Female' ? 'selected' : '' }}>Femenino</option>
                    <option value="Other" {{ $superhero->gender == 'Other' ? 'selected' : '' }}>Otro</option>
                </select>
            </div>
            
            <div class="form-group">
                <label>Universo:</label>
                <select name="universe_id" required>
                    @foreach($universes as $universe)
                        <option value="{{ $universe->id }}" 
                            {{ $superhero->universe_id == $universe->id ? 'selected' : '' }}>
                            {{ $universe->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            
            <button type="submit" class="btn btn-save">Actualizar</button>
            <a href="{{ route('superheroes.index') }}" class="btn btn-cancel">Cancelar</a>
        </form>
    </div>
    @endif

    <!-- Tabla de superhéroes -->
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Real Name</th>
                <th>Gender</th>
                <th>Universe</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($superheroes as $hero)
            <tr>
                <td>{{ $hero->id }}</td>
                <td>{{ $hero->name }}</td>
                <td>{{ $hero->real_name ?? 'Unknown' }}</td>
                <td>{{ $hero->gender }}</td>
                <td>{{ $hero->universe->name ?? 'N/A' }}</td>
                <td>
                    <a href="{{ route('superheroes.edit', $hero) }}" class="btn btn-edit">Editar</a>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="6" style="text-align: center;">No superheroes found</td>
            </tr>
            @endforelse
        </tbody>
    </table>

    <script>
        function showCreateForm() {
            document.getElementById('createForm').style.display = 'block';
        }
        
        function hideCreateForm() {
            document.getElementById('createForm').style.display = 'none';
        }
    </script>
</body>
</html>