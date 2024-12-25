<x-layout>
    @section('content')
    <div class="container mx-auto px-4 py-6">
        <h2 class="text-3xl font-bold mb-6">Dashboard</h2>
        <p class="mb-6 text-lg text-gray-600">Welcome to the Billing Reminder application!</p>

        <!-- Summary -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6 mb-8">
            <!-- Unpaid Bills -->
            <div class="bg-white shadow-lg p-6 rounded-lg flex justify-between items-center w-full">
                <div>
                    <h5 class="text-gray-700 font-semibold">Unpaid Bills</h5>
                    <p class="text-4xl text-red-500 mt-2">Rp {{ number_format($unpaidTotal, 0, ',', '.') }}</p>
                </div>
                <div class="text-6xl text-red-500">
                    <i class="fas fa-exclamation-circle"></i>
                </div>
            </div>

            <!-- Paid Bills -->
            <div class="bg-white shadow-lg p-6 rounded-lg flex justify-between items-center w-full">
                <div>
                    <h5 class="text-gray-700 font-semibold">Paid Bills</h5>
                    <p class="text-4xl text-green-500 mt-2">Rp {{ number_format($paidTotal, 0, ',', '.') }}</p>
                </div>
                <div class="text-6xl text-green-500">
                    <i class="fas fa-check-circle"></i>
                </div>
            </div>
        </div>

        <!-- Due Bill List -->
        <div class="mt-8">
            <h4 class="text-2xl font-bold mb-4">Due Bill List</h4>
            <table class="table-auto w-full bg-white shadow-md rounded-lg">
                <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="px-4 py-3 text-left">No</th>
                        <th class="px-4 py-3 text-left">Bill Name</th>
                        <th class="px-4 py-3 text-left">Amount</th>
                        <th class="px-4 py-3 text-left">Due Date</th>
                        <th class="px-4 py-3 text-center">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($reminders as $index => $reminder)
                        <tr class="hover:bg-gray-100 transition duration-300">
                            <td class="border px-4 py-3 text-center">{{ $index + 1 }}</td>
                            <td class="border px-4 py-3">{{ $reminder->reminder_name }}</td>
                            <td class="border px-4 py-3">Rp {{ number_format($reminder->reminder_amount, 0, ',', '.') }}</td>
                            <td class="border px-4 py-3">{{ $reminder->start_date }}</td>
                            <td class="border px-4 py-3 text-center">
                                <span class="{{ $reminder->status == 'completed' ? 'text-green-600' : 'text-red-600' }} font-semibold">
                                    {{ ucfirst($reminder->status) }}
                                </span>
                            </td>
                        </tr>
                    @endforeach
                    @if($reminders->isEmpty())
                        <tr>
                            <td colspan="5" class="border px-4 py-3 text-center text-gray-600">No reminders found</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
    @endsection
</x-layout>
