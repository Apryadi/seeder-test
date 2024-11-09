<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Newspaper List</title>
</head>
<body>
    <table>
        <tr>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Tahun Terbit</th>
            <th>Konten</th>
        </tr>
        @foreach($datas as $newspapers)
        <tr>
            <td>{{ $newspapers->judul }}</td>
            <td>{{ $newspapers->penulis }}</td>
            <td>{{ $newspapers->tahunTerbit }}</td>
            <td>{{ $newspapers->konten }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>