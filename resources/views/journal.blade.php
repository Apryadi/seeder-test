<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Journal List</title>
</head>
<body>
    <a href="/book">Buku</a>
    <a href="/CD">CD</a>
    <a href="/journal">Jurnal</a>
    <a href="/newspaper">Koran</a>
    <a href="/skripsi">Skripsi</a>
    <a href="/home">Kembali Ke awal</a>
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