 <!-- Left Sidebar Start -->
 <aside id="sidebar" class="fixed md:static top-16 left-0 h-[calc(100vh-64px)] w-64 bg-white shadow-md overflow-y-auto scrollbar-hide z-20 transform -translate-x-full md:translate-x-0 transition-transform">
      <nav class="p-4 space-y-2">
        <div>
          <button class="w-full flex items-center justify-between gap-3 p-3 rounded hover:bg-gray-100" onclick="toggleDropdown('dashboardMenu')">
            <span class="flex items-center gap-3"><i class="fas fa-tachometer-alt"></i> Dashboard</span>
            <i class="fas fa-chevron-down"></i>
          </button>
          <div id="dashboardMenu" class="pl-6 hidden">
            <a href="#" class="flex items-center gap-2 py-2 text-sm hover:text-blue-500"><i class="fas fa-chart-line"></i> Overview</a>
            <a href="#" class="flex items-center gap-2 py-2 text-sm hover:text-blue-500"><i class="fas fa-chart-pie"></i> Stats</a>
          </div>
        </div>

        <div>
          <button class="w-full flex items-center justify-between gap-3 p-3 rounded hover:bg-gray-100" onclick="toggleDropdown('userMenu')">
            <span class="flex items-center gap-3"><i class="fas fa-users"></i> Users</span>
            <i class="fas fa-chevron-down"></i>
          </button>
          <div id="userMenu" class="pl-6 hidden">
            <a href="#" class="flex items-center gap-2 py-2 text-sm hover:text-blue-500"><i class="fas fa-user-friends"></i> All Users</a>
            <a href="#" class="flex items-center gap-2 py-2 text-sm hover:text-blue-500"><i class="fas fa-user-plus"></i> Add User</a>
          </div>
        </div>

        <div>
          <button class="w-full flex items-center justify-between gap-3 p-3 rounded hover:bg-gray-100" onclick="toggleDropdown('productMenu')">
            <span class="flex items-center gap-3"><i class="fas fa-box"></i> Products</span>
            <i class="fas fa-chevron-down"></i>
          </button>
          <div id="productMenu" class="pl-6 hidden">
            <a href="#" class="flex items-center gap-2 py-2 text-sm hover:text-blue-500"><i class="fas fa-box-open"></i> All Products</a>
            <a href="#" class="flex items-center gap-2 py-2 text-sm hover:text-blue-500"><i class="fas fa-plus-square"></i> Add Product</a>
          </div>
        </div>

        <a href="#" class="flex items-center gap-3 p-3 rounded hover:bg-gray-100">
          <i class="fas fa-shopping-cart"></i> Orders
        </a>

        <a href="#" class="flex items-center gap-3 p-3 rounded hover:bg-gray-100">
          <i class="fas fa-cogs"></i> Settings
        </a>

        <a href="#" class="flex items-center gap-3 p-3 rounded hover:bg-gray-100 text-red-600">
          <i class="fas fa-sign-out-alt"></i> Logout
        </a>
      </nav>
    </aside>
 <!-- Left Sidebar End -->