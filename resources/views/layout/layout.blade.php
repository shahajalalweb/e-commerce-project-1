<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">
  <!-- Container -->
  <div class="flex min-h-screen">
    <!-- Sidebar -->
    <aside class="w-64 bg-white border-r border-gray-200">
      <div class="p-6">
        <h2 class="text-xl font-bold text-blue-600">Spike Admin</h2>
        <nav class="mt-8 space-y-2">
          <a href="#" class="flex items-center p-3 text-sm font-medium text-blue-600 bg-blue-100 rounded-md">
            <span class="material-icons">home</span>
            <span class="ml-2">Dashboard</span>
          </a>
          <h3 class="text-xs font-bold text-gray-400 uppercase">UI Components</h3>
          <a href="#" class="flex items-center p-3 text-sm text-gray-600 rounded hover:bg-gray-100">
            <span class="material-icons">smart_button</span>
            <span class="ml-2">Buttons</span>
          </a>
          <a href="#" class="flex items-center p-3 text-sm text-gray-600 rounded hover:bg-gray-100">
            <span class="material-icons">notifications</span>
            <span class="ml-2">Alerts</span>
          </a>
          <a href="#" class="flex items-center p-3 text-sm text-gray-600 rounded hover:bg-gray-100">
            <span class="material-icons">credit_card</span>
            <span class="ml-2">Cards</span>
          </a>
        </nav>
        <div class="mt-8">
          <h3 class="text-xs font-bold text-gray-400 uppercase">Auth</h3>
          <a href="#" class="flex items-center p-3 text-sm text-gray-600 rounded hover:bg-gray-100">
            <span class="material-icons">login</span>
            <span class="ml-2">Login</span>
          </a>
          <a href="#" class="flex items-center justify-center p-3 mt-4 text-sm font-medium text-white bg-blue-600 rounded hover:bg-blue-700">
            Upgrade to Pro
          </a>
        </div>
      </div>
    </aside>
    <!-- Main Content -->

    @yield('content')

  </div>
</body>
</html>
