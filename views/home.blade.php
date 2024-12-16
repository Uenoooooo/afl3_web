<x-layout>
    @section('content')
    <div class="container mx-auto">
        <h2 class="text-2xl font-bold mb-4">Dashboard</h2>
        <p class="mb-6">Selamat datang di aplikasi Billing Reminder!</p>
    
        <!-- Ringkasan -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="bg-white shadow p-6 rounded">
                <h5 class="text-gray-700 font-bold">Tagihan Jatuh Tempo</h5>
                <p class="text-4xl text-red-500 mt-2">Rp 0</p>
            </div>
            <div class="bg-white shadow p-6 rounded">
                <h5 class="text-gray-700 font-bold">Tagihan Sudah Dibayar</h5>
                <p class="text-4xl text-green-500 mt-2">Rp 0</p>
            </div>
            <div class="bg-white shadow p-6 rounded">
                <h5 class="text-gray-700 font-bold">Tagihan Akan Datang</h5>
                <p class="text-4xl text-yellow-500 mt-2">Rp 0</p>
            </div>
        </div>
    
        <!-- Daftar Tagihan -->
        <div class="mt-6">
            <h4 class="text-xl font-bold mb-4">Daftar Tagihan Jatuh Tempo</h4>
            <table class="table-auto w-full bg-white shadow rounded">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-4 py-2">No</th>
                        <th class="px-4 py-2">Nama Tagihan</th>
                        <th class="px-4 py-2">Jumlah</th>
                        <th class="px-4 py-2">Jatuh Tempo</th>
                        <th class="px-4 py-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border px-4 py-2 text-center" colspan="5">Tidak ada data</td>
                    </tr>
                </tbody>
            </table>
        </div>
    
        <!-- Pengingat -->
        <div class="mt-6">
            <h4 class="text-xl font-bold mb-4">Pengingat Tagihan</h4>
            <ul class="bg-white shadow rounded p-4">
                <li class="text-gray-600 text-center">Tidak ada pengingat</li>
            </ul>
        </div>
    </div>
    @endsection

</x-layout>
