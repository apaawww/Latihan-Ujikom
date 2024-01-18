<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <style>
        /* body{
            background-color: rgb(241, 150, 195)
        } */
    </style>
</head>
<body>
    <form action="/login" method="post">
        @csrf
        <div class="container pt-4 mt-4">
            <div class="row justify-content-center align-item-center">
                <div class="col-md-4 py-4">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="text-center fw-bold pt-3">LOGIN</h3>
                            <div class="form-group">
                                <div class="col-mb-3">
                                    <label for="email" class="form-label fw-bold">Username</label>
                                    <input type="text" class="form-control" name="akun" id="akun" placeholder="Masukkan Username">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-mb-3">
                                    <label for="password" class="form-label fw-bold">Password</label>
                                    <input type="password" class="form-control" name="password" id="password" placeholder="Masukkan Password">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="pt-3 mb-3">
                                    <button class="btn btn-primary form-control" type="submit">LOGIN</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    
</body>
</html>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
