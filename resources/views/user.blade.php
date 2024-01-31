<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Pengguna</title>
</head>
<body>
    <h1>Data Pengguna</h1>
    @if(Session::get('pesan'))
        {{ Session::get('pesan') }}
    @endif
    <form action="/users" method="post" class="mb-3">
        @csrf
        <input type="text" name="cari" id="">
        <input type="submit" value="Cari">
    </form><br>
    <a href="users/create"><button type="button" class="pt-5">Tambah Data</button></a>
    <h4>Total Data Pengguna : {{ $total_users }}</h4>
    <h4>Total Data Admin : {{ $total_admin }}</h4>
    <h4>Total Data Operator : {{ $total_operator }}</h4>

    <table border="1">
        <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>EMAIL</th>
            <th>USERNAME</th>
            <th>LEVEL</th>
            <th>AKSI</th>
        </tr>
        @foreach ($users as $key => $item)
            <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->username }}</td>
                <td>{{ $item->level }}</td>
                <td>
                    <a href="/users/hapus/{{ $item->id }}" class="btn btn-outline-danger" onclick="return window.confirm('Anda Yakin Ingin Menghapus Data Ini ?')">Hapus</a>
                    <a href="/users/edit/{{ $item->id }}>">Edit</a>
                </td>
            </tr>
        @endforeach
        
    </table>
</body>
</html>