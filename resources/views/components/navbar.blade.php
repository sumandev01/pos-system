<header class="bg-white shadow-sm border-b border-gray-200 sticky top-0 z-40">
    <div class="flex items-center justify-between px-6 py-4">
        <!-- Mobile Menu Button -->
        <button @click="sidebarOpen = !sidebarOpen" class="md:hidden p-2 hover:bg-gray-100 rounded-lg transition">
            <i class="fas fa-bars text-gray-600 text-xl"></i>
        </button>

        <!-- Search Bar -->
        <div class="hidden md:flex flex-1 mx-8">
            <div class="relative w-full max-w-md">
                <input type="text" placeholder="সার্চ করুন..." 
                    class="w-full px-4 py-2 pl-10 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition">
                <i class="fas fa-search absolute left-3 top-2.5 text-gray-400"></i>
            </div>
        </div>

        <!-- Right Side -->
        <div class="flex items-center space-x-6">
            <!-- Notifications -->
            <div class="relative" x-data="{ notificationsOpen: false }">
                <button @click="notificationsOpen = !notificationsOpen" class="relative p-2 hover:bg-gray-100 rounded-lg transition">
                    <i class="fas fa-bell text-gray-600 text-lg"></i>
                    <span class="absolute top-1 right-1 w-2 h-2 bg-red-500 rounded-full"></span>
                </button>
                <!-- Notification Dropdown -->
                <div x-show="notificationsOpen" @click.away="notificationsOpen = false"
                    class="absolute right-0 mt-2 w-72 bg-white rounded-lg shadow-xl p-4 space-y-3 z-50">
                    <div class="text-sm font-semibold text-gray-900 mb-4">সর্বশেষ বিজ্ঞপ্তি</div>
                    <div class="space-y-3 max-h-96 overflow-y-auto">
                        <div class="p-3 bg-blue-50 rounded-lg border border-blue-200">
                            <p class="text-sm font-medium text-gray-900">নতুন পণ্য যোগ হয়েছে</p>
                            <p class="text-xs text-gray-500 mt-1">২ মিনিট আগে</p>
                        </div>
                        <div class="p-3 bg-green-50 rounded-lg border border-green-200">
                            <p class="text-sm font-medium text-gray-900">বিক্রয় সম্পন্ন হয়েছে</p>
                            <p class="text-xs text-gray-500 mt-1">৫ মিনিট আগে</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- User Menu -->
            <div class="relative" x-data="{ userMenuOpen: false }">
                <button @click="userMenuOpen = !userMenuOpen" class="flex items-center space-x-3 p-2 hover:bg-gray-100 rounded-lg transition">
                    <div class="w-9 h-9 bg-gradient-to-br from-blue-400 to-blue-600 rounded-full flex items-center justify-center text-white font-semibold">
                        A
                    </div>
                    <span class="text-sm font-medium text-gray-900 hidden sm:block">Admin</span>
                    <i class="fas fa-chevron-down text-gray-400 text-xs"></i>
                </button>
                <!-- User Dropdown -->
                <div x-show="userMenuOpen" @click.away="userMenuOpen = false"
                    class="absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-xl overflow-hidden z-50">
                    <div class="px-4 py-3 bg-gray-50 border-b border-gray-200">
                        <p class="text-sm font-semibold text-gray-900">Admin User</p>
                        <p class="text-xs text-gray-500">admin@pos.com</p>
                    </div>
                    <div class="py-2">
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 transition">
                            <i class="fas fa-user-circle mr-2"></i> প্রোফাইল
                        </a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 transition">
                            <i class="fas fa-cog mr-2"></i> সেটিংস
                        </a>
                        <hr class="my-2">
                        <a href="{{ route('logout') }}" class="block px-4 py-2 text-sm text-red-600 hover:bg-red-50 transition">
                            <i class="fas fa-sign-out-alt mr-2"></i> লগআউট
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
