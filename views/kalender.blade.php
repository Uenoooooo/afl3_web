<x-layout>
    @section('content')
    <div class="container mx-auto">
        <h2 class="text-2xl font-bold mb-4">Kalender Tagihan</h2>
        <p class="mb-6">Lihat jadwal tagihan dan pengingat Anda dalam kalender.</p>
    
        <!-- Kalender -->
        <div id="calendar" class="bg-white shadow rounded p-4"></div>
    </div>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
    
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay'
                },
                events: '/reminders/events', // Fetch events from the route
                eventColor: '#2563eb', // Default event color
                eventDisplay: 'block'
            });
    
            calendar.render();
        });
    </script>
    @endsection
    </x-layout>
    