    <header class="bg-white dark:bg-gray-800 px-6 py-4 shadow flex items-center justify-between sticky top-0 z-20">
        <div class="flex items-center gap-4">
            <button class="md:hidden text-2xl" id="openSidebarBtn"><i
                    class="fas fa-bars text-gray-700 dark:text-white"></i></button>
            <span class="text-xl font-bold text-gray-800 dark:text-white">Admin Dashboard</span>
        </div>
        <div class="flex items-center gap-4">
            <!-- Dark mode toggle -->
            <button onclick="document.documentElement.classList.toggle('dark')" title="Toggle Dark Mode"
                class="text-xl text-gray-700 dark:text-white hover:text-primary transition">
                <i class="fas fa-moon"></i>
            </button>

            <!-- Profile dropdown -->
            <div class="relative">
                <button id="profileToggle"
                    class="flex items-center gap-2 text-gray-700 dark:text-white font-medium hover:text-primary transition">
                    <span>Admin</span>
                    <i class="fas fa-user-circle text-2xl"></i>
                    <i class="fas fa-chevron-down text-sm"></i>
                </button>

                <!-- Dropdown menu -->
                <div id="profileMenu"
                    class="hidden absolute right-0 mt-2 w-48 bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-md shadow-lg z-50 py-1">
                    <!-- Profile Link -->
                    <a href="{{ route('admin.password.confirm') }}"
                        class="flex items-center px-4 py-2 text-sm text-gray-700 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 transition">
                        <i class="fas fa-user mr-2"></i> Profile
                    </a>

                    <!-- Logout Form -->
                    <form method="POST" action="{{ route('admin.logout') }}">
                        @csrf
                        <button type="submit"
                            class="w-full text-left flex items-center px-4 py-2 text-sm text-red-600 dark:text-red-400 hover:bg-gray-100 dark:hover:bg-gray-700 transition">
                            <i class="fa-solid fa-right-from-bracket mr-2"></i> {{ __('Log Out') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>

    </header>