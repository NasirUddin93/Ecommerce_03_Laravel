
@extends('backend.admin.layouts.app')

@section('content')
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
            {{-- </main>
        </div>
    </div> --}}



<h1>Admin Dashboard</h1>
<!-- Authentication -->
<form method="POST" action="{{ route('logout') }}" onsubmit="return confirm('Are you sure you want to logout?');">
    @csrf
    <button type="submit">Logout</button>
</form>
@endsection

@section('scripts')
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
@endsection




