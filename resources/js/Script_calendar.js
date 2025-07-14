import { Calendar } from '@fullcalendar/core'
import timeGridPlugin from '@fullcalendar/timegrid';
import interactionPlugin from '@fullcalendar/interaction';
import esLocale from '@fullcalendar/core/locales/es';

import bootstrap5Plugin from '@fullcalendar/bootstrap5';

document.addEventListener('DOMContentLoaded', function() {
    const calendarEl = document.getElementById('calendar');

    const calendar = new Calendar(calendarEl, {
        plugins: [timeGridPlugin, interactionPlugin, bootstrap5Plugin ],
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
        dayHeaderFormat: function(date) {
            let localDate = new Date(date.date.marker);
            localDate.setMinutes(localDate.getMinutes() + localDate.getTimezoneOffset());

            return localDate.toLocaleDateString('es-ES', {
                weekday: 'long',
                day: '2-digit',
                month: '2-digit',
                year: 'numeric',
            }).toUpperCase();
        },
        selectable: true,
        select: function(info) {
            let nombrePaciente = prompt("Ingrese el nombre del paciente:");
            if (nombrePaciente) {
                calendar.addEvent({
                    title: nombrePaciente,
                    start: info.start,
                    end: info.end,
                    allDay: false
                });
            }
            calendar.unselect();
        },
    });

    calendar.render();
});