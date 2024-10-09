import './bootstrap';
import { Calendar } from '@fullcalendar/core';
import dayGridPlugin from '@fullcalendar/daygrid';
import interactionPlugin from '@fullcalendar/interaction';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

document.addEventListener('DOMContentLoaded', function() {
    const calendarEl = document.getElementById('calendar');
    const dateInput = document.getElementById('datesemana');
    const timeInput = document.getElementById('horaevento'); 

    

    const calendar = new Calendar(calendarEl, {
        plugins: [ dayGridPlugin, interactionPlugin ],
        initialView: 'dayGridMonth',
        events: '/eventos',

        dateClick: function(info) {
            const dateStr = info.dateStr; // Formato yyyy-mm-dd

            // Obtener la fecha actual
            const now = new Date();
            const selectedDateTime = new Date(dateStr + 'T00:06:00'); 

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
                    allDay: false
                };

                // Agregar evento al calendario
                calendar.addEvent(eventData);

                const selectedTime = timeInput.value || '06:00';

                const fullDateTime = dateStr + 'T' + selectedTime;
                
                dateInput.value = fullDateTime; 

                console.log("Fecha y hora seleccionadas:", fullDateTime);

            } else {
                alert('Título del evento es obligatorio.');
            }
        },
    });

    calendar.render();
});

Alpine.start();
