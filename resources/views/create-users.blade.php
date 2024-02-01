<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data</title>
</head>
<body>
    <form action="/users/add" method="post">
        @csrf
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="name" id="name"></td>
            </tr>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username" id="username"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email" id="email"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" id="password"></td>
            </tr>
            <tr>
                <td>Level</td>
                <td>
                    <select name="level" id="">
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