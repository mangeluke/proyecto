import './bootstrap';
import { Calendar } from '@fullcalendar/core';
import dayGridPlugin from '@fullcalendar/daygrid';
import interactionPlugin from '@fullcalendar/interaction';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

document.addEventListener('DOMContentLoaded', function() {
    const calendarEl = document.getElementById('calendar');

    const calendar = new Calendar(calendarEl, {
        plugins: [ dayGridPlugin, interactionPlugin ],
        initialView: 'dayGridMonth',
        events: '/eventos', // Cambia esta URL por tu endpoint

        dateClick: function(info) {
            const dateStr = info.dateStr;

            // Obtener la fecha y hora actuales
            const now = new Date();
            const selectedDateTime = new Date(dateStr + 'T00:00:00'); // Cambia según tu necesidad (hora)

            // Validar si la fecha seleccionada es anterior a la fecha actual
            if (selectedDateTime < now) {
                alert('No se puede agregar eventos en fechas pasadas.');
                return;
            }

            const title = prompt('Ingrese el título del evento:');

            // Validar si se ingresó un título
            if (title) {
                const eventData = {
                    title: title,
                    start: dateStr,
                    allDay: true
                };

                // Agregar evento al calendario
                calendar.addEvent(eventData);

                // Aquí puedes hacer una solicitud al servidor para guardar el evento
                // fetch('/eventos', { method: 'POST', body: JSON.stringify(eventData) })
            } else {
                alert('Título del evento es obligatorio.');
            }
        },
    });

    calendar.render();
});


Alpine.start();
