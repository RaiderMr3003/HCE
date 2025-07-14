<!DOCTYPE html>
<html lang="es">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('icons/app.ico') }}">
    <title>HCE | Control de Citas</title>
    @vite(['resources/js/app.js', 'resources/js/Script_calendar.js'])
</head>
<body>
    <x-header />


    <div class="container-fluid my-4">
        <div class="row">
            <div class="col-md-2">
                <div class="card">
                    <div class="card-header">
                        <h5 class="h5 mb-0"><i class="bi bi-list-check me-2"></i>Control de Citas</h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <a href="#" class="text-secondary"><i class="bi bi-calendar4-week me-2"></i>Control de Citas</a>
                            </li>
                        </ul>
                    </div>
                    
                </div>
            </div>

            <div class="col-md-10" id="calendario">
                <div class="card mb-3">
                    <div class="card-header">
                        <h1 class="h5 mb-0"><i class="bi bi-calendar4-week me-2"></i>Control de Citas</h1>
                    </div>
                    <div class="card-body">
                        <!-- x-calendar -->
                        <x-calendar />
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <x-footer />
</body>
</html>