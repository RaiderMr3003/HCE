<style>
    #calendar {
        width: 100%;
        max-width: auto;
        height: 750px;
        margin: auto;
    }
</style>

<div id="calendar"></div>

<div class="modal fade" id="modal-cita" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #5263ff; color: white;">
                <h1 class="modal-title fs-5">Nueva Cita</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="form-cita">
                    <div class="row align-items-center">
                        <div class="col mb-3">
                            <label for="citaFecha" class="form-label">Fecha</label>
                            <input type="text" class="form-control" id="citaFecha" disabled>
                        </div>
                        <div class="col mb-3">
                            <label for="citainicio" class="form-label">H. Inicio</label>
                            <input type="text" class="form-control" id="citaInicio" disabled>
                        </div>
                        <div class="col mb-3">
                            <label for="citafin" class="form-label">H. Fin</label>
                            <input type="text" class="form-control" id="citaFin" disabled>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="eventTitle" class="form-label">Buscar Paciente</label>
                        <select name="txtPaciente" id="txtPaciente" required>
                        </select>
                        <input type="hidden" class="form-control" id="idPaciente" disabled>
                    </div>
                    <div class="row align-items-center d-none" id="pacienteNuevo" >
                        <div class="col mb-3">
                            <label for="nombres" class="form-label">Nombres</label>
                            <input type="text" class="form-control" id="nombre">
                        </div>
                        <div class="col mb-3">
                            <label for="ap_paterno" class="form-label">Apellido Paterno</label>
                            <input type="text" class="form-control" id="ap_paterno">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="tpcita" class="form-label">Tipo de Cita</label>
                        <select class="form-select" id="tpCita">
                            <option value=""></option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer ">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary">Guardar</button>
            </div>
        </div>
    </div>
</div>