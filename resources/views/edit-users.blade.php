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
    <form action="/users/update/{{ $users->id }}" method="post" enctype="multipart/form-data">
        @csrf
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="name" id="name" value="{{ $users->name }}"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email" id="email" value="{{ $users->email }}"></td>
            </tr>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username" id="username" value="{{ $users->username }}"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" id="password" value="{{ $users->password }}"></td>
            </tr>
            <tr>
                <td>Level</td>
                <td>
                    <select name="level" id="">
                        <option value="{{ $users->level }}">{{ $users->level }}</option>
                        <option value="admin">Admin</option>
                        <option value="operator">Operator</option>
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