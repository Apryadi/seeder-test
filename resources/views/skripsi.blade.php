<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skripsi List</title>
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