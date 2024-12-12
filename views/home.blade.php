<x-layout>
    @section('content')
    <div class="container mx-auto">
        <h2 class="text-2xl font-bold mb-4">Profile</h2>
        <p class="mb-6">Kelola informasi profil Anda di sini.</p>

        <!-- Upload Profile Picture -->
        <div class="flex justify-center mb-6">
            <div class="w-32 h-32 rounded-full border border-gray-300 flex items-center justify-center bg-white shadow">
                <label for="profile-picture" class="cursor-pointer flex items-center justify-center w-full h-full">
                    <i class="fa-solid fa-camera text-gray-500 text-xl"></i>
                </label>
                <input type="file" id="profile-picture" class="hidden" />
            </div>
        </div>

        <!-- Profile Information -->
        <div class="bg-white shadow p-6 rounded">
            <form action="/home/updatedprofile" method="POST" class="space-y-4">
                @php
                    $isEditing = false; // Ganti ke `true` jika dalam mode edit
                @endphp

                <!-- Full Name -->
                <div>
                    <label for="full-name" class="block text-gray-700 font-bold mb-2">Full Name</label>
                    @if (!$isEditing)
                        <p class="text-gray-800 border border-gray-300 rounded p-3 bg-gray-50">John Doe</p>
                    @else
                        <input type="text" id="full-name" name="full_name" value="John Doe"
                            class="w-full border border-gray-300 rounded p-3 focus:outline-none focus:ring-2 focus:ring-blue-400">
                    @endif
                </div>

                <!-- Username -->
                <div>
                    <label for="username" class="block text-gray-700 font-bold mb-2">Username</label>
                    @if (!$isEditing)
                        <p class="text-gray-800 border border-gray-300 rounded p-3 bg-gray-50">johndoe123</p>
                    @else
                        <input type="text" id="username" name="username" value="johndoe123"
                            class="w-full border border-gray-300 rounded p-3 focus:outline-none focus:ring-2 focus:ring-blue-400">
                    @endif
                </div>

                <!-- Phone Number -->
                <div>
                    <label for="phone-number" class="block text-gray-700 font-bold mb-2">Phone Number</label>
                    @if (!$isEditing)
                        <p class="text-gray-800 border border-gray-300 rounded p-3 bg-gray-50">+62 812 3456 7890</p>
                    @else
                        <input type="text" id="phone-number" name="phone_number" value="+62 812 3456 7890"
                            class="w-full border border-gray-300 rounded p-3 focus:outline-none focus:ring-2 focus:ring-blue-400">
                    @endif
                </div>

                <!-- Address -->
                <div>
                    <label for="address" class="block text-gray-700 font-bold mb-2">Address</label>
                    @if (!$isEditing)
                        <p class="text-gray-800 border border-gray-300 rounded p-3 bg-gray-50">123 Main Street, Jakarta</p>
                    @else
                        <textarea id="address" name="address" rows="3"
                            class="w-full border border-gray-300 rounded p-3 focus:outline-none focus:ring-2 focus:ring-blue-400">123 Main Street, Jakarta</textarea>
                    @endif
                </div>

                <!-- Email -->
                <div>
                    <label for="email" class="block text-gray-700 font-bold mb-2">Email</label>
                    @if (!$isEditing)
                        <p class="text-gray-800 border border-gray-300 rounded p-3 bg-gray-50">johndoe@example.com</p>
                    @else
                        <input type="email" id="email" name="email" value="johndoe@example.com"
                            class="w-full border border-gray-300 rounded p-3 focus:outline-none focus:ring-2 focus:ring-blue-400">
                    @endif
                </div>

                <!-- Edit/Save Button -->
                <div class="text-right">
                    @if (!$isEditing)
                        <a href="/home/editprofile"
                            class="px-6 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 focus:outline-none">Edit Profile</a>
                    @else
                        <button type="submit"
                            class="px-6 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 focus:outline-none">Save Changes</button>
                    @endif
                </div>
            </form>
        </div>
    </div>
    @endsection
</x-layout>
