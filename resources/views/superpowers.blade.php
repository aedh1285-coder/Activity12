<!DOCTYPE html>
<html>
<head>
    <title>Superpowers</title>
    <style>
        table { border-collapse: collapse; width: 80%; margin: 20px auto; }
        th, td { border: 1px solid #ddd; padding: 12px; text-align: left; }
        th { background-color: #f44336; color: white; }
        tr:nth-child(even) { background-color: #f2f2f2; }
        h1 { text-align: center; color: #333; }
    </style>
</head>
<body>
    <h1>Superpowers List</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            @forelse($superpowers as $power)
            <tr>
                <td>{{ $power->id }}</td>
                <td>{{ $power->name }}</td>
                <td>{{ $power->description }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="3" style="text-align: center;">No superpowers found</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>