<x-layout>

    @section('content')
        <div class="max-w-4xl mx-auto px-4 py-8">
            <h1 class="text-3xl font-semibold mb-6">Your Payment</h1>
            <p class="mb-6 text-lg text-gray-600">Don't forget to Check your Bills!</p>
    
            @if($reminders->isEmpty())
                <p>No bills found.</p>
            @else
                @foreach($reminders as $reminder)
                    <div class="w-full bg-white shadow-lg rounded-lg p-6 mb-6">
                        <div class="border-b pb-4 mb-4">
                            <h2 class="flex items-center justify-center bg-black text-white px-2 py-1 rounded-md text-xl font-bold">{{ $reminder->reminder_name }}</h2>
                        </div>
                        <p><strong>Amount Due:</strong> Rp {{ number_format($reminder->reminder_amount, 2) }}</p>
                        <p><strong>Status:</strong> {{ ucfirst($reminder->status) }}</p>
                        <p><strong>Description:</strong> {{ $reminder->reminder_desc }}</p>
    
                        @if($reminder->reminder_amount > 0)
                            <form action="{{ route('payment.pay', $reminder->id) }}" method="POST" class="mt-3">
                                @csrf
                                <div class="mb-4">
                                    <label for="payment_amount" class="block text-lg font-medium">Payment Amount</label>
                                    <input type="number" name="payment_amount" id="payment_amount" class="w-full p-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500" placeholder="Enter payment amount" required min="0" max="{{ $reminder->reminder_amount }}">
                                </div>
                                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">Pay Now</button>
                            </form>
                        @else
                            <p class="text-green-500 mt-3"><strong>Paid in full!</strong></p>
                        @endif
                    </div>
                @endforeach
            @endif
        </div>
    @endsection
    </x-layout>
    