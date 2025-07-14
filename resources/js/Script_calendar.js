import { Calendar } from '@fullcalendar/core'
import timeGridPlugin from '@fullcalendar/timegrid';
import interactionPlugin from '@fullcalendar/interaction';
import esLocale from '@fullcalendar/core/locales/es';
import { Modal } from 'bootstrap';

import bootstrap5Plugin from '@fullcalendar/bootstrap5';

document.addEventListener('DOMContentLoaded', function () {
    let calendar;
    
    function init() {
        const calendarEl = document.getElementById('calendar');
        const modalCita = new Modal(document.getElementById('modal-cita'));

        calendar = new Calendar(calendarEl, {
            plugins: [timeGridPlugin, interactionPlugin, bootstrap5Plugin],
            themeSystem: 'bootstrap5',
            initialView: 'timeGridWeek',
            headerToolbar: {
                left: 'prev,today,next',
                center: 'title',
                right: 'timeGridDay,timeGridWeek'
            },
            allDaySlot: false,
            locale: esLocale,
            timeZone: 'local',
            slotMinTime: "08:00:00",
            slotMaxTime: "21:00:00",
            slotDuration: "00:30:00",
            slotLabelInterval: "00:30:00",
            nowIndicator: true,
            titleFormat: {
                month: 'short',
                day: '2-digit',
                weekday: 'short'
            },
            slotLabelFormat: {
                hour: '2-digit',
                minute: '2-digit',
                hour12: false
            },
            dayHeaderFormat: formatearCabeceraDia,
            selectable: true,
            selectAllow: function(selectInfo) {
                const duration = selectInfo.end - selectInfo.start;
                return duration === 30 * 60 * 1000;
            },
            select: function(info) {

                const fechaCita = new Date(info.start).toLocaleDateString('es-PE', {
                    day: '2-digit',
                    month: '2-digit',
                    year: 'numeric',
                });

                const horaInicio = new Date(info.start).toLocaleTimeString('es-PE', {
                    hour: '2-digit',
                    minute: '2-digit',
                    hour12: false
                });

                const horaFin = new Date(info.end).toLocaleTimeString('es-PE', {
                    hour: '2-digit',
                    minute: '2-digit',
                    hour12: false
                });
                document.getElementById('citaFecha').value = fechaCita;
                document.getElementById('citaInicio').value = horaInicio;
                document.getElementById('citaFin').value = horaFin;
                modalCita.show();
            }
        });

        calendar.render();
        events();
    }

    function events() {
        const modalElement = document.getElementById('modal-cita'); 
        const formCita = document.getElementById('form-cita');
        modalElement.addEventListener('hidden.bs.modal', function () {
            formCita.reset();
            document.getElementById('citainicio').value = '';
            document.getElementById('citafin').value = '';
        });
    }

    function formatearCabeceraDia(date) {
        let localDate = new Date(date.date.marker);
        localDate.setMinutes(localDate.getMinutes() + localDate.getTimezoneOffset());

        return localDate.toLocaleDateString('es-ES', {
            weekday: 'long',
            day: '2-digit',
            month: '2-digit',
            year: 'numeric',
        }).toUpperCase();
    }

    init();

});