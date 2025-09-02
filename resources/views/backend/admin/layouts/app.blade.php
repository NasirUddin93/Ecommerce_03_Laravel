<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - E-commerce Store</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#4F46E5',
                        secondary: '#10B981',
                        accent: '#F59E0B',
                        dark: '#1F2937',
                        light: '#F9FAFB'
                    }
                }
            }
        }
    </script>
    <style>
        .dashboard-card:hover {
            transform: translateY(-5px);
            transition: all 0.3s ease;
        }
        .chart-container {
            position: relative;
            height: 250px;
        }
        .navigation-item {
            transition: all 0.2s;
        }
        .navigation-item:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }
        .active-tab {
            border-left: 4px solid #4F46E5;
            background-color: rgba(79, 70, 229, 0.1);
        }
        .sidebar {
            scrollbar-width: thin;
            scrollbar-color: #4B5563 #1F2937;
        }
        .sidebar::-webkit-scrollbar {
            width: 6px;
        }
        .sidebar::-webkit-scrollbar-thumb {
            background-color: #4B5563;
            border-radius: 3px;
        }
    </style>
</head>
<body class="bg-gray-100">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <div class="bg-dark text-white w-64 space-y-6 py-7 px-2 absolute inset-y-0 left-0 transform -translate-x-full md:relative md:translate-x-0 transition duration-200 ease-in-out sidebar overflow-y-auto" id="sidebar">
            <div class="text-white flex items-center space-x-2 px-4">
                <i class="fas fa-store fa-2x text-primary"></i>
                <span class="text-2xl font-extrabold">AdminPanel</span>
            </div>
            <nav>
                <div class="py-4">
                    <div class="text-gray-400 ml-4 text-sm font-semibold mb-2">MAIN NAVIGATION</div>
                    <a href="#" class="navigation-item block py-2.5 px-4 rounded transition duration-200 active-tab">
                        <i class="fas fa-chart-pie mr-2"></i>Dashboard
                    </a>
                    <a href="{{ route('admin.products.index') }}" class="navigation-item block py-2.5 px-4 rounded transition duration-200">
                        <i class="fas fa-shopping-bag mr-2"></i>Products
                    </a>
                    <a href="{{ route('admin.categories.index') }}" class="navigation-item block py-2.5 px-4 rounded transition duration-200">
                        <i class="fas fa-tags mr-2"></i>Categories
                    </a>
                    <a href="#" class="navigation-item block py-2.5 px-4 rounded transition duration-200">
                        <i class="fas fa-users mr-2"></i>Customers
                    </a>
                    <a href="#" class="navigation-item block py-2.5 px-4 rounded transition duration-200">
                        <i class="fas fa-receipt mr-2"></i>Orders
                    </a>
                    <a href="#" class="navigation-item block py-2.5 px-4 rounded transition duration-200">
                        <i class="fas fa-chart-bar mr-2"></i>Reports
                    </a>
                    <a href="#" class="navigation-item block py-2.5 px-4 rounded transition duration-200">
                        <i class="fas fa-percentage mr-2"></i>Discounts
                    </a>
                </div>
                <div class="py-4">
                    <div class="text-gray-400 ml-4 text-sm font-semibold mb-2">CONTENT</div>
                    <a href="#" class="navigation-item block py-2.5 px-4 rounded transition duration-200">
                        <i class="fas fa-bullhorn mr-2"></i>Marketing
                    </a>
                    <a href="#" class="navigation-item block py-2.5 px-4 rounded transition duration-200">
                        <i class="fas fa-comments mr-2"></i>Reviews
                    </a>
                    <a href="#" class="navigation-item block py-2.5 px-4 rounded transition duration-200">
                        <i class="fas fa-question-circle mr-2"></i>Support
                    </a>
                </div>
                <div class="py-4 border-t border-gray-700">
                    <div class="text-gray-400 ml-4 text-sm font-semibold mb-2">ACCOUNT</div>
                    <a href="#" class="navigation-item block py-2.5 px-4 rounded transition duration-200">
                        <i class="fas fa-cog mr-2"></i>Settings
                    </a>

                    {{-- <form method="POST" action="{{ route('logout') }}" >
                        @csrf
                        <button type="submit" class="navigation-item block py-2.5 px-4 rounded transition duration-200 w-full text-left">
                            <i class="fas fa-sign-out-alt mr-2"></i>Logout
                        </button>
                    </form> --}}
                    <a href="#" class="navigation-item block py-2.5 px-4 rounded transition duration-200">
                        <i class="fas fa-sign-out-alt mr-2"></i>Logout
                    </a>
                </div>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col">
            <!-- Header -->
            <header class="bg-white shadow-sm">
                <div class="flex items-center justify-between p-4">
                    <div class="flex items-center">
                        <button id="sidebar-toggle" class="text-gray-500 focus:outline-none md:hidden">
                            <i class="fas fa-bars fa-lg"></i>
                        </button>
                        <div class="relative mx-4 md:mx-8">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-search text-gray-400"></i>
                            </div>
                            <input type="text" class="pl-10 pr-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-primary focus:border-primary" placeholder="Search...">
                        </div>
                    </div>
                    <div class="flex items-center">
                        <button class="p-2 rounded-full hover:bg-gray-100 mx-2 relative">
                            <i class="fas fa-bell text-gray-500"></i>
                            <span class="absolute top-0 right-0 h-4 w-4 rounded-full bg-red-500 text-xs text-white flex items-center justify-center">3</span>
                        </button>
                        <button class="p-2 rounded-full hover:bg-gray-100 mx-2 relative">
                            <i class="fas fa-envelope text-gray-500"></i>
                            <span class="absolute top-0 right-0 h-4 w-4 rounded-full bg-primary text-xs text-white flex items-center justify-center">7</span>
                        </button>
                        <div class="ml-4 relative">
                            <button class="flex items-center focus:outline-none">
                                <div class="h-10 w-10 rounded-full bg-primary flex items-center justify-center text-white font-bold">AD</div>
                                <span class="ml-2 text-gray-700 font-medium hidden md:block">Admin User</span>
                                <i class="fas fa-chevron-down ml-1 text-gray-500"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Dashboard Content -->
            <main class="flex-1 overflow-y-auto p-6">
                @yield('content')
                @yield('scripts')
            </main>
        </div>
    </div>

</body>
</html>


