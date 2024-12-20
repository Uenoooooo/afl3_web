<x-layout>

    @section('title', 'Profile')
    
    @section('content')
        <div class="bg-white p-8 rounded-lg shadow-xl transition-all duration-300">
            <h2 class="text-3xl font-semibold mb-6 text-gray-800">Profile of {{ $user->name }}</h2>
    
            <div class="flex flex-col mb-8">
                <p class="text-xl font-semibold text-gray-800">Name: {{ $user->name }}</p>
                <p class="text-md text-gray-600 mt-2">Email: {{ $user->email }}</p>
                <p class="text-md text-gray-600 mt-2">Phone: {{ $user->phonenumber }}</p> <!-- Display phone number -->
            </div>
    
            <div class="mt-10">
                <h3 class="text-2xl font-semibold mb-6 text-gray-800">Account Settings</h3>
    
                <form action="{{ route('profile.update', $user->id) }}" method="POST" class="space-y-6">
                    @csrf
                    @method('PUT')
    
                    <!-- Update Name -->
                    <div class="flex flex-col">
                        <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                        <input type="text" id="name" name="name" value="{{ old('name', $user->name) }}" class="mt-2 block w-full px-4 py-2 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm transition-all duration-300 ease-in-out hover:shadow-xl focus:shadow-lg focus:outline-none">
                    </div>
    
                    <!-- Update Email -->
                    <div class="flex flex-col">
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" id="email" name="email" value="{{ old('email', $user->email) }}" class="mt-2 block w-full px-4 py-2 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm transition-all duration-300 ease-in-out hover:shadow-xl focus:shadow-lg focus:outline-none">
                    </div>

                    <!-- Update Phone Number -->
                    <div class="flex flex-col">
                        <label for="phone" class="block text-sm font-medium text-gray-700">Phone Number</label>
                        <input type="tel" id="phone" name="phonenumber" value="{{ old('phonenumber', $user->phonenumber) }}" pattern="^\+62\d{9,12}$" placeholder="e.g. +62xxxxxxxxxx" class="mt-2 block w-full px-4 py-2 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm transition-all duration-300 ease-in-out hover:shadow-xl focus:shadow-lg focus:outline-none">
                        <small class="text-gray-500 mt-2">Please enter a valid Indonesian phone number (e.g. +62xxxxxxxxxx).</small>
                    </div>
    
                    <button type="submit" class="w-full px-6 py-3 bg-blue-500 text-white rounded-md hover:bg-blue-600 transition duration-300 transform focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-50">Update Profile</button>
                </form>
            </div>
        </div>
    @endsection

</x-layout>
