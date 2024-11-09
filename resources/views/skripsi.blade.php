<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skripsi List</title>
</head>
<body>
    <table>
    <tr>
            <th>Judul</th>
            <th>Nama Siswa</th>
            <th>Pembimbing</th>
            <th>Tanggal Sidang Skripsi</th>
        </tr>
        @foreach($datas as $skripsis)
        <tr>
            <td>{{ $skripsis->judul }}</td>
            <td>{{ $skripsis->namaSiswa }}</td>
            <td>{{ $skripsis->namaPembimbing }}</td>
            <td>{{ $skripsis->tanggalSidangSkripsi }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>