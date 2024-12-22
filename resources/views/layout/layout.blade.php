<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>

<body class="bg-gray-100 font-sans">
    <!-- Container -->
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-white border-r border-gray-200">
            <div class="p-6">
                <h2 class="text-xl font-bold text-blue-600 ml-2">Spike Admin</h2>
                <nav class="mt-8 space-y-2">
                    <!-- Dashboard -->
                    <a href="{{ route('dashboard') }}"
                        class="flex items-center {{ request()->routeIs('dashboard') ? 'text-blue-600 bg-gray-200' : 'text-gray-600' }} p-3 text-sm font-medium  bg-gray-100 rounded-md hover:text-blue-600 hover:bg-gray-200">
                        <span class="material-icons">dashboard</span>
                        <span class="ml-2 font-bold text-lg">Dashboard</span>
                    </a>
                    <a href="{{ route('products') }}"
                        class="flex items-center {{ request()->routeIs('products') ? 'text-blue-600 bg-gray-200' : 'text-gray-600' }} p-3 text-sm font-medium  bg-gray-100 rounded-md hover:text-blue-600 hover:bg-gray-200">
                        <span class="material-icons">store</span>
                        <span class="ml-2 font-bold text-lg">Products</span>
                    </a>
                    <a href="#"
                        class="flex items-center p-3 text-sm font-medium text-gray-600 bg-gray-100 rounded-md hover:text-blue-600 hover:bg-gray-200">
                        <span class="material-icons">dashboard</span>
                        <span class="ml-2 font-bold text-lg">Dashboard</span>
                    </a>


                </nav>

            </div>
        </aside>
        <!-- Main Content -->

        @yield('content')

    </div>
</body>

</html>
