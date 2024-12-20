<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Custom background animation */
        @keyframes backgroundAnimation {
            0% {
                background-color: #ff7e5f;
            }

            50% {
                background-color: #feb47b;
            }

            100% {
                background-color: #ff7e5f;
            }
        }

        /* Apply background animation */
        .bg-animated {
            animation: backgroundAnimation 6s ease-in-out infinite;
        }

        /* Animation for form container */
        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(30px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Apply animation to form container */
        .fade-in-up {
            animation: fadeInUp 0.8s ease-out;
        }

        /* Hover effects for input fields */
        .input-focus:hover,
        .input-focus:focus {
            border-color: #3b82f6;
            box-shadow: 0 0 0 4px rgba(59, 130, 246, 0.3);
            transform: scale(1.03);
        }

        /* Hover effects for submit button */
        .btn-hover:hover {
            background-color: #3b82f6;
            transform: scale(1.1);
            box-shadow: 0 4px 15px rgba(59, 130, 246, 0.4);
        }

        /* Hover effect for container */
        .container-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.1);
        }

        /* Additional custom styles */
        .header-text {
            font-family: 'Roboto', sans-serif;
            font-weight: 700;
            letter-spacing: 1px;
        }

        .form-container {
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body class="bg-gray-100 flex items-center justify-center h-screen">

    <!-- Login Form Container with Animation -->
    <div class="bg-white p-8 rounded-lg shadow-2xl w-full max-w-md fade-in-up transform transition-all duration-300 ease-in-out container-hover">

        <h1 class="header-text text-4xl text-center text-gray-700 mb-6">Welcome Back</h1>

        <!-- Form Login -->
        <form action="{{ route('login') }}" method="POST">
            @csrf

            <!-- Username Input -->
            <div class="mb-6">
                <label for="name" class="block text-gray-600 text-sm">Username</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}"
                    class="w-full px-4 py-3 mt-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 transition-all duration-300 ease-in-out hover:shadow-lg input-focus"
                    required>
            </div>

            <!-- Password Input -->
            <div class="mb-6">
                <label for="password" class="block text-gray-600 text-sm">Password</label>
                <input type="password" id="password" name="password"
                    class="w-full px-4 py-3 mt-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 transition-all duration-300 ease-in-out hover:shadow-lg input-focus"
                    required>
            </div>

            <!-- Submit Button -->
            <button type="submit"
                class="w-full bg-blue-500 text-white py-3 rounded-lg focus:outline-none hover:bg-blue-600 hover:shadow-lg transition duration-300 ease-in-out transform hover:scale-110 btn-hover">
                Login
            </button>
        </form>

        <!-- Error Message -->
        @if ($errors->any())
        <div class="mt-4 text-red-600">
            <strong>Error:</strong>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <!-- Register Link -->
        <p class="mt-6 text-center text-gray-600">Don't have an account? <a href="{{ route('register.form') }}"
                class="text-blue-500 hover:underline">Register here</a></p>

    </div>

</body>

</html>
