<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data</title>
</head>
<body>
    <h1>Form Data Pengguna</h1>
    <form action="{{ $action }}" method="post">
        @csrf
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="name" id="name" value="{{ $users->name==''?old('name'):$users->name }}"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email" id="email" value="{{ $users->email==''?old('email'):$users->email }}"></td>
            </tr>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username" id="username" value="{{ $users->username==''?old('username'):$users->username }}"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" id="password" value="{{ $users->password==''?old('password'):$users->password }}"></td>
            </tr>
            <tr>
                <td>Level</td>
                <td>
                    <select name="level" id="">
                        <option value="admin" {{ $users->level=="admin"?"checked":"" }}>Admin</option>
                        <option value="L" {{ $users->level=="operator"?"checked":"" }}>Operator</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><input type="submit" value="SIMPAN"></td>
            </tr>
        </table>
    </form>
</body>
</html>