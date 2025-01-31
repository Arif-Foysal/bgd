<!-- Language Bar -->
<div class="bg-white py-1">
    <div class="container mx-auto px-4">
        <div class="flex justify-end space-x-2">
            <a href="?lang=en" class="text-sm hover:text-red-600">ইংরেজি</a>
            <span class="text-gray-300">|</span>
            <a href="?lang=bn" class="text-sm hover:text-red-600">বাংলা</a>
        </div>
    </div>
</div>

<!-- Main Navigation -->
<nav class="bg-white shadow-md">
    <div class="container mx-auto px-4">
        <!-- Logo Section -->
        <div class="flex justify-center py-4">
            <a href="/" class="flex items-center space-x-2">
                <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-DT5aGKjGpGNYcSYRkRfcUaS0oHjA5t.png" alt="বাংলাদেশ আওয়ামী লীগ" class="h-16">
                <h1 class="text-2xl font-bold">বাংলাদেশ আওয়ামী লীগ</h1>
            </a>
        </div>

        <!-- Navigation Menu -->
        <div class="border-t border-gray-200">
            <div class="flex items-center justify-between py-2">
                <!-- Left Menu Items -->
                <div class="flex items-center space-x-6">
                    <a href="/" class="p-2 hover:text-red-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                    </a>
                    
                    <!-- Dropdown Menus -->
                    <div class="group relative">
                        <button class="p-2 hover:text-red-600 flex items-center">
                            নিউজ
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="absolute hidden group-hover:block w-48 bg-white shadow-lg py-2 z-50">
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100">সর্বশেষ নিউজ</a>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100">আর্কাইভ</a>
                        </div>
                    </div>

                    <div class="group relative">
                        <button class="p-2 hover:text-red-600 flex items-center">
                            আমাদের সম্পর্কে
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="absolute hidden group-hover:block w-48 bg-white shadow-lg py-2 z-50">
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100">ইতিহাস</a>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100">নেতৃবৃন্দ</a>
                        </div>
                    </div>

                    <div class="group relative">
                        <button class="p-2 hover:text-red-600 flex items-center">
                            সমৃদ্ধ ইউনিয়ন
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                    </div>

                    <div class="group relative">
                        <button class="p-2 hover:text-red-600 flex items-center">
                            উন্নয়নের বাংলাদেশ
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Right Menu Items -->
                <div class="flex items-center space-x-4">
                    <button class="p-2 hover:text-red-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </button>
                    <button class="p-2 hover:text-red-600 lg:hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</nav>

<!-- Mobile Menu (Hidden by default) -->
<div class="hidden lg:hidden">
    <div class="px-2 pt-2 pb-3 space-y-1">
        <a href="#" class="block px-3 py-2 rounded-md text-base font-medium hover:bg-gray-100">নিউজ</a>
        <a href="#" class="block px-3 py-2 rounded-md text-base font-medium hover:bg-gray-100">আমাদের সম্পর্কে</a>
        <a href="#" class="block px-3 py-2 rounded-md text-base font-medium hover:bg-gray-100">সমৃদ্ধ ইউনিয়ন</a>
        <a href="#" class="block px-3 py-2 rounded-md text-base font-medium hover:bg-gray-100">উন্নয়নের বাংলাদেশ</a>
    </div>
</div>