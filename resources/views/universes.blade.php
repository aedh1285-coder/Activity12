<!DOCTYPE html>
<html>
<head>
    <title>Universes</title>
    <style>
        table { border-collapse: collapse; width: 80%; margin: 20px auto; }
        th, td { border: 1px solid #ddd; padding: 12px; text-align: left; }
        th { background-color: #4CAF50; color: white; }
        tr:nth-child(even) { background-color: #f2f2f2; }
        h1 { text-align: center; color: #333; }
    </style>
</head>
<body>
    <h1>Universes List</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Company</th>
                <th>Age</th>
            </tr>
        </thead>
        <tbody>
            @forelse($universes as $universe)
            <tr>
                <td>{{ $universe->id }}</td>
                <td>{{ $universe->name }}</td>
                <td>{{ $universe->company }}</td>
                <td>{{ $universe->age }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="4" style="text-align: center;">No universes found</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>