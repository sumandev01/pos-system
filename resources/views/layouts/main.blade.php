<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - POS System</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js"></script>
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        [x-cloak] { display: none !important; }
        * {
            scrollbar-width: thin;
            scrollbar-color: #cbd5e1 #f1f5f9;
        }
        *::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }
        *::-webkit-scrollbar-track {
            background: #f1f5f9;
        }
        *::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 4px;
        }
        *::-webkit-scrollbar-thumb:hover {
            background: #94a3b8;
        }
    </style>
</head>
<body class="bg-gray-50" x-cloak>
    <div class="flex h-screen bg-gray-50" x-data="{ sidebarOpen: true }">
        <!-- Sidebar -->
        @include('components.sidebar')

        <!-- Main Content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Top Navigation -->
            @include('components.navbar')

            <!-- Page Content -->
            <main class="flex-1 overflow-auto">
                <div class="container mx-auto px-4 py-8">
                    @yield('content')
                </div>
            </main>
        </div>
    </div>

    <script src="/js/app.js"></script>
    @yield('scripts')
</body>
</html>
