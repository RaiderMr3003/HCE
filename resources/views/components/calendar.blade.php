<style>
    #calendar {
        width: 100%;
        max-width: auto;
        height: 750px;
        margin: auto;
    }
    </style>

<div id="calendar"></div>

<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Nueva Cita</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="eventForm">
                    <div class="mb-3">
                        <label for="eventTitle" class="form-label">Buscar Paciente</label>
                        <select name="txtPaciente" id="txtPaciente" class="form-select" id="txtPaciente" required>
                            <option value=""></option>
                            <option value="NUEVO">(PACIENTE NUEVO)</option>
                        </select>
                    </div>
                    <div class="row align-items-center">
                        <div class="col mb-3">
                            <label for="citainicio" class="form-label">Hora de inicio</label>
                            <input type="text" class="form-control" id="citainicio" readonly>
                        </div>
                        <div class="col mb-3">
                            <label for="citafin" class="form-label">Hora de fin</label>
                            <input type="text" class="form-control" id="citafin" readonly>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="tpcita" class="form-label">Tipo de Cita</label>
                        <select class="form-select" id="tpcita">
                            <option value="Consulta">Consulta</option>
                            <option value="Revisión">Revisión</option>
                            <option value="Otro">Otro</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary">Guardar</button>
            </div>
        </div>
    </div>
</div>