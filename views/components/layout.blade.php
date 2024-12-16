<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Billing Reminder')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js"></script>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        .icon-container {
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);
        }

        .icon-container i {
            color: #000000;
            font-size: 1rem;
        }

        .fixed-sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100vh;
            z-index: 10;
            overflow-y: auto;
            background-color: #000000;
            width: 16rem;
        }

        .fixed-sidebar ul li {
            color: #ffffff;
            transition: all 0.3s ease;
        }

        .fixed-sidebar ul li:hover {
            color: #000000;
            background-color: #ffffff;
            border-top-right-radius: 5px;
            border-bottom-right-radius: 25px;
        }

        .icon-title {
            color: #ffffff;
            font-size: 2rem;
        }

        .content-wrapper {
            margin-left: 16rem;
            /* Menambahkan margin untuk menyesuaikan sidebar */
            padding: 1.5rem;
        }
    </style>
</head>

<body class="bg-gray-100">
    <!-- Sidebar -->
    <div class="fixed-sidebar shadow-md flex flex-col justify-between">
        <div>
            <div class="p-4 flex items-center">
                <div class="icon-title mr-4 ml-1">
                    <i class="fa-solid fa-wallet"></i>
                </div>
                <div>
                    <div class="text-gray-200 text-sm">Welcome to your</div>
                    <div class="text-base font-bold text-gray-200">Hutang Reminder</div>
                </div>
            </div>
            <hr class="border-gray-600">
            <!-- Tombol New Reminder -->
            <ul class="mt-4">
                <button onclick="window.location.href='/kalender'"
                    class="flex items-center justify-center px-4 py-2 mb-4 ml-2 bg-blue-500 text-white rounded hover:bg-blue-600 w-11/12">
                    + New Reminder
                </button>
                <li class="flex items-center block py-2 px-4 text-gray-300 mb-4 mr-2">
                    <div class="icon-container">
                        <i class="fa-solid fa-house"></i>
                    </div>
                    <a href="/home" class="ml-3">Home</a>
                </li>
                <li class="flex items-center block py-2 px-4 text-gray-300 mb-4 mr-2">
                    <div class="icon-container">
                        <i class="fa-solid fa-book"></i>
                    </div>
                    <a href="/dashboard" class="ml-3">Dashboard</a>
                </li>
                <li class="flex items-center block py-2 px-4 text-gray-300 mb-4 mr-2">
                    <div class="icon-container">
                        <i class="fa-solid fa-money-bill-wave"></i>
                    </div>
                    <a href="/bill" class="ml-3">My Bills</a>
                </li>
                <li class="flex items-center block py-2 px-4 text-gray-300 mb-4 mr-2">
                    <div class="icon-container">
                        <i class="fa-solid fa-hand-holding-dollar"></i>
                    </div>
                    <a href="/payment" class="ml-3">Payment</a>
                </li>
                <li class="flex items-center block py-2 px-4 text-gray-300 mb-4 mr-2">
                    <div class="icon-container">
                        <i class="fa-solid fa-calendar"></i>
                    </div>
                    <a href="/kalender" class="ml-3">Reminder</a>
                </li>
            </ul>

        </div>
        <div class="p-4">
            <a href="/logout" class="block w-full text-center py-2 bg-red-500 text-white hover:bg-red-600 rounded">Logout</a>
        </div>
    </div>

    <!-- Main Content -->
    <div class="content-wrapper">
        @yield('content')
    </div>
</body>

</html>