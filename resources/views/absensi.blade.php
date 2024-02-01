<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Kehadiran</title>
</head>
<body>
    <h3>Data Kehadiran</h3>
    <table border="1" class="text-center">
        <tr>
            <th>Tanggal</th>
            <th>Nama Pengguna</th>
            <th>Email</th>
        </tr>
        @foreach ($absensi as $item)
        <tr>
            <td>{{ $item->tanggal }}</td>
            <td>{{ $item->user->name }}</td>
            <td>{{ $item->user->email }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
