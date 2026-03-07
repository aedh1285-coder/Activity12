<!DOCTYPE html>
<html>
<head>
    <title>Universos</title>
    <style>
        table { border-collapse: collapse; width: 90%; margin: 20px auto; }
        th, td { border: 1px solid #ddd; padding: 12px; text-align: left; }
        th { background-color: #4CAF50; color: white; }
        tr:nth-child(even) { background-color: #f2f2f2; }
        h1 { text-align: center; color: #333; }
        
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
        
        input {
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
            background-color: #4CAF50;
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

        .heroes-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        
        .heroes-list li {
            background-color: #e3f2fd;
            padding: 4px 8px;
            margin: 2px 0;
            border-radius: 4px;
            font-size: 0.9em;
        }
    </style>
</head>
<body>
    <h1>Universos Management</h1>

    @if(session('success'))
        <div class="success-message">
            {{ session('success') }}
        </div>
    @endif

    <button onclick="showCreateForm()" class="btn btn-create">+ Crear Nuevo Universo</button>

    <!-- Formulario de creación -->
    <div id="createForm" class="form-container" style="display: none;">
        <h3>Crear Nuevo Universo</h3>
        <form action="{{ route('universes.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label>Nombre del Universo:</label>
                <input type="text" name="name" placeholder="Ej: Marvel, DC" required>
            </div>
            
            <div class="form-group">
                <label>Compañía:</label>
                <input type="text" name="company" placeholder="Ej: Marvel Studios, DC Comics" required>
            </div>
            
            <div class="form-group">
                <label>Edad (años de existencia):</label>
                <input type="number" name="age" placeholder="Ej: 84" required>
            </div>
            
            <button type="submit" class="btn btn-save">Guardar</button>
            <button type="button" onclick="hideCreateForm()" class="btn btn-cancel">Cancelar</button>
        </form>
    </div>

    <!-- Formulario de edición -->
    @if(isset($universe))
    <div class="edit-form">
        <h3>Editando Universo: {{ $universe->name }}</h3>
        <form action="{{ route('universes.update', $universe) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>Nombre del Universo:</label>
                <input type="text" name="name" value="{{ $universe->name }}" required>
            </div>
            
            <div class="form-group">
                <label>Compañía:</label>
                <input type="text" name="company" value="{{ $universe->company }}" required>
            </div>
            
            <div class="form-group">
                <label>Edad (años de existencia):</label>
                <input type="number" name="age" value="{{ $universe->age }}" required>
            </div>
            
            <button type="submit" class="btn btn-save">Actualizar</button>
            <a href="{{ route('universes.index') }}" class="btn btn-cancel">Cancelar</a>
        </form>
    </div>
    @endif

    <!-- Tabla de universos -->
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Compañía</th>
                <th>Edad</th>
                <th>Superhéroes</th>
                <th>Cantidad</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse($universes as $universe)
            <tr>
                <td>{{ $universe->id }}</td>
                <td><strong>{{ $universe->name }}</strong></td>
                <td>{{ $universe->company }}</td>
                <td>{{ $universe->age }} años</td>
                <td>
                    @if($universe->superheroes->count() > 0)
                        <ul class="heroes-list">
                            @foreach($universe->superheroes as $hero)
                                <li>{{ $hero->name }}</li>
                            @endforeach
                        </ul>
                    @else
                        <em>No hay superhéroes</em>
                    @endif
                </td>
                <td style="text-align: center;">
                    <span style="background-color: #4CAF50; color: white; padding: 4px 8px; border-radius: 4px;">
                        {{ $universe->superheroes->count() }}
                    </span>
                </td>
                <td>
                    <a href="{{ route('universes.edit', $universe) }}" class="btn btn-edit">Editar</a>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="7" style="text-align: center;">No hay universos creados</td>
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