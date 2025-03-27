<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('icons/app.ico') }}">
    <title>HCE | Historia Clinica</title>
    @vite(['resources/js/app.js'])
</head>

<body>
    <x-header />


    <div class="container-fluid my-4">
        <div class="row">
            <div class="col-md-2">
                <div class="card">
                    <div class="card-header">
                        <h5 class="h5 mb-0"><i class="bi bi-clipboard-pulse me-2"></i>Historia Clínica</h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <a href="#" class="text-secondary"><i class="bi bi-search me-2"></i>Buscar Historia Clínica</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-10" id="buscar_hc">
                <div class="card mb-3">
                    <div class="card-header">
                        <h1 class="h5 mb-0"><i class="bi bi-search me-2"></i>Buscar Historia Clínica</h1>
                    </div>
                    <div class="card-body">
                        <form class="row g-3 align-items-end" role="search">
                            <div class="col-12">
                                <span class="form-label fw-bold">Buscar por...</span>
                            </div>
                            <div class="col-12 col-md-2">
                                <select name="" id="" class="form-select">
                                    <option value="1">TIPO DE DOCUMENTO</option>
                                    <option value="2">NRO. DE DOCUMENTO</option>
                                    <option value="3">APELLIDO PATERNO</option>
                                    <option value="4">APELLIDO MATERNO</option>
                                    <option value="5">NOMBRES</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-8">
                                <input class="form-control" type="search" placeholder="Buscar..." aria-label="Search">
                            </div>
                            <div class="col-12 col-md-2">
                                <button class="btn btn-outline-success w-100" type="submit"><i class="bi bi-search me-2"></i>Buscar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <x-footer />
</body>

</html>