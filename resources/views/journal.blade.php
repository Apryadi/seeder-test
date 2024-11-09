<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Journal List</title>
</head>
<body>
    <table>
        <tr>
            <th>Title</th>
            <th>Author</th>
            <th>Year Published</th>
            <th>Pages</th>
            <th>Price</th>
        </tr>
        @foreach($datas as $journals)
        <tr>
            <td>{{ $journals->title }}</td>
            <td>{{ $journals->penulis }}</td>
            <td>{{ $journals->tahunTerbit }}</td>
            <td>{{ $journals->penerbit }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>