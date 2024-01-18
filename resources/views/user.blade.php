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
    <form action="/users" method="post">
        @csrf
        <input type="text" name="cari" id="">
        <input type="submit" value="Cari">
    </form>
    <a href="users/create"><button type="button" class="mt-3 pt-3">Tambah Data</button></a>
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
        </tr>
        @foreach ($users as $key => $item)
            <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->username }}</td>
                <td>{{ $item->level }}</td>
            </tr>
        @endforeach
        
    </table>
</body>
</html>