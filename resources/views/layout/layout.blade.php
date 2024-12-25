<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.12.0/dist/cdn.min.js" defer></script>


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
                        class="flex items-center {{ request()->routeIs('dashboard') ? 'text-blue-600 bg-gray-200' : 'text-gray-600' }} p-3 text-sm font-medium bg-gray-100 rounded-md hover:text-blue-600 hover:bg-gray-200">
                        <span class="material-icons">dashboard</span>
                        <span class="ml-2 font-bold text-lg">Dashboard</span>
                    </a>

                    <!-- Products Dropdown -->
                    <div x-data="{ open: false }" class="bg-gray-100 rounded-md">
                        <!-- Button to toggle dropdown -->
                        <button @click="open = !open"
                            class="flex items-center justify-between w-full p-3 text-sm font-medium {{ request()->routeIs('add-product') || request()->routeIs('category') || request()->routeIs('view-products') ? 'text-blue-600 bg-gray-200' : 'text-gray-600' }} hover:text-blue-600 hover:bg-gray-200">
                            <div class="flex items-center">
                                <span class="material-icons">store</span>
                                <span class="ml-2 font-bold text-lg">Products</span>
                            </div>
                            <span :class="{ 'rotate-180': open }"
                                class="material-icons transition-transform">expand_more</span>
                        </button>
                        <!-- Dropdown items -->
                        <div x-show="open" x-cloak @click.away="open = false" class="my-2 space-y-1 pl-6">
                            <a href="{{ route('category') }}"
                                class="block text-sm {{ request()->routeIs('category') ? 'text-blue-600 bg-gray-200' : 'text-gray-600' }} hover:text-blue-600 hover:bg-gray-200 p-2 rounded-md">
                                Category
                            </a>
                            <a href="{{ route('add-product') }}"
                                class="block text-sm {{ request()->routeIs('add-product') ? 'text-blue-600 bg-gray-200' : 'text-gray-600' }} hover:text-blue-600 hover:bg-gray-200 p-2 rounded-md">
                                Add Product
                            </a>
                            <a href="{{ route('view-products') }}"
                                class="block text-sm mb-2 {{ request()->routeIs('view-products') ? 'text-blue-600 bg-gray-200' : 'text-gray-600' }} hover:text-blue-600 hover:bg-gray-200 p-2 rounded-md">
                                View Products
                            </a>
                        </div>
                    </div>

                    <!-- Another Dashboard -->
                    <a href="#"
                        class="flex items-center p-3 text-sm font-medium text-gray-600 bg-gray-100 rounded-md hover:text-blue-600 hover:bg-gray-200">
                        <span class="material-icons">dashboard</span>
                        <span class="ml-2 font-bold text-lg">Another Dashboard</span>
                    </a>
                </nav>


            </div>
        </aside>
        <!-- Main Content -->

        @yield('content')

    </div>
</body>

</html>
