<x-layout>
    @section('content')
    <div class="container mx-auto">
        <h2 class="text-2xl font-bold mb-4">Daftar Reminder</h2>
        <p class="mb-6">Daftar semua pengingat Anda.</p>
    
        <table class="table-auto w-full bg-white shadow rounded">
            <thead class="bg-gray-100 text-black">
                <tr>
                    <th class="px-4 py-2">No</th>
                    <th class="px-4 py-2">Nama Pengingat</th>
                    <th class="px-4 py-2">Deskripsi</th>
                    <th class="px-4 py-2">Tipe</th>
                    <th class="px-4 py-2">Jumlah</th>
                    <th class="px-4 py-2">Tanggal Mulai</th>
                    <th class="px-4 py-2">Frekuensi</th>
                    <th class="px-4 py-2">Detail Frekuensi</th>
                    <th class="px-4 py-2">Aksi</th>
                </tr>
            </thead>
            <tbody class="text-black">
                @forelse ($reminders as $index => $reminder)
                    <tr>
                        <td class="border px-4 py-2 text-center">{{ $index + 1 }}</td>
                        <td class="border px-4 py-2">{{ $reminder->reminder_name }}</td>
                        <td class="border px-4 py-2">{{ $reminder->reminder_desc }}</td>
                        <td class="border px-4 py-2">{{ $reminder->type->name ?? 'Tidak Ada Tipe' }}</td>
                        <td class="border px-4 py-2">Rp {{ number_format($reminder->reminder_amount, 0, ',', '.') }}</td>
                        <td class="border px-4 py-2">{{ \Carbon\Carbon::parse($reminder->start_date)->format('d-m-Y') }}</td>
                        <td class="border px-4 py-2">{{ $reminder->frequency->name ?? 'Tidak Ada Frekuensi' }}</td>
                        <td class="border px-4 py-2">{{ $reminder->frequency_details }}</td>
                        <td class="border px-4 py-2">
                            <button class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Edit</button>
                            <button class="px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600">Hapus</button>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="9" class="border px-4 py-2 text-center">Tidak ada data pengingat.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    @endsection
</x-layout>
