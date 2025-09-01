<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Account - E-Commerce Store</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#3B82F6',
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
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
        }
        .order-card:hover {
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        .tab-content {
            display: none;
        }
        .tab-content.active {
            display: block;
        }
        .active-tab {
            border-bottom: 3px solid #3B82F6;
            color: #3B82F6;
        }
        .wishlist-item:hover {
            background-color: #F9FAFB;
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Header -->
    <header class="bg-white shadow-sm">
        <div class="container mx-auto px-4">
            <div class="flex items-center justify-between py-4">
                <!-- Logo -->
                <div class="flex items-center">
                    <a href="#" class="text-2xl font-bold text-primary">ShopEasy</a>
                </div>

                <!-- Navigation -->
                <nav class="hidden md:flex space-x-8">
                    <a href="#" class="text-gray-800 hover:text-primary">Home</a>
                    <a href="#" class="text-gray-800 hover:text-primary">Products</a>
                    <a href="#" class="text-gray-800 hover:text-primary">Categories</a>
                    <a href="#" class="text-gray-800 hover:text-primary">Deals</a>
                </nav>

                <!-- Right Icons -->
                <div class="flex items-center space-x-6">
                    <a href="#" class="text-gray-700 hover:text-primary relative">
                        <i class="fas fa-heart text-xl"></i>
                    </a>
                    <a href="#" class="text-gray-700 hover:text-primary relative">
                        <i class="fas fa-shopping-cart text-xl"></i>
                        <span class="absolute -top-2 -right-2 bg-primary text-white text-xs rounded-full h-5 w-5 flex items-center justify-center">3</span>
                    </a>
                    <a href="#" class="text-gray-700 hover:text-primary">
                        <i class="fas fa-user-circle text-xl"></i>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-8">
        <div class="flex flex-col md:flex-row gap-8">
            <!-- Sidebar -->
            <div class="md:w-1/4">
                <div class="bg-white rounded-lg shadow-sm p-6">
                    <div class="flex items-center mb-6">
                        <div class="h-16 w-16 rounded-full bg-primary flex items-center justify-center text-white text-2xl font-bold">JS</div>
                        <div class="ml-4">
                            <h2 class="font-bold text-lg">John Smith</h2>
                            <p class="text-gray-600">john.smith@example.com</p>
                        </div>
                    </div>

                    <nav class="space-y-2">
                        <a href="#" class="block py-2 px-4 rounded-lg bg-blue-50 text-primary font-medium">
                            <i class="fas fa-user mr-2"></i>Account Overview
                        </a>
                        <a href="#" class="block py-2 px-4 rounded-lg hover:bg-gray-100">
                            <i class="fas fa-shopping-bag mr-2"></i>Orders
                        </a>
                        <a href="#" class="block py-2 px-4 rounded-lg hover:bg-gray-100">
                            <i class="fas fa-heart mr-2"></i>Wishlist
                        </a>
                        <a href="#" class="block py-2 px-4 rounded-lg hover:bg-gray-100">
                            <i class="fas fa-map-marker-alt mr-2"></i>Addresses
                        </a>
                        <a href="#" class="block py-2 px-4 rounded-lg hover:bg-gray-100">
                            <i class="fas fa-credit-card mr-2"></i>Payment Methods
                        </a>
                        <a href="#" class="block py-2 px-4 rounded-lg hover:bg-gray-100">
                            <i class="fas fa-lock mr-2"></i>Change Password
                        </a>
                        <a href="#" class="block py-2 px-4 rounded-lg hover:bg-gray-100">
                            <i class="fas fa-sign-out-alt mr-2"></i>Logout
                        </a>
                    </nav>
                </div>

                <!-- Support Card -->
                <div class="bg-white rounded-lg shadow-sm p-6 mt-6">
                    <h3 class="font-bold text-lg mb-4">Need Help?</h3>
                    <p class="text-gray-600 mb-4">Our customer support team is available 24/7 to assist you</p>
                    <button class="w-full bg-gray-100 hover:bg-gray-200 text-gray-800 py-2 px-4 rounded-lg">
                        <i class="fas fa-headset mr-2"></i>Contact Support
                    </button>
                </div>
            </div>

            <!-- Dashboard Content -->
            <div class="md:w-3/4">
                <h1 class="text-2xl font-bold mb-6">My Account Dashboard</h1>

                <!-- Tabs -->
                <div class="bg-white rounded-lg shadow-sm mb-6">
                    <div class="border-b border-gray-200">
                        <nav class="flex -mb-px">
                            <button class="py-4 px-6 font-medium text-center border-transparent hover:text-primary active-tab" data-tab="overview">
                                Overview
                            </button>
                            <button class="py-4 px-6 font-medium text-center border-transparent hover:text-primary" data-tab="orders">
                                Orders
                            </button>
                            <button class="py-4 px-6 font-medium text-center border-transparent hover:text-primary" data-tab="wishlist">
                                Wishlist
                            </button>
                            <button class="py-4 px-6 font-medium text-center border-transparent hover:text-primary" data-tab="addresses">
                                Addresses
                            </button>
                        </nav>
                    </div>
                </div>

                <!-- Tab Content -->
                <div class="tab-content active" id="overview">
                    <!-- Stats Cards -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                        <div class="dashboard-card bg-white rounded-lg shadow-sm p-6">
                            <div class="flex items-center">
                                <div class="p-3 rounded-full bg-blue-100 text-primary">
                                    <i class="fas fa-shopping-bag text-xl"></i>
                                </div>
                                <div class="ml-4">
                                    <p class="text-gray-600">Orders</p>
                                    <h3 class="text-2xl font-bold text-gray-800">12</h3>
                                </div>
                            </div>
                        </div>

                        <div class="dashboard-card bg-white rounded-lg shadow-sm p-6">
                            <div class="flex items-center">
                                <div class="p-3 rounded-full bg-green-100 text-secondary">
                                    <i class="fas fa-heart text-xl"></i>
                                </div>
                                <div class="ml-4">
                                    <p class="text-gray-600">Wishlist</p>
                                    <h3 class="text-2xl font-bold text-gray-800">8</h3>
                                </div>
                            </div>
                        </div>

                        <div class="dashboard-card bg-white rounded-lg shadow-sm p-6">
                            <div class="flex items-center">
                                <div class="p-3 rounded-full bg-yellow-100 text-accent">
                                    <i class="fas fa-star text-xl"></i>
                                </div>
                                <div class="ml-4">
                                    <p class="text-gray-600">Reviews</p>
                                    <h3 class="text-2xl font-bold text-gray-800">5</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Recent Orders -->
                    <div class="bg-white rounded-lg shadow-sm p-6 mb-8">
                        <div class="flex justify-between items-center mb-6">
                            <h2 class="text-xl font-bold">Recent Orders</h2>
                            <a href="#" class="text-primary hover:underline">View All</a>
                        </div>

                        <div class="space-y-4">
                            <div class="order-card border border-gray-200 rounded-lg p-4">
                                <div class="flex justify-between items-start mb-2">
                                    <div>
                                        <p class="font-semibold">Order #ORD-12567</p>
                                        <p class="text-gray-600">Placed on June 12, 2023</p>
                                    </div>
                                    <span class="px-3 py-1 bg-green-100 text-green-800 text-sm rounded-full">Delivered</span>
                                </div>
                                <div class="flex items-center justify-between">
                                    <p class="font-bold">$245.99</p>
                                    <button class="text-primary hover:underline">View Order</button>
                                </div>
                            </div>

                            <div class="order-card border border-gray-200 rounded-lg p-4">
                                <div class="flex justify-between items-start mb-2">
                                    <div>
                                        <p class="font-semibold">Order #ORD-12543</p>
                                        <p class="text-gray-600">Placed on June 5, 2023</p>
                                    </div>
                                    <span class="px-3 py-1 bg-blue-100 text-blue-800 text-sm rounded-full">Shipped</span>
                                </div>
                                <div class="flex items-center justify-between">
                                    <p class="font-bold">$129.99</p>
                                    <button class="text-primary hover:underline">View Order</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Recently Viewed -->
                    <div class="bg-white rounded-lg shadow-sm p-6">
                        <h2 class="text-xl font-bold mb-6">Recently Viewed</h2>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="flex items-center border border-gray-200 rounded-lg p-3">
                                <div class="h-16 w-16 bg-gray-200 rounded-md"></div>
                                <div class="ml-4">
                                    <p class="font-medium">Wireless Headphones</p>
                                    <p class="text-gray-600">$129.99</p>
                                </div>
                            </div>
                            <div class="flex items-center border border-gray-200 rounded-lg p-3">
                                <div class="h-16 w-16 bg-gray-200 rounded-md"></div>
                                <div class="ml-4">
                                    <p class="font-medium">Smart Watch</p>
                                    <p class="text-gray-600">$199.99</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Orders Tab -->
                <div class="tab-content" id="orders">
                    <div class="bg-white rounded-lg shadow-sm p-6">
                        <h2 class="text-xl font-bold mb-6">Order History</h2>

                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead>
                                    <tr>
                                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Order</th>
                                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Total</th>
                                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200">
                                    <tr>
                                        <td class="px-4 py-4">#ORD-12567</td>
                                        <td class="px-4 py-4">Jun 12, 2023</td>
                                        <td class="px-4 py-4"><span class="px-2 py-1 bg-green-100 text-green-800 rounded-full text-xs">Delivered</span></td>
                                        <td class="px-4 py-4">$245.99</td>
                                        <td class="px-4 py-4">
                                            <button class="text-primary hover:underline mr-3">View</button>
                                            <button class="text-primary hover:underline">Reorder</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-4">#ORD-12543</td>
                                        <td class="px-4 py-4">Jun 5, 2023</td>
                                        <td class="px-4 py-4"><span class="px-2 py-1 bg-blue-100 text-blue-800 rounded-full text-xs">Shipped</span></td>
                                        <td class="px-4 py-4">$129.99</td>
                                        <td class="px-4 py-4">
                                            <button class="text-primary hover:underline mr-3">View</button>
                                            <button class="text-primary hover:underline">Reorder</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-4">#ORD-12489</td>
                                        <td class="px-4 py-4">May 28, 2023</td>
                                        <td class="px-4 py-4"><span class="px-2 py-1 bg-green-100 text-green-800 rounded-full text-xs">Delivered</span></td>
                                        <td class="px-4 py-4">$89.50</td>
                                        <td class="px-4 py-4">
                                            <button class="text-primary hover:underline mr-3">View</button>
                                            <button class="text-primary hover:underline">Reorder</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Wishlist Tab -->
                <div class="tab-content" id="wishlist">
                    <div class="bg-white rounded-lg shadow-sm p-6">
                        <h2 class="text-xl font-bold mb-6">My Wishlist</h2>

                        <div class="space-y-4">
                            <div class="wishlist-item flex items-center justify-between border border-gray-200 rounded-lg p-4">
                                <div class="flex items-center">
                                    <div class="h-16 w-16 bg-gray-200 rounded-md"></div>
                                    <div class="ml-4">
                                        <p class="font-medium">Wireless Headphones</p>
                                        <p class="text-gray-600">$129.99</p>
                                        <div class="flex items-center mt-1">
                                            <div class="flex text-yellow-400">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                            </div>
                                            <span class="text-gray-600 ml-2">4.5</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex space-x-3">
                                    <button class="text-red-500 hover:text-red-700">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                    <button class="bg-primary text-white px-4 py-2 rounded-lg hover:bg-blue-600">
                                        Add to Cart
                                    </button>
                                </div>
                            </div>

                            <div class="wishlist-item flex items-center justify-between border border-gray-200 rounded-lg p-4">
                                <div class="flex items-center">
                                    <div class="h-16 w-16 bg-gray-200 rounded-md"></div>
                                    <div class="ml-4">
                                        <p class="font-medium">Smart Watch</p>
                                        <p class="text-gray-600">$199.99</p>
                                        <div class="flex items-center mt-1">
                                            <div class="flex text-yellow-400">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <span class="text-gray-600 ml-2">4.0</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex space-x-3">
                                    <button class="text-red-500 hover:text-red-700">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                    <button class="bg-primary text-white px-4 py-2 rounded-lg hover:bg-blue-600">
                                        Add to Cart
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Addresses Tab -->
                <div class="tab-content" id="addresses">
                    <div class="bg-white rounded-lg shadow-sm p-6">
                        <div class="flex justify-between items-center mb-6">
                            <h2 class="text-xl font-bold">My Addresses</h2>
                            <button class="bg-primary text-white px-4 py-2 rounded-lg hover:bg-blue-600">
                                <i class="fas fa-plus mr-2"></i>Add New Address
                            </button>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="border border-gray-200 rounded-lg p-6">
                                <div class="flex justify-between items-start mb-4">
                                    <h3 class="font-semibold">Default Address</h3>
                                    <div class="flex space-x-2">
                                        <button class="text-primary hover:underline">Edit</button>
                                        <button class="text-red-500 hover:underline">Remove</button>
                                    </div>
                                </div>
                                <p class="mb-2">John Smith</p>
                                <p class="text-gray-600 mb-2">123 Main Street, Apt 4B</p>
                                <p class="text-gray-600 mb-2">New York, NY 10001</p>
                                <p class="text-gray-600 mb-4">United States</p>
                                <p class="text-gray-600">Phone: (555) 123-4567</p>
                            </div>

                            <div class="border border-gray-200 rounded-lg p-6">
                                <div class="flex justify-between items-start mb-4">
                                    <h3 class="font-semibold">Work Address</h3>
                                    <div class="flex space-x-2">
                                        <button class="text-primary hover:underline">Edit</button>
                                        <button class="text-red-500 hover:underline">Remove</button>
                                    </div>
                                </div>
                                <p class="mb-2">John Smith</p>
                                <p class="text-gray-600 mb-2">456 Business Ave, Floor 10</p>
                                <p class="text-gray-600 mb-2">New York, NY 10005</p>
                                <p class="text-gray-600 mb-4">United States</p>
                                <p class="text-gray-600">Phone: (555) 987-6543</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
{{-- logout section  --}}
<h1>Customer Dashboard</h1>
<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit">Logout</button>
</form>
{{-- end logout section  --}}

    <!-- Footer -->
    <footer class="bg-dark text-white py-12 mt-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">ShopEasy</h3>
                    <p class="text-gray-400">Your one-stop shop for all your needs. Quality products at affordable prices.</p>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">Home</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Products</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Categories</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">About Us</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Customer Service</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">Contact Us</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">FAQ</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Returns & Refunds</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Shipping Policy</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Newsletter</h4>
                    <p class="text-gray-400 mb-4">Subscribe to get special offers and once-in-a-lifetime deals.</p>
                    <div class="flex">
                        <input type="email" placeholder="Your email address" class="flex-1 py-3 px-4 rounded-l-lg focus:outline-none text-gray-900">
                        <button class="bg-primary py-3 px-6 rounded-r-lg font-semibold hover:bg-blue-600">Subscribe</button>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2023 ShopEasy. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        $(document).ready(function() {
            // Tab functionality
            $('button[data-tab]').click(function() {
                const tabId = $(this).data('tab');

                // Update active tab
                $('button[data-tab]').removeClass('active-tab');
                $(this).addClass('active-tab');

                // Show active tab content
                $('.tab-content').removeClass('active');
                $(`#${tabId}`).addClass('active');
            });

            // Wishlist item removal
            $('.wishlist-item .fa-trash').closest('button').click(function() {
                $(this).closest('.wishlist-item').fadeOut(300, function() {
                    $(this).remove();
                });
            });

            // Add to cart animation
            $('button:contains("Add to Cart")').click(function() {
                const originalText = $(this).text();
                $(this).html('<i class="fas fa-check"></i> Added');
                $(this).addClass('bg-green-500').removeClass('bg-primary');

                setTimeout(() => {
                    $(this).html(originalText);
                    $(this).addClass('bg-primary').removeClass('bg-green-500');
                }, 1500);
            });
        });
    </script>
</body>
</html>


