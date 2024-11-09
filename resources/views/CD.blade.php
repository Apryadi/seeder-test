<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CD List</title>
</head>
<body>
    <table>
        <tr>
            <th>Judul</th>
            <th>Sutradara</th>
            <th>Tahun Terbit</th>
        </tr>
        @foreach($datas as $c_d_s)
        <tr>
            <td>{{ $c_d_s->judul }}</td>
            <td>{{ $c_d_s->sutradara }}</td>
            <td>{{ $c_d_s->tahunTerbit }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>