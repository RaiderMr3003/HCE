<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('icons/app.ico') }}">

    <title>HCE | Login</title>
    @vite(['resources/js/app.js'])
    
</head>

<body class="d-flex align-items-center justify-content-center vh-100 bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-4">
                <div class="card shadow-lg border-0 rounded-4">
                    <div class="row g-0">
                        <div class="col-md-12 d-flex justify-content-center p-3 bg-light">
                            <img src="{{ asset('images/logo_dark.webp') }}" class="img-fluid" alt="Logo">
                        </div>
                        <div class="col-md-12 p-4">
                            <form class="row g-3 align-items-end" method="POST" action="{{ route('inicia-sesion') }}">
                                @csrf
                                <div class="form mb-2">
                                    <div class="input-group">
                                        <span class="input-group-text">
                                            <i class="bi bi-person"></i>
                                        </span>
                                        <input type="text" class="form-control" name="username" id="usernameInput" placeholder="Usuario" required>
                                    </div>
                                </div>
                                <div class="form mb-2">
                                    <div class="input-group">
                                        <span class="input-group-text">
                                            <i class="bi bi-unlock2"></i>
                                        </span>
                                        <input type="password" class="form-control" name="password" id="passwordInput" placeholder="Contraseña" required>
                                    </div>
                                </div>
                                <div class="form">
                                    <button class="btn btn-primary w-100 form-control" type="submit">Ingresar</button>
                                </div>
                                @if ($errors->has('login_error'))
                                    <div class="alert alert-danger">{{ $errors->first('login_error') }}</div>
                                @endif
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
