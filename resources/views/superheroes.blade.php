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
    </style>
</head>
<body>
    <h1>Superheroes List</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Real Name</th>
                <th>Gender</th>
                <th>Universe</th>
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
            </tr>
            @empty
            <tr>
                <td colspan="5" style="text-align: center;">No superheroes found</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>