<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('icons/app.ico') }}">
    <title>HCE</title>
    @vite(['resources/js/app.js'])
</head>
<style>
        .card-body {
            display: flex;
            align-items: center;
        }

        .card-body img {
            max-width: 100px;
            border-radius: 50%;
            margin-right: 15px;
        }

        .separator {
            width: 100%;
            height: 1px;
            background-color: #ddd;
            margin: 10px 0;
        }
    </style>
<body>
    <x-header />

    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="card text-center shadow-lg p-3 mb-5 bg-white rounded" style="max-width: 400px;">
            <div class="card-header bg-primary text-white">
                <h5 class="card-title mb-0">¿Necesitas Ayuda?</h5>
            </div>
            <div class="card-body">
                <img src="https://static.vecteezy.com/system/resources/previews/015/911/602/non_2x/customer-support-icon-outline-style-vector.jpg" alt="Persona de ayuda">
                <div class="text-left">
                    <h6 class="card-subtitle text-muted"><strong>Nombre:</strong> Jhon Doe</h6> 
                    <p class="card-text mt-2">Si necesitas asistencia, no dudes en contactarme.</p>
                    <p><strong>Email:</strong> jhon.doe@example.com</p>
                    <p><strong>Teléfono:</strong> +51 456117890</p>
                </div>
            </div>
            <div class="card-footer text-muted">
                Disponible de 9:00 AM - 6:00 PM
            </div>
        </div>
    </div>

    <x-footer />
</body>

</html>