<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book List</title>
</head>
<body>
    <table>
        <tr>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Tahun Terbit</th>
            <th>penerbit</th>
        </tr>
        @foreach($datas as $books)
        <tr>
            <td>{{ $books->title }}</td>
            <td>{{ $books->penulis }}</td>
            <td>{{ $books->tahunTerbit }}</td>
            <td>{{ $books->penerbit }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>