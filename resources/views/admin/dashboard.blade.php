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
                    <a href="#" class="navigation-item block py-2.5 px-4 rounded transition duration-200">
                        <i class="fas fa-shopping-bag mr-2"></i>Products
                    </a>
                    <a href="#" class="navigation-item block py-2.5 px-4 rounded transition duration-200">
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
                <div class="mb-6">
                    <h1 class="text-2xl font-bold text-gray-800">Dashboard Overview</h1>
                    <p class="text-gray-600">Welcome back, here's what's happening with your store today.</p>
                </div>

                <!-- Stats Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                    <div class="dashboard-card bg-white rounded-lg shadow p-6">
                        <div class="flex items-center">
                            <div class="p-3 rounded-full bg-blue-100 text-primary">
                                <i class="fas fa-shopping-bag text-xl"></i>
                            </div>
                            <div class="ml-4">
                                <p class="text-gray-600">Total Sales</p>
                                <h3 class="text-2xl font-bold text-gray-800">$24,569</h3>
                            </div>
                        </div>
                        <div class="mt-4">
                            <span class="text-green-600 font-medium"><i class="fas fa-arrow-up"></i> 12.5%</span>
                            <span class="text-gray-500 ml-2">from last week</span>
                        </div>
                    </div>

                    <div class="dashboard-card bg-white rounded-lg shadow p-6">
                        <div class="flex items-center">
                            <div class="p-3 rounded-full bg-green-100 text-secondary">
                                <i class="fas fa-users text-xl"></i>
                            </div>
                            <div class="ml-4">
                                <p class="text-gray-600">Customers</p>
                                <h3 class="text-2xl font-bold text-gray-800">1,284</h3>
                            </div>
                        </div>
                        <div class="mt-4">
                            <span class="text-green-600 font-medium"><i class="fas fa-arrow-up"></i> 7.2%</span>
                            <span class="text-gray-500 ml-2">from last week</span>
                        </div>
                    </div>

                    <div class="dashboard-card bg-white rounded-lg shadow p-6">
                        <div class="flex items-center">
                            <div class="p-3 rounded-full bg-yellow-100 text-yellow-600">
                                <i class="fas fa-receipt text-xl"></i>
                            </div>
                            <div class="ml-4">
                                <p class="text-gray-600">Orders</p>
                                <h3 class="text-2xl font-bold text-gray-800">856</h3>
                            </div>
                        </div>
                        <div class="mt-4">
                            <span class="text-red-600 font-medium"><i class="fas fa-arrow-down"></i> 3.1%</span>
                            <span class="text-gray-500 ml-2">from last week</span>
                        </div>
                    </div>

                    <div class="dashboard-card bg-white rounded-lg shadow p-6">
                        <div class="flex items-center">
                            <div class="p-3 rounded-full bg-purple-100 text-purple-600">
                                <i class="fas fa-chart-line text-xl"></i>
                            </div>
                            <div class="ml-4">
                                <p class="text-gray-600">Conversion Rate</p>
                                <h3 class="text-2xl font-bold text-gray-800">24.8%</h3>
                            </div>
                        </div>
                        <div class="mt-4">
                            <span class="text-green-600 font-medium"><i class="fas fa-arrow-up"></i> 9.6%</span>
                            <span class="text-gray-500 ml-2">from last week</span>
                        </div>
                    </div>
                </div>

                <!-- Charts and Tables -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
                    <div class="bg-white rounded-lg shadow p-6">
                        <h3 class="text-lg font-semibold text-gray-800 mb-4">Revenue Overview</h3>
                        <div class="chart-container">
                            <canvas id="revenueChart"></canvas>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow p-6">
                        <h3 class="text-lg font-semibold text-gray-800 mb-4">Recent Orders</h3>
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead>
                                    <tr>
                                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Order</th>
                                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Customer</th>
                                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Total</th>
                                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200">
                                    <tr>
                                        <td class="px-4 py-4">#ORD-0125</td>
                                        <td class="px-4 py-4">John Smith</td>
                                        <td class="px-4 py-4">$245.99</td>
                                        <td class="px-4 py-4"><span class="px-2 py-1 bg-green-100 text-green-800 rounded-full text-xs">Delivered</span></td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-4">#ORD-0124</td>
                                        <td class="px-4 py-4">Emma Johnson</td>
                                        <td class="px-4 py-4">$425.50</td>
                                        <td class="px-4 py-4"><span class="px-2 py-1 bg-yellow-100 text-yellow-800 rounded-full text-xs">Processing</span></td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-4">#ORD-0123</td>
                                        <td class="px-4 py-4">Michael Brown</td>
                                        <td class="px-4 py-4">$129.99</td>
                                        <td class="px-4 py-4"><span class="px-2 py-1 bg-blue-100 text-blue-800 rounded-full text-xs">Shipped</span></td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-4">#ORD-0122</td>
                                        <td class="px-4 py-4">Sarah Wilson</td>
                                        <td class="px-4 py-4">$89.99</td>
                                        <td class="px-4 py-4"><span class="px-2 py-1 bg-red-100 text-red-800 rounded-full text-xs">Cancelled</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Product List -->
                <div class="bg-white rounded-lg shadow p-6 mb-8">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-lg font-semibold text-gray-800">Popular Products</h3>
                        <button class="text-primary hover:text-primary-dark font-medium">View All</button>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead>
                                <tr>
                                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Product</th>
                                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Price</th>
                                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Stock</th>
                                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Sales</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                <tr>
                                    <td class="px-4 py-4">
                                        <div class="flex items-center">
                                            <div class="h-10 w-10 flex-shrink-0 bg-gray-200 rounded-md"></div>
                                            <div class="ml-4">
                                                <div class="font-medium text-gray-900">Wireless Headphones</div>
                                                <div class="text-gray-500">Electronics</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4">$199.99</td>
                                    <td class="px-4 py-4">45</td>
                                    <td class="px-4 py-4">124</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-4">
                                        <div class="flex items-center">
                                            <div class="h-10 w-10 flex-shrink-0 bg-gray-200 rounded-md"></div>
                                            <div class="ml-4">
                                                <div class="font-medium text-gray-900">Running Shoes</div>
                                                <div class="text-gray-500">Footwear</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4">$89.99</td>
                                    <td class="px-4 py-4">132</td>
                                    <td class="px-4 py-4">98</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-4">
                                        <div class="flex items-center">
                                            <div class="h-10 w-10 flex-shrink-0 bg-gray-200 rounded-md"></div>
                                            <div class="ml-4">
                                                <div class="font-medium text-gray-900">Smart Watch</div>
                                                <div class="text-gray-500">Electronics</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4">$259.99</td>
                                    <td class="px-4 py-4">28</td>
                                    <td class="px-4 py-4">76</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Recent Activity -->
                <div class="bg-white rounded-lg shadow p-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Recent Activity</h3>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <div class="h-10 w-10 rounded-full bg-blue-100 flex items-center justify-center text-primary mr-4">
                                <i class="fas fa-user-plus"></i>
                            </div>
                            <div>
                                <p class="font-medium">New customer registered</p>
                                <p class="text-gray-500">Sarah Johnson joined the store</p>
                                <p class="text-gray-400 text-sm">2 hours ago</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="h-10 w-10 rounded-full bg-green-100 flex items-center justify-center text-secondary mr-4">
                                <i class="fas fa-shopping-cart"></i>
                            </div>
                            <div>
                                <p class="font-medium">New order placed</p>
                                <p class="text-gray-500">Order #ORD-0126 for $324.99</p>
                                <p class="text-gray-400 text-sm">5 hours ago</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="h-10 w-10 rounded-full bg-yellow-100 flex items-center justify-center text-yellow-600 mr-4">
                                <i class="fas fa-comment"></i>
                            </div>
                            <div>
                                <p class="font-medium">New product review</p>
                                <p class="text-gray-500">John Doe reviewed Wireless Headphones</p>
                                <p class="text-gray-400 text-sm">Yesterday</p>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            // Toggle sidebar on mobile
            $('#sidebar-toggle').click(function() {
                $('#sidebar').toggleClass('-translate-x-full');
            });

            // Navigation item active state
            $('.navigation-item').click(function(e) {
                e.preventDefault();
                $('.navigation-item').removeClass('active-tab');
                $(this).addClass('active-tab');
            });

            // Simple revenue chart simulation
            const revenueChart = document.getElementById('revenueChart');
            if (revenueChart) {
                const ctx = revenueChart.getContext('2d');

                // Draw a simple chart
                ctx.beginPath();
                ctx.moveTo(0, 200);
                ctx.lineTo(50, 150);
                ctx.lineTo(100, 170);
                ctx.lineTo(150, 120);
                ctx.lineTo(200, 140);
                ctx.lineTo(250, 100);
                ctx.lineTo(300, 130);
                ctx.strokeStyle = '#4F46E5';
                ctx.lineWidth = 3;
                ctx.stroke();

                // Draw points
                const points = [[50, 150], [100, 170], [150, 120], [200, 140], [250, 100], [300, 130]];
                points.forEach(point => {
                    ctx.beginPath();
                    ctx.arc(point[0], point[1], 5, 0, Math.PI * 2);
                    ctx.fillStyle = '#4F46E5';
                    ctx.fill();
                });

                // Draw axes
                ctx.beginPath();
                ctx.moveTo(0, 220);
                ctx.lineTo(320, 220);
                ctx.moveTo(0, 220);
                ctx.lineTo(0, 80);
                ctx.strokeStyle = '#9CA3AF';
                ctx.lineWidth = 1;
                ctx.stroke();

                // Add labels
                ctx.fillStyle = '#4B5563';
                ctx.font = '12px sans-serif';
                ctx.fillText('Jan', 10, 235);
                ctx.fillText('Feb', 60, 235);
                ctx.fillText('Mar', 110, 235);
                ctx.fillText('Apr', 160, 235);
                ctx.fillText('May', 210, 235);
                ctx.fillText('Jun', 260, 235);

                ctx.fillText('$0', 5, 225);
                ctx.fillText('$500', 5, 175);
                ctx.fillText('$1000', 5, 125);
                ctx.fillText('$1500', 5, 85);
            }

            // Notifications dropdown simulation
            $('.relative button').click(function() {
                $(this).next().toggleClass('hidden');
            });
        });
    </script>
</body>
</html>


<h1>Admin Dashboard</h1>
<!-- Authentication -->
<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit">Logout</button>
</form>
