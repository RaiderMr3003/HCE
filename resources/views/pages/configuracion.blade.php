<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HCE - Configuración</title>
    @vite(['resources/js/app.js'])
</head>

<body>
    <x-header />

    <div class="container-fluid my-4">
        <div class="row">
            <div class="col-md-2">
                <div class="card">
                    <div class="card-header">
                        <h5 class="h5 mb-0"><i class="bi bi-gear me-2"></i>Configuración</h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-group mb-3">
                            <li class="list-group-item">
                                <a href="#" class="text-secondary menu-link" data-target="perfil">
                                    <i class="bi bi-person-circle me-2"></i>Perfil
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a href="#" class="text-secondary menu-link" data-target="cambiar_contraseña">
                                    <i class="bi bi-tools me-2"></i>Cambiar Contraseña
                                </a>
                            </li>
                        </ul>
                        <ul class="list-group">
                            <li class="list-group-item">
                                <a href="{{ route('logout') }}" class="text-danger"><i class="bi bi-power me-2"></i>Cerrar Sesión</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-10">
                <div class="card mb-3 section" id="perfil">
                    <div class="card-header">
                        <h1 class="h5 mb-0"><i class="bi bi-person-circle me-2"></i>Perfil</h1>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombres</label>
                                <input type="text" class="form-control" id="nombre" value="Juan Pérez">
                            </div>
                            <div class="mb-3">
                                <label for="apellidos" class="form-label">Apellidos</label>
                                <input type="text" class="form-control" id="apellidos" value="Perez">
                            </div>
                            <button type="submit" class="btn btn-primary">Guardar cambios</button>
                        </form>
                    </div>
                </div>

                <div class="card mb-3 section" id="cambiar_contraseña" style="display: none;">
                    <div class="card-header">
                        <h1 class="h5 mb-0"><i class="bi bi-tools me-2"></i>Cambiar Contraseña</h1>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="mb-3">
                                <label for="old_password" class="form-label">Contraseña Actual</label>
                                <input type="password" class="form-control" id="old_password">
                            </div>
                            <div class="mb-3">
                                <label for="new_password" class="form-label">Nueva Contraseña</label>
                                <input type="password" class="form-control" id="new_password">
                            </div>
                            <div class="mb-3">
                                <label for="confirm_password" class="form-label">Confirmar Contraseña Nueva</label>
                                <input type="password" class="form-control" id="confirm_password">
                            </div>
                            <button type="submit" class="btn btn-primary">Actualizar Contraseña</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-footer />

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const menuLinks = document.querySelectorAll(".menu-link");
            const sections = document.querySelectorAll(".section");

            menuLinks.forEach(link => {
                link.addEventListener("click", function (event) {
                    event.preventDefault(); 
                    let targetId = this.getAttribute("data-target");
                    sections.forEach(section => section.style.display = "none");
                    document.getElementById(targetId).style.display = "block";
                    menuLinks.forEach(link => link.classList.remove("active"));
                    this.classList.add("active");
                });
            });
        });
    </script>

</body>

</html>
