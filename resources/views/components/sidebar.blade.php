<aside class="w-64 bg-gradient-to-b from-slate-900 to-slate-800 text-white shadow-xl transition-all duration-300"
    :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full md:translate-x-0'"
    @click.away="sidebarOpen = false" x-show="sidebarOpen">
    <div class="p-6 border-b border-slate-700">
        <div class="flex items-center space-x-3">
            <div class="w-10 h-10 bg-gradient-to-br from-blue-400 to-blue-600 rounded-lg flex items-center justify-center">
                <i class="fas fa-shopping-cart text-white text-lg"></i>
            </div>
            <div>
                <h1 class="text-xl font-bold tracking-tight">POS System</h1>
                <p class="text-xs text-slate-400">v1.0.0</p>
            </div>
        </div>
    </div>

    <nav class="px-3 py-6 space-y-2">
        <!-- Dashboard -->
        <a href="{{ route('dashboard') }}"
            class="flex items-center space-x-3 px-4 py-3 rounded-lg transition-all duration-200 hover:bg-slate-700/50 {{ request()->routeIs('dashboard') ? 'bg-blue-600' : 'text-slate-300 hover:text-white' }}">
            <i class="fas fa-tachometer-alt w-5"></i>
            <span>ড্যাশবোর্ড</span>
        </a>

        <!-- Sales -->
        <a href="{{ route('sales.index') }}"
            class="flex items-center space-x-3 px-4 py-3 rounded-lg transition-all duration-200 hover:bg-slate-700/50 {{ request()->routeIs('sales.*') ? 'bg-blue-600' : 'text-slate-300 hover:text-white' }}">
            <i class="fas fa-cash-register w-5"></i>
            <span>বিক্রয় POS</span>
        </a>

        <!-- Sales History -->
        <a href="{{ route('sales.history') }}"
            class="flex items-center space-x-3 px-4 py-3 rounded-lg transition-all duration-200 hover:bg-slate-700/50 {{ request()->routeIs('sales.history') ? 'bg-blue-600' : 'text-slate-300 hover:text-white' }}">
            <i class="fas fa-history w-5"></i>
            <span>বিক্রয় ইতিহাস</span>
        </a>

        <!-- Divider -->
        <div class="border-t border-slate-700 my-4"></div>

        <!-- Products Section -->
        <div class="px-4 py-2 text-xs font-semibold text-slate-400 uppercase tracking-wider">পণ্য</div>

        <a href="{{ route('products.index') }}"
            class="flex items-center space-x-3 px-4 py-3 rounded-lg transition-all duration-200 hover:bg-slate-700/50 {{ request()->routeIs('products.*') ? 'bg-blue-600' : 'text-slate-300 hover:text-white' }}">
            <i class="fas fa-boxes w-5"></i>
            <span>পণ্য তালিকা</span>
        </a>

        <a href="{{ route('categories.index') }}"
            class="flex items-center space-x-3 px-4 py-3 rounded-lg transition-all duration-200 hover:bg-slate-700/50 {{ request()->routeIs('categories.*') ? 'bg-blue-600' : 'text-slate-300 hover:text-white' }}">
            <i class="fas fa-list w-5"></i>
            <span>ক্যাটাগরি</span>
        </a>

        <!-- Divider -->
        <div class="border-t border-slate-700 my-4"></div>

        <!-- Customers Section -->
        <div class="px-4 py-2 text-xs font-semibold text-slate-400 uppercase tracking-wider">গ্রাহক</div>

        <a href="{{ route('customers.index') }}"
            class="flex items-center space-x-3 px-4 py-3 rounded-lg transition-all duration-200 hover:bg-slate-700/50 {{ request()->routeIs('customers.*') ? 'bg-blue-600' : 'text-slate-300 hover:text-white' }}">
            <i class="fas fa-users w-5"></i>
            <span>গ্রাহক ব্যবস্থাপনা</span>
        </a>

        <!-- Divider -->
        <div class="border-t border-slate-700 my-4"></div>

        <!-- Reports Section -->
        <div class="px-4 py-2 text-xs font-semibold text-slate-400 uppercase tracking-wider">রিপোর্ট</div>

        <a href="{{ route('reports.dashboard') }}"
            class="flex items-center space-x-3 px-4 py-3 rounded-lg transition-all duration-200 hover:bg-slate-700/50 {{ request()->routeIs('reports.*') ? 'bg-blue-600' : 'text-slate-300 hover:text-white' }}">
            <i class="fas fa-chart-pie w-5"></i>
            <span>রিপোর্ট</span>
        </a>

        <a href="{{ route('reports.daily') }}"
            class="flex items-center space-x-3 px-4 py-3 rounded-lg transition-all duration-200 hover:bg-slate-700/50 {{ request()->routeIs('reports.daily') ? 'bg-blue-600' : 'text-slate-300 hover:text-white' }}">
            <i class="fas fa-calendar-day w-5"></i>
            <span>দৈনিক রিপোর্ট</span>
        </a>

        <a href="{{ route('reports.monthly') }}"
            class="flex items-center space-x-3 px-4 py-3 rounded-lg transition-all duration-200 hover:bg-slate-700/50 {{ request()->routeIs('reports.monthly') ? 'bg-blue-600' : 'text-slate-300 hover:text-white' }}">
            <i class="fas fa-calendar-alt w-5"></i>
            <span>মাসিক রিপোর্ট</span>
        </a>

        <!-- Divider -->
        <div class="border-t border-slate-700 my-4"></div>

        <!-- Management Section -->
        <div class="px-4 py-2 text-xs font-semibold text-slate-400 uppercase tracking-wider">ব্যবস্থাপনা</div>

        <a href="{{ route('users.index') }}"
            class="flex items-center space-x-3 px-4 py-3 rounded-lg transition-all duration-200 hover:bg-slate-700/50 {{ request()->routeIs('users.*') ? 'bg-blue-600' : 'text-slate-300 hover:text-white' }}">
            <i class="fas fa-user-tie w-5"></i>
            <span>ব্যবহারকারী</span>
        </a>

        <a href="{{ route('settings.index') }}"
            class="flex items-center space-x-3 px-4 py-3 rounded-lg transition-all duration-200 hover:bg-slate-700/50 {{ request()->routeIs('settings.*') ? 'bg-blue-600' : 'text-slate-300 hover:text-white' }}">
            <i class="fas fa-cog w-5"></i>
            <span>সেটিংস</span>
        </a>
    </nav>
</aside>
