<x-layout>
    @section('content')
    <div class="container mx-auto">
        <h2 class="text-2xl font-bold mb-4">Dashboard</h2>
        <p class="mb-6">Statistik terkini aplikasi Billing Reminder</p>
    
        <!-- Statistik -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="bg-white shadow p-6 rounded">
                <h5 class="text-gray-700 font-bold">Total Tagihan Bulan Ini</h5>
                <p class="text-4xl text-blue-500 mt-2">Rp 10,000,000</p>
            </div>
            <div class="bg-white shadow p-6 rounded">
                <h5 class="text-gray-700 font-bold">Tagihan Belum Dibayar</h5>
                <p class="text-4xl text-red-500 mt-2">Rp 2,500,000</p>
            </div>
            <div class="bg-white shadow p-6 rounded">
                <h5 class="text-gray-700 font-bold">Tagihan Dibayar</h5>
                <p class="text-4xl text-green-500 mt-2">Rp 7,500,000</p>
            </div>
        </div>
    
        <!-- Grafik -->
        <div class="mt-6 bg-white shadow p-6 rounded">
            <h4 class="text-xl font-bold mb-4">Grafik Pembayaran</h4>
            <div id="chart" class="w-full h-64"></div>
        </div>
    
        <!-- Pengingat -->
        <div class="mt-6">
            <h4 class="text-xl font-bold mb-4">Pengingat Tagihan</h4>
            <ul class="bg-white shadow rounded p-4">
                <li class="text-gray-600">1. Tagihan Listrik - Rp 500,000 - 25 Desember</li>
                <li class="text-gray-600">2. Tagihan Air - Rp 250,000 - 28 Desember</li>
            </ul>
        </div>
    </div>
    @endsection

    @push('scripts')
    <script>
        // Contoh integrasi grafik menggunakan Chart.js
        const ctx = document.getElementById('chart').getContext('2d');
        new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May'],
                datasets: [{
                    label: 'Pembayaran (Rp)',
                    data: [2000000, 3000000, 2500000, 4000000, 5000000],
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 2,
                }]
            },
            options: {
                responsive: true,
            }
        });
    </script>
    @endpush
</x-layout>
