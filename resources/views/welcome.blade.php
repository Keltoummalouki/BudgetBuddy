<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BudgetBuddy - Your Financial Partner</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&display=swap" rel="stylesheet">
</head>
<body class="bg-gray-50 font-poppins antialiased transition-colors duration-300 scroll-smooth" id="themeBody">
    <!-- Navigation -->
    <nav class="bg-white dark:bg-gray-800 shadow-lg fixed w-full z-20 top-0 transition-all duration-300" id="navbar">
        <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
            <div class="flex items-center space-x-3">
                <div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow-sm border border-purple-200 dark:border-purple-500">
                    <span class="text-purple-700 dark:text-purple-400 text-2xl font-bold">$</span>
                </div>
                <div class="text-2xl font-extrabold text-purple-700 dark:text-purple-400 tracking-wide">BUDGET BUDDY</div>
            </div>
            <div class="hidden md:flex space-x-6 items-center">
                <a href="#home" class="text-gray-600 dark:text-gray-300 hover:text-purple-700 dark:hover:text-purple-400 transition duration-300 font-semibold">Home</a>
                <a href="#features" class="text-gray-600 dark:text-gray-300 hover:text-purple-700 dark:hover:text-purple-400 transition duration-300 font-semibold">Features</a>
                <a href="#pricing" class="text-gray-600 dark:text-gray-300 hover:text-purple-700 dark:hover:text-purple-400 transition duration-300 font-semibold">Pricing</a>
                <a href="#blog" class="text-gray-600 dark:text-gray-300 hover:text-purple-700 dark:hover:text-purple-400 transition duration-300 font-semibold">Blog</a>
                <a href="#contact" class="text-gray-600 dark:text-gray-300 hover:text-purple-700 dark:hover:text-purple-400 transition duration-300 font-semibold">Contact</a>
                <button id="themeToggle" class="text-gray-600 dark:text-gray-300 hover:text-purple-700 dark:hover:text-purple-400">
                    <i class="fas fa-moon text-xl"></i>
                </button>
            </div>
            <button class="md:hidden text-gray-600 dark:text-gray-300" id="menuToggle">
                <i class="fas fa-bars text-2xl"></i>
            </button>
        </div>
        <!-- Mobile Menu -->
        <div id="mobileMenu" class="hidden md:hidden bg-white dark:bg-gray-800 shadow-lg">
            <div class="px-4 py-2 flex flex-col space-y-2">
                <a href="#home" class="text-gray-600 dark:text-gray-300 hover:text-purple-700 dark:hover:text-purple-400 py-2 font-semibold">Home</a>
                <a href="#features" class="text-gray-600 dark:text-gray-300 hover:text-purple-700 dark:hover:text-purple-400 py-2 font-semibold">Features</a>
                <a href="#pricing" class="text-gray-600 dark:text-gray-300 hover:text-purple-700 dark:hover:text-purple-400 py-2 font-semibold">Pricing</a>
                <a href="#blog" class="text-gray-600 dark:text-gray-300 hover:text-purple-700 dark:hover:text-purple-400 py-2 font-semibold">Blog</a>
                <a href="#contact" class="text-gray-600 dark:text-gray-300 hover:text-purple-700 dark:hover:text-purple-400 py-2 font-semibold">Contact</a>
                <button id="mobileThemeToggle" class="text-gray-600 dark:text-gray-300 hover:text-purple-700 dark:hover:text-purple-400 text-left py-2">
                    <i class="fas fa-moon text-xl mr-2"></i> Toggle Theme
                </button>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="relative bg-gradient-to-r from-purple-700 to-purple-900 text-white pt-32 pb-20 overflow-hidden">
        <video autoplay muted loop class="absolute inset-0 w-full h-full object-cover opacity-20">
            <source src="https://assets.mixkit.co/videos/preview/mixkit-abstract-purple-background-with-moving-lines-145.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <canvas id="particleCanvas" class="absolute inset-0 opacity-10"></canvas>
        <div class="max-w-7xl mx-auto px-4 text-center relative z-10">
            <h1 class="text-4xl md:text-6xl font-extrabold mb-6 animate-fade-in-down">Your Partner in Financial Success</h1>
            <p class="text-xl md:text-2xl mb-8 animate-fade-in-up">BudgetBuddy: Plan, Track, and Thrive with Confidence</p>
            <div class="flex justify-center space-x-4">
                <button id="getStartedBtn" class="bg-white text-purple-700 px-8 py-4 rounded-full font-semibold text-lg hover:bg-purple-100 transform hover:scale-105 transition duration-300 shadow-lg">
                    Get Started
                </button>
                <button id="learnMoreBtn" class="bg-transparent border-2 border-white text-white px-8 py-4 rounded-full font-semibold text-lg hover:bg-white hover:text-purple-700 transition duration-300 shadow-lg">
                    Learn More
                </button>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-16 bg-white dark:bg-gray-800">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid md:grid-cols-3 gap-8 text-center">
                <div>
                    <h3 class="text-4xl font-bold text-purple-700 dark:text-purple-400 mb-2" id="usersCount">0</h3>
                    <p class="text-gray-600 dark:text-gray-300">Happy Users</p>
                </div>
                <div>
                    <h3 class="text-4xl font-bold text-purple-700 dark:text-purple-400 mb-2" id="savingsCount">0</h3>
                    <p class="text-gray-600 dark:text-gray-300">Dollars Saved</p>
                </div>
                <div>
                    <h3 class="text-4xl font-bold text-purple-700 dark:text-purple-400 mb-2" id="budgetsCount">0</h3>
                    <p class="text-gray-600 dark:text-gray-300">Budgets Created</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-20 bg-gray-50 dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-16 text-gray-800 dark:text-gray-100">Features That Empower You</h2>
            <div class="grid md:grid-cols-3 gap-10">
                <div class="bg-white dark:bg-gray-800 p-8 rounded-xl shadow-lg hover:shadow-xl transition duration-300 transform hover:-translate-y-2">
                    <i class="fas fa-chart-line text-4xl text-purple-700 dark:text-purple-400 mb-4"></i>
                    <h3 class="text-2xl font-semibold mb-4 text-gray-800 dark:text-gray-100">Real-Time Tracking</h3>
                    <p class="text-gray-600 dark:text-gray-300">Monitor your expenses instantly with detailed analytics</p>
                </div>
                <div class="bg-white dark:bg-gray-800 p-8 rounded-xl shadow-lg hover:shadow-xl transition duration-300 transform hover:-translate-y-2">
                    <i class="fas fa-robot text-4xl text-purple-700 dark:text-purple-400 mb-4"></i>
                    <h3 class="text-2xl font-semibold mb-4 text-gray-800 dark:text-gray-100">AI-Driven Insights</h3>
                    <p class="text-gray-600 dark:text-gray-300">Smart recommendations to improve your financial habits</p>
                </div>
                <div class="bg-white dark:bg-gray-800 p-8 rounded-xl shadow-lg hover:shadow-xl transition duration-300 transform hover:-translate-y-2">
                    <i class="fas fa-lock text-4xl text-purple-700 dark:text-purple-400 mb-4"></i>
                    <h3 class="text-2xl font-semibold mb-4 text-gray-800 dark:text-gray-100">Bank-Level Security</h3>
                    <p class="text-gray-600 dark:text-gray-300">Your data is safe with cutting-edge encryption</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section id="pricing" class="py-20 bg-white dark:bg-gray-800">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-16 text-gray-800 dark:text-gray-100">Choose Your Plan</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-gray-50 dark:bg-gray-700 p-8 rounded-xl shadow-lg hover:shadow-xl transition duration-300 transform hover:-translate-y-2">
                    <h3 class="text-2xl font-semibold mb-4 text-gray-800 dark:text-gray-100">Basic</h3>
                    <p class="text-4xl font-bold text-purple-700 dark:text-purple-400 mb-4">$0<span class="text-lg font-normal">/mo</span></p>
                    <ul class="text-gray-600 dark:text-gray-300 mb-6 space-y-2">
                        <li><i class="fas fa-check text-purple-700 dark:text-purple-400 mr-2"></i>Expense Tracking</li>
                        <li><i class="fas fa-check text-purple-700 dark:text-purple-400 mr-2"></i>Basic Budgeting</li>
                        <li><i class="fas fa-check text-purple-700 dark:text-purple-400 mr-2"></i>Standard Support</li>
                    </ul>
                    <button class="w-full bg-purple-700 dark:bg-purple-600 text-white p-3 rounded-lg font-semibold hover:bg-purple-800 dark:hover:bg-purple-500 transition duration-300">Get Started</button>
                </div>
                <div class="bg-purple-50 dark:bg-purple-900 p-8 rounded-xl shadow-lg hover:shadow-xl transition duration-300 transform hover:-translate-y-2 border-2 border-purple-700 dark:border-purple-400">
                    <h3 class="text-2xl font-semibold mb-4 text-gray-800 dark:text-gray-100">Pro</h3>
                    <p class="text-4xl font-bold text-purple-700 dark:text-purple-400 mb-4">$9.99<span class="text-lg font-normal">/mo</span></p>
                    <ul class="text-gray-600 dark:text-gray-300 mb-6 space-y-2">
                        <li><i class="fas fa-check text-purple-700 dark:text-purple-400 mr-2"></i>All Basic Features</li>
                        <li><i class="fas fa-check text-purple-700 dark:text-purple-400 mr-2"></i>AI Insights</li>
                        <li><i class="fas fa-check text-purple-700 dark:text-purple-400 mr-2"></i>Priority Support</li>
                    </ul>
                    <button class="w-full bg-purple-700 dark:bg-purple-600 text-white p-3 rounded-lg font-semibold hover:bg-purple-800 dark:hover:bg-purple-500 transition duration-300">Choose Pro</button>
                </div>
                <div class="bg-gray-50 dark:bg-gray-700 p-8 rounded-xl shadow-lg hover:shadow-xl transition duration-300 transform hover:-translate-y-2">
                    <h3 class="text-2xl font-semibold mb-4 text-gray-800 dark:text-gray-100">Enterprise</h3>
                    <p class="text-4xl font-bold text-purple-700 dark:text-purple-400 mb-4">Custom</p>
                    <ul class="text-gray-600 dark:text-gray-300 mb-6 space-y-2">
                        <li><i class="fas fa-check text-purple-700 dark:text-purple-400 mr-2"></i>All Pro Features</li>
                        <li><i class="fas fa-check text-purple-700 dark:text-purple-400 mr-2"></i>Custom Integrations</li>
                        <li><i class="fas fa-check text-purple-700 dark:text-purple-400 mr-2"></i>Dedicated Support</li>
                    </ul>
                    <button class="w-full bg-purple-700 dark:bg-purple-600 text-white p-3 rounded-lg font-semibold hover:bg-purple-800 dark:hover:bg-purple-500 transition duration-300">Contact Us</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Preview Section -->
    <section id="blog" class="py-20 bg-gray-50 dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-16 text-gray-800 dark:text-gray-100">Latest Financial Tips</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md hover:shadow-xl transition duration-300">
                    <div class="w-full h-48 bg-purple-200 dark:bg-purple-600 rounded-lg mb-4"></div>
                    <h3 class="text-xl font-semibold mb-2 text-gray-800 dark:text-gray-100">5 Tips to Save More Each Month</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">Learn simple strategies to boost your savings without sacrificing your lifestyle.</p>
                    <a href="#" class="text-purple-700 dark:text-purple-400 hover:underline">Read More</a>
                </div>
                <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md hover:shadow-xl transition duration-300">
                    <div class="w-full h-48 bg-purple-200 dark:bg-purple-600 rounded-lg mb-4"></div>
                    <h3 class="text-xl font-semibold mb-2 text-gray-800 dark:text-gray-100">How to Budget for Beginners</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">A step-by-step guide to creating your first budget with BudgetBuddy.</p>
                    <a href="#" class="text-purple-700 dark:text-purple-400 hover:underline">Read More</a>
                </div>
                <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md hover:shadow-xl transition duration-300">
                    <div class="w-full h-48 bg-purple-200 dark:bg-purple-600 rounded-lg mb-4"></div>
                    <h3 class="text-xl font-semibold mb-2 text-gray-800 dark:text-gray-100">The Power of AI in Finance</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">Discover how AI can help you make smarter financial decisions.</p>
                    <a href="#" class="text-purple-700 dark:text-purple-400 hover:underline">Read More</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-20 bg-white dark:bg-gray-800">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-16 text-gray-800 dark:text-gray-100">What Our Users Say</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-gray-50 dark:bg-gray-700 p-6 rounded-lg shadow-md">
                    <p class="text-gray-600 dark:text-gray-300 italic mb-4">"BudgetBuddy transformed my financial life!"</p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-purple-200 dark:bg-purple-600 rounded-full mr-4"></div>
                        <div>
                            <p class="font-semibold text-gray-800 dark:text-gray-100">Laura K.</p>
                            <p class="text-sm text-gray-500 dark:text-gray-400">Small Business Owner</p>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 dark:bg-gray-700 p-6 rounded-lg shadow-md">
                    <p class="text-gray-600 dark:text-gray-300 italic mb-4">"The best budgeting app I’ve ever used."</p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-purple-200 dark:bg-purple-600 rounded-full mr-4"></div>
                        <div>
                            <p class="font-semibold text-gray-800 dark:text-gray-100">Mark S.</p>
                            <p class="text-sm text-gray-500 dark:text-gray-400">Freelancer</p>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 dark:bg-gray-700 p-6 rounded-lg shadow-md">
                    <p class="text-gray-600 dark:text-gray-300 italic mb-4">"I saved $1,000 in just 2 months!"</p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-purple-200 dark:bg-purple-600 rounded-full mr-4"></div>
                        <div>
                            <p class="font-semibold text-gray-800 dark:text-gray-100">Rachel T.</p>
                            <p class="text-sm text-gray-500 dark:text-gray-400">Student</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="py-20 bg-gradient-to-r from-purple-700 to-purple-900 text-white">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <h2 class="text-4xl font-bold mb-6 animate-fade-in-down">Take Control of Your Finances Today</h2>
            <p class="text-xl mb-8 animate-fade-in-up">Join BudgetBuddy and start your journey to financial freedom.</p>
            <button id="signUpBtn" class="bg-white text-purple-700 px-8 py-4 rounded-full font-semibold text-lg hover:bg-purple-100 transform hover:scale-105 transition duration-300 shadow-lg">
                Sign Up Now
            </button>
        </div>
    </section>

    <!-- Footer -->
    <section id="contact">
        <footer class="bg-gray-900 text-white py-10">
            <div class="max-w-7xl mx-auto px-4 grid md:grid-cols-4 gap-8">
                <div>
                    <div class="flex items-center space-x-3 mb-4">
                        <div class="bg-white p-2 rounded-lg shadow-sm border border-purple-200">
                            <span class="text-purple-700 text-2xl font-bold">$</span>
                        </div>
                        <div class="text-2xl font-extrabold tracking-wide">BUDGET BUDDY</div>
                    </div>
                    <p class="text-gray-400">Powered by Laravel API</p>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Product</h4>
                    <ul class="space-y-2">
                        <li><a href="#features" class="text-gray-400 hover:text-white transition duration-300">Features</a></li>
                        <li><a href="#pricing" class="text-gray-400 hover:text-white transition duration-300">Pricing</a></li>
                        <li><a href="#blog" class="text-gray-400 hover:text-white transition duration-300">Blog</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Company</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">About</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Support</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Privacy</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Connect</h4>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-twitter text-2xl"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-facebook text-2xl"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-linkedin text-2xl"></i></a>
                    </div>
                </div>
            </div>
            <div class="mt-8 text-center text-gray-400">
                <p>© <span id="year"></span> BudgetBuddy. All rights reserved.</p>
            </div>
        </footer>
    </section>

    <!-- Live Chat Widget -->
    <div id="chatWidget" class="fixed bottom-5 right-5 z-30">
        <button id="chatToggle" class="bg-purple-700 text-white p-4 rounded-full shadow-lg hover:bg-purple-800 transition duration-300">
            <i class="fas fa-comment text-xl"></i>
        </button>
        <div id="chatBox" class="hidden absolute bottom-16 right-0 bg-white dark:bg-gray-800 p-4 rounded-lg shadow-lg w-80">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-lg font-semibold text-purple-700 dark:text-purple-400">Chat with Us</h3>
                <button id="closeChat" class="text-gray-600 dark:text-gray-300 hover:text-gray-800 dark:hover:text-gray-100">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div id="chatMessages" class="h-48 overflow-y-auto mb-4 p-2 bg-gray-50 dark:bg-gray-700 rounded-lg">
                <p class="text-gray-600 dark:text-gray-300">Hello! How can we help you today?</p>
            </div>
            <form id="chatForm">
                <input type="text" id="chatInput" class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-700 dark:focus:ring-purple-400 bg-gray-50 dark:bg-gray-700 text-gray-800 dark:text-gray-100" placeholder="Type your message..." required>
            </form>
        </div>
    </div>

    <!-- Sign-Up Modal -->
    <div id="signUpModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-30 hidden">
        <div class="bg-white dark:bg-gray-800 p-8 rounded-lg shadow-lg max-w-md w-full">
            <div class="flex justify-between items-center mb-6">
                <h3 class="text-2xl font-bold text-purple-700 dark:text-purple-400">Join BudgetBuddy</h3>
                <button id="closeModal" class="text-gray-600 dark:text-gray-300 hover:text-gray-800 dark:hover:text-gray-100">
                    <i class="fas fa-times text-xl"></i>
                </button>
            </div>
            <form id="signUpForm">
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 dark:text-gray-300 font-semibold mb-2">Name</label>
                    <input type="text" id="name" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-700 dark:focus:ring-purple-400 bg-gray-50 dark:bg-gray-700 text-gray-800 dark:text-gray-100" placeholder="Your Name" required>
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 dark:text-gray-300 font-semibold mb-2">Email</label>
                    <input type="email" id="email" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-700 dark:focus:ring-purple-400 bg-gray-50 dark:bg-gray-700 text-gray-800 dark:text-gray-100" placeholder="Your Email" required>
                </div>
                <div class="mb-6">
                    <label for="password" class="block text-gray-700 dark:text-gray-300 font-semibold mb-2">Password</label>
                    <input type="password" id="password" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-700 dark:focus:ring-purple-400 bg-gray-50 dark:bg-gray-700 text-gray-800 dark:text-gray-100" placeholder="Your Password" required>
                </div>
                <button type="submit" class="w-full bg-purple-700 dark:bg-purple-600 text-white p-3 rounded-lg font-semibold hover:bg-purple-800 dark:hover:bg-purple-500 transition duration-300">Sign Up</button>
            </form>
        </div>
    </div>

    <!-- JavaScript -->
    <script>
        // Theme Toggle
        const themeToggle = document.getElementById('themeToggle');
        const mobileThemeToggle = document.getElementById('mobileThemeToggle');
        const themeBody = document.getElementById('themeBody');
        const themeIcon = themeToggle.querySelector('i');

        const toggleTheme = () => {
            if (themeBody.classList.contains('dark')) {
                themeBody.classList.remove('dark');
                localStorage.setItem('theme', 'light');
                themeIcon.classList.remove('fa-sun');
                themeIcon.classList.add('fa-moon');
            } else {
                themeBody.classList.add('dark');
                localStorage.setItem('theme', 'dark');
                themeIcon.classList.remove('fa-moon');
                themeIcon.classList.add('fa-sun');
            }
        };

        themeToggle.addEventListener('click', toggleTheme);
        mobileThemeToggle.addEventListener('click', toggleTheme);

        // Load theme from localStorage
        if (localStorage.getItem('theme') === 'dark') {
            themeBody.classList.add('dark');
            themeIcon.classList.remove('fa-moon');
            themeIcon.classList.add('fa-sun');
        }

        // Mobile menu toggle
        const menuToggle = document.getElementById('menuToggle');
        const mobileMenu = document.getElementById('mobileMenu');
        
        menuToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Navbar scroll effect
        window.addEventListener('scroll', () => {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('bg-opacity-90', 'backdrop-blur-md');
            } else {
                navbar.classList.remove('bg-opacity-90', 'backdrop-blur-md');
            }
        });

        // Button animations and modal handling
        const getStartedBtn = document.getElementById('getStartedBtn');
        const learnMoreBtn = document.getElementById('learnMoreBtn');
        const signUpBtn = document.getElementById('signUpBtn');
        const signUpModal = document.getElementById('signUpModal');
        const closeModal = document.getElementById('closeModal');
        const signUpForm = document.getElementById('signUpForm');

        const openModal = () => {
            signUpModal.classList.remove('hidden');
        };

        const closeModalFn = () => {
            signUpModal.classList.add('hidden');
        };

        getStartedBtn.addEventListener('click', () => {
            getStartedBtn.classList.add('scale-95');
            setTimeout(() => {
                getStartedBtn.classList.remove('scale-95');
                openModal();
            }, 150);
        });

        learnMoreBtn.addEventListener('click', () => {
            learnMoreBtn.classList.add('scale-95');
            setTimeout(() => {
                learnMoreBtn.classList.remove('scale-95');
                alert('Discover how BudgetBuddy can help you achieve financial freedom!');
            }, 150);
        });

        signUpBtn.addEventListener('click', () => {
            signUpBtn.classList.add('scale-95');
            setTimeout(() => {
                signUpBtn.classList.remove('scale-95');
                openModal();
            }, 150);
        });

        closeModal.addEventListener('click', closeModalFn);

        signUpForm.addEventListener('submit', (e) => {
            e.preventDefault();
            alert('Thank you for signing up! Check your email for confirmation.');
            closeModalFn();
            signUpForm.reset();
        });

        // Stats counter animation
        const animateCounter = (element, start, end, duration) => {
            let startTimestamp = null;
            const step = (timestamp) => {
                if (!startTimestamp) startTimestamp = timestamp;
                const progress = Math.min((timestamp - startTimestamp) / duration, 1);
                element.textContent = Math.floor(progress * (end - start) + start).toLocaleString();
                if (progress < 1) {
                    window.requestAnimationFrame(step);
                }
            };
            window.requestAnimationFrame(step);
        };

        const startCounters = () => {
            animateCounter(document.getElementById('usersCount'), 0, 100000, 2000);
            animateCounter(document.getElementById('savingsCount'), 0, 5000000, 2000);
            animateCounter(document.getElementById('budgetsCount'), 0, 150000, 2000);
        };

        const statsSection = document.querySelector('.py-16');
        const observer = new IntersectionObserver((entries) => {
            if (entries[0].isIntersecting) {
                startCounters();
                observer.disconnect();
            }
        }, { threshold: 0.5 });
        observer.observe(statsSection);

        // Particle animation in hero section
        const canvas = document.getElementById('particleCanvas');
        const ctx = canvas.getContext('2d');
        canvas.width = window.innerWidth;
        canvas.height = canvas.parentElement.offsetHeight;

        const particlesArray = [];
        const numberOfParticles = 50;

        class Particle {
            constructor() {
                this.x = Math.random() * canvas.width;
                this.y = Math.random() * canvas.height;
                this.size = Math.random() * 5 + 1;
                this.speedX = Math.random() * 1 - 0.5;
                this.speedY = Math.random() * 1 - 0.5;
            }
            update() {
                this.x += this.speedX;
                this.y += this.speedY;
                if (this.size > 0.2) this.size -= 0.01;
                if (this.x < 0 || this.x > canvas.width) this.speedX *= -1;
                if (this.y < 0 || this.y > canvas.height) this.speedY *= -1;
            }
            draw() {
                ctx.fillStyle = 'rgba(255, 255, 255, 0.8)';
                ctx.beginPath();
                ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
                ctx.fill();
            }
        }

        function initParticles() {
            for (let i = 0; i < numberOfParticles; i++) {
                particlesArray.push(new Particle());
            }
        }

        function animateParticles() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            for (let i = 0; i < particlesArray.length; i++) {
                particlesArray[i].update();
                particlesArray[i].draw();
                if (particlesArray[i].size <= 0.2) {
                    particlesArray.splice(i, 1);
                    i--;
                    particlesArray.push(new Particle());
                }
            }
            requestAnimationFrame(animateParticles);
        }

        initParticles();
        animateParticles();

        window.addEventListener('resize', () => {
            canvas.width = window.innerWidth;
            canvas.height = canvas.parentElement.offsetHeight;
        });

        // Live Chat Widget
        const chatToggle = document.getElementById('chatToggle');
        const chatBox = document.getElementById('chatBox');
        const closeChat = document.getElementById('closeChat');
        const chatForm = document.getElementById('chatForm');
        const chatInput = document.getElementById('chatInput');
        const chatMessages = document.getElementById('chatMessages');

        chatToggle.addEventListener('click', () => {
            chatBox.classList.toggle('hidden');
        });

        closeChat.addEventListener('click', () => {
            chatBox.classList.add('hidden');
        });

        chatForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const message = chatInput.value.trim();
            if (message) {
                const userMessage = document.createElement('p');
                userMessage.classList.add('text-right', 'text-purple-700', 'dark:text-purple-400', 'mt-2');
                userMessage.textContent = message;
                chatMessages.appendChild(userMessage);
                chatInput.value = '';

                // Simulate bot response
                setTimeout(() => {
                    const botMessage = document.createElement('p');
                    botMessage.classList.add('text-gray-600', 'dark:text-gray-300', 'mt-2');
                    botMessage.textContent = "Thanks for your message! We're here to help. What else can we do for you?";
                    chatMessages.appendChild(botMessage);
                    chatMessages.scrollTop = chatMessages.scrollHeight;
                }, 1000);

                chatMessages.scrollTop = chatMessages.scrollHeight;
            }
        });

        // Update footer year
        document.getElementById('year').textContent = new Date().getFullYear();

        // Scroll animation
        window.addEventListener('scroll', () => {
            const elements = document.querySelectorAll('.animate-fade-in-up, .animate-fade-in-down');
            elements.forEach(el => {
                const rect = el.getBoundingClientRect();
                if (rect.top < window.innerHeight - 100) {
                    el.classList.add('opacity-100', 'translate-y-0');
                    el.classList.remove('opacity-0', 'translate-y-10');
                }
            });
        });
    </script>

    <!-- Custom CSS -->
    <style>
        .font-poppins {
            font-family: 'Poppins', sans-serif;
        }

        .animate-fade-in-down {
            animation: fadeInDown 1s ease-out;
            opacity: 0;
            transform: translateY(-20px);
        }
        
        .animate-fade-in-up {
            animation: fadeInUp 1s ease-out;
            opacity: 0;
            transform: translateY(20px);
        }

        @keyframes fadeInDown {
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes fadeInUp {
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</body>
</html>