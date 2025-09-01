<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NexShop - Premium E-Commerce Store</title>
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
        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
        }
        .category-card:hover img {
            transform: scale(1.05);
        }
        .cart-count {
            position: absolute;
            top: -8px;
            right: -8px;
            background-color: #EF4444;
            color: white;
            border-radius: 50%;
            width: 20px;
            height: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
        }
        .hero-bg {
            background: linear-gradient(90deg, #4F46E5 0%, #3B82F6 100%);
        }
        .newsletter-bg {
            background: linear-gradient(90deg, #1E40AF 0%, #3B82F6 100%);
        }
        .dropdown:hover .dropdown-menu {
            display: block;
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Header -->
    <header class="bg-white shadow-sm sticky top-0 z-50">
        <div class="container mx-auto px-4">
            <div class="flex items-center justify-between py-4">
                <!-- Logo -->
                <div class="flex items-center">
                    <a href="#" class="text-2xl font-bold text-primary">NexShop</a>
                </div>

                <!-- Search Bar -->
                <div class="hidden md:flex flex-1 max-w-xl mx-8">
                    <div class="relative w-full">
                        <input type="text" placeholder="Search for products..." class="w-full py-2 px-4 rounded-lg border border-gray-300 focus:ring-2 focus:ring-primary focus:border-primary">
                        <button class="absolute right-0 top-0 h-full px-4 text-gray-500 hover:text-primary">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>

                <!-- Right Icons -->
                <div class="flex items-center space-x-6">
                    <a href="#" class="text-gray-700 hover:text-primary relative">
                        <i class="fas fa-heart text-xl"></i>
                    </a>
                    <a href="#" class="text-gray-700 hover:text-primary relative" id="cart-icon">
                        <i class="fas fa-shopping-cart text-xl"></i>
                        <span class="cart-count">3</span>
                    </a>
                    <a href="login" class="text-gray-700 hover:text-primary">
                        <i class="fas fa-user text-xl"></i>
                    </a>
                </div>
            </div>

            <!-- Navigation -->
            <nav class="hidden md:flex items-center justify-between py-3 border-t border-gray-200">
                <div class="flex space-x-8">
                    <a href="#" class="text-gray-800 hover:text-primary font-medium">Dashboard</a>
                    <div class="dropdown relative">
                        <a href="#" class="text-gray-800 hover:text-primary font-medium">Categories <i class="fas fa-chevron-down text-xs"></i></a>
                        <div class="dropdown-menu absolute hidden bg-white shadow-lg rounded-lg mt-2 p-4 w-48">
                            <a href="#" class="block py-2 px-4 hover:bg-gray-100 rounded">Electronics</a>
                            <a href="#" class="block py-2 px-4 hover:bg-gray-100 rounded">Fashion</a>
                            <a href="#" class="block py-2 px-4 hover:bg-gray-100 rounded">Dashboard & Kitchen</a>
                            <a href="#" class="block py-2 px-4 hover:bg-gray-100 rounded">Books</a>
                        </div>
                    </div>
                    <a href="#" class="text-gray-800 hover:text-primary font-medium">Deals</a>
                    <a href="#" class="text-gray-800 hover:text-primary font-medium">New Arrivals</a>
                    <a href="#" class="text-gray-800 hover:text-primary font-medium">Trending</a>
                </div>
                <div>
                    <a href="#" class="text-primary font-medium">Contact Us</a>
                </div>
            </nav>
        </div>
    </header>

    <!-- Mobile Menu Button -->
    <div class="md:hidden flex items-center justify-between p-4 border-b border-gray-200">
        <button id="mobile-menu-button" class="text-gray-700">
            <i class="fas fa-bars text-xl"></i>
        </button>
        <a href="#" class="text-xl font-bold text-primary">NexShop</a>
        <a href="#" class="text-gray-700">
            <i class="fas fa-shopping-cart text-xl"></i>
        </a>
    </div>

    <!-- Hero Section -->
    <section class="hero-bg text-white">
        <div class="container mx-auto px-4 py-16">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-10 md:mb-0">
                    <h1 class="text-4xl md:text-5xl font-bold mb-4">Summer Sale Up To 50% Off</h1>
                    <p class="text-xl mb-6">Get the latest products with amazing discounts. Limited time offer!</p>
                    <div class="flex space-x-4">
                        <a href="#" class="bg-white text-primary px-6 py-3 rounded-lg font-semibold hover:bg-gray-100">Shop Now</a>
                        <a href="#" class="border border-white px-6 py-3 rounded-lg font-semibold hover:bg-white hover:text-primary">Learn More</a>
                    </div>
                </div>
                <div class="md:w-1/2">
                    <img src="https://via.placeholder.com/500x400" alt="Hero Image" class="rounded-lg shadow-xl">
                </div>
            </div>
        </div>
    </section>

    <!-- Categories Section -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Shop By Category</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <div class="category-card rounded-lg overflow-hidden shadow-md">
                    <div class="relative overflow-hidden">
                        <img src="https://via.placeholder.com/300x200" alt="Electronics" class="w-full h-48 object-cover transition-transform duration-300">
                        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
                            <h3 class="text-white text-xl font-semibold">Electronics</h3>
                        </div>
                    </div>
                </div>
                <div class="category-card rounded-lg overflow-hidden shadow-md">
                    <div class="relative overflow-hidden">
                        <img src="https://via.placeholder.com/300x200" alt="Fashion" class="w-full h-48 object-cover transition-transform duration-300">
                        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
                            <h3 class="text-white text-xl font-semibold">Fashion</h3>
                        </div>
                    </div>
                </div>
                <div class="category-card rounded-lg overflow-hidden shadow-md">
                    <div class="relative overflow-hidden">
                        <img src="https://via.placeholder.com/300x200" alt="Dashboard & Kitchen" class="w-full h-48 object-cover transition-transform duration-300">
                        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
                            <h3 class="text-white text-xl font-semibold">Dashboard & Kitchen</h3>
                        </div>
                    </div>
                </div>
                <div class="category-card rounded-lg overflow-hidden shadow-md">
                    <div class="relative overflow-hidden">
                        <img src="https://via.placeholder.com/300x200" alt="Books" class="w-full h-48 object-cover transition-transform duration-300">
                        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
                            <h3 class="text-white text-xl font-semibold">Books</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Products -->
    <section class="py-12 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center mb-10">
                <h2 class="text-3xl font-bold">Featured Products</h2>
                <a href="#" class="text-primary hover:underline">View All</a>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Product Card -->
                <div class="product-card bg-white rounded-lg shadow-md overflow-hidden transition-transform duration-300">
                    <div class="relative">
                        <img src="https://via.placeholder.com/300x300" alt="Product" class="w-full h-56 object-cover">
                        <span class="absolute top-4 left-4 bg-secondary text-white text-xs px-2 py-1 rounded">NEW</span>
                        <button class="absolute top-4 right-4 bg-white rounded-full p-2 shadow-md hover:text-primary">
                            <i class="fas fa-heart"></i>
                        </button>
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-lg mb-1">Wireless Headphones</h3>
                        <div class="flex items-center mb-2">
                            <div class="flex text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <span class="text-gray-600 ml-2">4.5</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-lg font-bold text-gray-900">$129.99</span>
                            <button class="bg-primary text-white px-3 py-1 rounded-lg hover:bg-blue-600">Add to Cart</button>
                        </div>
                    </div>
                </div>

                <!-- Product Card -->
                <div class="product-card bg-white rounded-lg shadow-md overflow-hidden transition-transform duration-300">
                    <div class="relative">
                        <img src="https://via.placeholder.com/300x300" alt="Product" class="w-full h-56 object-cover">
                        <span class="absolute top-4 left-4 bg-red-500 text-white text-xs px-2 py-1 rounded">SALE</span>
                        <button class="absolute top-4 right-4 bg-white rounded-full p-2 shadow-md hover:text-primary">
                            <i class="fas fa-heart"></i>
                        </button>
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-lg mb-1">Smart Watch</h3>
                        <div class="flex items-center mb-2">
                            <div class="flex text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <span class="text-gray-600 ml-2">4.0</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-lg font-bold text-gray-900">$199.99 <span class="text-sm text-red-500 line-through">$249.99</span></span>
                            <button class="bg-primary text-white px-3 py-1 rounded-lg hover:bg-blue-600">Add to Cart</button>
                        </div>
                    </div>
                </div>

                <!-- Product Card -->
                <div class="product-card bg-white rounded-lg shadow-md overflow-hidden transition-transform duration-300">
                    <div class="relative">
                        <img src="https://via.placeholder.com/300x300" alt="Product" class="w-full h-56 object-cover">
                        <button class="absolute top-4 right-4 bg-white rounded-full p-2 shadow-md hover:text-primary">
                            <i class="fas fa-heart"></i>
                        </button>
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-lg mb-1">Bluetooth Speaker</h3>
                        <div class="flex items-center mb-2">
                            <div class="flex text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <span class="text-gray-600 ml-2">5.0</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-lg font-bold text-gray-900">$89.99</span>
                            <button class="bg-primary text-white px-3 py-1 rounded-lg hover:bg-blue-600">Add to Cart</button>
                        </div>
                    </div>
                </div>

                <!-- Product Card -->
                <div class="product-card bg-white rounded-lg shadow-md overflow-hidden transition-transform duration-300">
                    <div class="relative">
                        <img src="https://via.placeholder.com/300x300" alt="Product" class="w-full h-56 object-cover">
                        <span class="absolute top-4 left-4 bg-secondary text-white text-xs px-2 py-1 rounded">NEW</span>
                        <button class="absolute top-4 right-4 bg-white rounded-full p-2 shadow-md hover:text-primary">
                            <i class="fas fa-heart"></i>
                        </button>
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-lg mb-1">Fitness Tracker</h3>
                        <div class="flex items-center mb-2">
                            <div class="flex text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <span class="text-gray-600 ml-2">4.5</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-lg font-bold text-gray-900">$79.99</span>
                            <button class="bg-primary text-white px-3 py-1 rounded-lg hover:bg-blue-600">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Special Offer -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-4">
            <div class="bg-gradient-to-r from-primary to-blue-400 rounded-2xl overflow-hidden shadow-xl">
                <div class="flex flex-col md:flex-row">
                    <div class="md:w-1/2 p-12 text-white">
                        <h2 class="text-3xl font-bold mb-4">Special Offer</h2>
                        <p class="text-xl mb-6">Get 30% off on all electronics this weekend. Use code: WEEKEND30</p>
                        <div class="flex items-center space-x-2 mb-6">
                            <div class="bg-white bg-opacity-20 rounded-lg p-2 text-center">
                                <span class="block text-2xl font-bold">02</span>
                                <span class="text-sm">Days</span>
                            </div>
                            <div class="bg-white bg-opacity-20 rounded-lg p-2 text-center">
                                <span class="block text-2xl font-bold">12</span>
                                <span class="text-sm">Hours</span>
                            </div>
                            <div class="bg-white bg-opacity-20 rounded-lg p-2 text-center">
                                <span class="block text-2xl font-bold">45</span>
                                <span class="text-sm">Minutes</span>
                            </div>
                            <div class="bg-white bg-opacity-20 rounded-lg p-2 text-center">
                                <span class="block text-2xl font-bold">18</span>
                                <span class="text-sm">Seconds</span>
                            </div>
                        </div>
                        <a href="#" class="bg-white text-primary px-6 py-3 rounded-lg font-semibold inline-block hover:bg-gray-100">Shop Now</a>
                    </div>
                    <div class="md:w-1/2">
                        <img src="https://via.placeholder.com/500x300" alt="Special Offer" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-12 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">What Our Customers Say</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="flex text-yellow-400 mb-4">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="text-gray-600 mb-4">"The shopping experience was amazing. The product quality exceeded my expectations. Will definitely shop again!"</p>
                    <div class="flex items-center">
                        <img src="https://via.placeholder.com/40x40" alt="Customer" class="rounded-full mr-3">
                        <div>
                            <h4 class="font-semibold">Sarah Johnson</h4>
                            <p class="text-gray-500">Verified Customer</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="flex text-yellow-400 mb-4">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="text-gray-600 mb-4">"Fast shipping and excellent customer service. The product was exactly as described. Highly recommend this store!"</p>
                    <div class="flex items-center">
                        <img src="https://via.placeholder.com/40x40" alt="Customer" class="rounded-full mr-3">
                        <div>
                            <h4 class="font-semibold">Michael Brown</h4>
                            <p class="text-gray-500">Verified Customer</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="flex text-yellow-400 mb-4">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <p class="text-gray-600 mb-4">"I've been shopping here for years. Always find great deals and the product quality is consistently good."</p>
                    <div class="flex items-center">
                        <img src="https://via.placeholder.com/40x40" alt="Customer" class="rounded-full mr-3">
                        <div>
                            <h4 class="font-semibold">Emily Davis</h4>
                            <p class="text-gray-500">Verified Customer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter -->
    <section class="newsletter-bg py-12 text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-4">Subscribe to Our Newsletter</h2>
            <p class="text-xl mb-8">Get the latest updates on new products and upcoming sales</p>
            <div class="max-w-md mx-auto flex">
                <input type="email" placeholder="Your email address" class="flex-1 py-3 px-4 rounded-l-lg focus:outline-none text-gray-900">
                <button class="bg-accent py-3 px-6 rounded-r-lg font-semibold hover:bg-yellow-600">Subscribe</button>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">NexShop</h3>
                    <p class="text-gray-400">Your one-stop shop for all your needs. Quality products at affordable prices.</p>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">Dashboard</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Products</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Categories</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">About Us</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Customer Service</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">FAQ</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Returns & Refunds</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Shipping Policy</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Privacy Policy</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Terms & Conditions</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Contact Us</h4>
                    <address class="text-gray-400 not-italic">
                        <p>123 Commerce Street</p>
                        <p>New York, NY 10001</p>
                        <p class="mt-2">Email: info@nexshop.com</p>
                        <p>Phone: (123) 456-7890</p>
                    </address>
                    <div class="flex space-x-4 mt-4">
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-pinterest"></i></a>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2023 NexShop. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Shopping Cart Sidebar -->
    <div id="cart-sidebar" class="fixed top-0 right-0 h-full w-96 bg-white shadow-lg z-50 transform translate-x-full transition-transform duration-300">
        <div class="p-6 h-full flex flex-col">
            <div class="flex justify-between items-center mb-6">
                <h3 class="text-xl font-bold">Your Cart (3)</h3>
                <button id="close-cart" class="text-gray-500 hover:text-gray-700">
                    <i class="fas fa-times text-xl"></i>
                </button>
            </div>
            <div class="flex-1 overflow-y-auto">
                <!-- Cart Item -->
                <div class="flex py-4 border-b border-gray-200">
                    <div class="w-20 h-20 bg-gray-200 rounded-md overflow-hidden">
                        <img src="https://via.placeholder.com/80x80" alt="Product" class="w-full h-full object-cover">
                    </div>
                    <div class="ml-4 flex-1">
                        <h4 class="font-semibold">Wireless Headphones</h4>
                        <p class="text-gray-500">Black</p>
                        <div class="flex items-center justify-between mt-2">
                            <div class="flex items-center">
                                <button class="text-gray-500 hover:text-primary">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <span class="mx-2">1</span>
                                <button class="text-gray-500 hover:text-primary">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>
                            <span class="font-semibold">$129.99</span>
                        </div>
                    </div>
                </div>
                <!-- Cart Item -->
                <div class="flex py-4 border-b border-gray-200">
                    <div class="w-20 h-20 bg-gray-200 rounded-md overflow-hidden">
                        <img src="https://via.placeholder.com/80x80" alt="Product" class="w-full h-full object-cover">
                    </div>
                    <div class="ml-4 flex-1">
                        <h4 class="font-semibold">Smart Watch</h4>
                        <p class="text-gray-500">Silver</p>
                        <div class="flex items-center justify-between mt-2">
                            <div class="flex items-center">
                                <button class="text-gray-500 hover:text-primary">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <span class="mx-2">1</span>
                                <button class="text-gray-500 hover:text-primary">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>
                            <span class="font-semibold">$199.99</span>
                        </div>
                    </div>
                </div>
                <!-- Cart Item -->
                <div class="flex py-4 border-b border-gray-200">
                    <div class="w-20 h-20 bg-gray-200 rounded-md overflow-hidden">
                        <img src="https://via.placeholder.com/80x80" alt="Product" class="w-full h-full object-cover">
                    </div>
                    <div class="ml-4 flex-1">
                        <h4 class="font-semibold">Bluetooth Speaker</h4>
                        <p class="text-gray-500">Blue</p>
                        <div class="flex items-center justify-between mt-2">
                            <div class="flex items-center">
                                <button class="text-gray-500 hover:text-primary">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <span class="mx-2">1</span>
                                <button class="text-gray-500 hover:text-primary">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>
                            <span class="font-semibold">$89.99</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-200 pt-4">
                <div class="flex justify-between mb-2">
                    <span class="text-gray-600">Subtotal</span>
                    <span class="font-semibold">$419.97</span>
                </div>
                <div class="flex justify-between mb-4">
                    <span class="text-gray-600">Shipping</span>
                    <span class="font-semibold">Free</span>
                </div>
                <div class="flex justify-between mb-6 text-lg">
                    <span class="font-semibold">Total</span>
                    <span class="font-bold text-primary">$419.97</span>
                </div>
                <a href="#" class="block w-full bg-primary text-white text-center py-3 rounded-lg font-semibold hover:bg-blue-600">Checkout</a>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden">
        <div class="absolute top-0 left-0 h-full w-64 bg-white shadow-lg">
            <div class="p-4 border-b border-gray-200">
                <div class="flex justify-between items-center">
                    <a href="#" class="text-xl font-bold text-primary">NexShop</a>
                    <button id="close-mobile-menu" class="text-gray-500">
                        <i class="fas fa-times text-xl"></i>
                    </button>
                </div>
            </div>
            <nav class="p-4">
                <a href="#" class="block py-3 text-gray-800 hover:text-primary font-medium">Dashboard</a>
                <a href="#" class="block py-3 text-gray-800 hover:text-primary font-medium">Categories</a>
                <a href="#" class="block py-3 text-gray-800 hover:text-primary font-medium">Deals</a>
                <a href="#" class="block py-3 text-gray-800 hover:text-primary font-medium">New Arrivals</a>
                <a href="#" class="block py-3 text-gray-800 hover:text-primary font-medium">Trending</a>
                <div class="border-t border-gray-200 my-4"></div>
                <a href="#" class="block py-3 text-gray-800 hover:text-primary font-medium">My Account</a>
                <a href="#" class="block py-3 text-gray-800 hover:text-primary font-medium">Wishlist</a>
                <a href="#" class="block py-3 text-gray-800 hover:text-primary font-medium">Contact Us</a>
            </nav>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            // Cart functionality
            $('#cart-icon').click(function(e) {
                e.preventDefault();
                $('#cart-sidebar').removeClass('translate-x-full');
            });

            $('#close-cart').click(function() {
                $('#cart-sidebar').addClass('translate-x-full');
            });

            // Mobile menu functionality
            $('#mobile-menu-button').click(function() {
                $('#mobile-menu').removeClass('hidden');
            });

            $('#close-mobile-menu').click(function() {
                $('#mobile-menu').addClass('hidden');
            });

            // Product card hover effect
            $('.product-card').hover(
                function() {
                    $(this).addClass('shadow-lg');
                },
                function() {
                    $(this).removeClass('shadow-lg');
                }
            );

            // Category card image zoom
            $('.category-card img').hover(
                function() {
                    $(this).css('transform', 'scale(1.05)');
                },
                function() {
                    $(this).css('transform', 'scale(1)');
                }
            );

            // Add to cart animation
            $('button:contains("Add to Cart")').click(function() {
                const count = parseInt($('.cart-count').text());
                $('.cart-count').text(count + 1);

                // Animation
                $('.cart-count').animate({fontSize: '16px'}, 200, function() {
                    $(this).animate({fontSize: '12px'}, 200);
                });
            });
        });
    </script>
</body>
</html>
