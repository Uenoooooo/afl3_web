<x-layout>

@section('content')
<div class="container mx-auto">
    <h2 class="text-2xl font-bold mb-4">Tagihan</h2>
    <p class="mb-6">Daftar semua tagihan Anda.</p>

    <table class="table-auto w-full bg-white shadow rounded">
        <thead class="bg-gray-100">
            <tr>
                <th class="px-4 py-2">No</th>
                <th class="px-4 py-2">Nama Tagihan</th>
                <th class="px-4 py-2">Jumlah</th>
                <th class="px-4 py-2">Jatuh Tempo</th>
                <th class="px-4 py-2">Status</th>
                <th class="px-4 py-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <!-- Placeholder untuk data -->
            <tr>
                <td class="border px-4 py-2 text-center">1</td>
                <td class="border px-4 py-2">Tagihan Listrik</td>
                <td class="border px-4 py-2">Rp 500,000</td>
                <td class="border px-4 py-2">2024-12-10</td>
                <td class="border px-4 py-2 text-yellow-500">Belum Dibayar</td>
                <td class="border px-4 py-2">
                    <button class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Bayar</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection

</x-layout>