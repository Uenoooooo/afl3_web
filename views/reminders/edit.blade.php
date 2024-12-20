<x-layout>
    @section('content')
        <div class="container">
            <h1 class="text-2xl font-bold mb-4">Edit Reminder</h1>
    
            @if ($errors->any())
                <div class="bg-red-500 text-white p-4 rounded mb-4">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
    
            <form action="{{ route('reminders.update', $reminder) }}" method="POST" class="space-y-4">
                @csrf
                @method('PUT')
    
                <div>
                    <label for="reminder_name" class="block font-bold">Reminder Name:</label>
                    <input 
                        type="text" 
                        id="reminder_name" 
                        name="reminder_name" 
                        value="{{ old('reminder_name', $reminder->reminder_name) }}" 
                        class="border border-gray-300 rounded w-full p-2"
                        required
                    >
                </div>
    
                <div>
                    <label for="type_id" class="block font-bold">Type:</label>
                    <select id="type_id" name="type_id" class="border border-gray-300 rounded w-full p-2">
                        @foreach ($types as $type)
                            <option value="{{ $type->id }}" 
                                {{ old('type_id', $reminder->type_id) == $type->id ? 'selected' : '' }}>
                                {{ $type->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
    
                <div>
                    <label for="frequency_id" class="block font-bold">Frequency:</label>
                    <select id="frequency_id" name="frequency_id" class="border border-gray-300 rounded w-full p-2">
                        @foreach ($frequencies as $frequency)
                            <option value="{{ $frequency->id }}" 
                                {{ old('frequency_id', $reminder->frequency_id) == $frequency->id ? 'selected' : '' }}>
                                {{ $frequency->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
    
                <div>
                    <label for="category_id" class="block font-bold">Category (Optional):</label>
                    <select id="category_id" name="category_id" class="border border-gray-300 rounded w-full p-2">
                        <option value="">None</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" 
                                {{ old('category_id', $reminder->category_id) == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
    
                <div>
                    <label for="payment_method_id" class="block font-bold">Payment Method (Optional):</label>
                    <select id="payment_method_id" name="payment_method_id" class="border border-gray-300 rounded w-full p-2">
                        <option value="">None</option>
                        @foreach ($payment_methods as $payment_method)
                            <option value="{{ $payment_method->id }}" 
                                {{ old('payment_method_id', $reminder->payment_method_id) == $payment_method->id ? 'selected' : '' }}>
                                {{ $payment_method->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
    
                <div>
                    <label for="reminder_amount" class="block font-bold">Amount (Optional):</label>
                    <input 
                        type="number" 
                        step="0.01" 
                        id="reminder_amount" 
                        name="reminder_amount" 
                        value="{{ old('reminder_amount', $reminder->reminder_amount) }}" 
                        class="border border-gray-300 rounded w-full p-2"
                    >
                </div>
    
                <div>
                    <label for="start_date" class="block font-bold">Start Date:</label>
                    <input 
                        type="date" 
                        id="start_date" 
                        name="start_date" 
                        value="{{ old('start_date', $reminder->start_date) }}" 
                        class="border border-gray-300 rounded w-full p-2"
                        required
                    >
                </div>
    
                <div>
                    <label for="status" class="block font-bold">Status:</label>
                    <select id="status" name="status" class="border border-gray-300 rounded w-full p-2" >
                        <option value="pending" {{ old('status', $reminder->status) == 'pending' ? 'selected' : '' }}>Pending</option>
                        <option value="completed" {{ old('status', $reminder->status) == 'completed' ? 'selected' : '' }}>Completed</option>
                    </select>
                </div>
    
                <!-- Description Field -->
                <div>
                    <label for="description" class="block font-bold">Description (Optional):</label>
                    <textarea name="reminder_desc" id="reminder_desc" rows="4"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('reminder_desc') border-red-500 @enderror">
                    {{ old('reminder_desc', $reminder->reminder_desc) }}
                </textarea>
                </div>
    
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">
                    Update Reminder
                </button>
            </form>
        </div>
    @endsection
    </x-layout>
    