 <!-- Left Sidebar Start -->
 <aside id="sidebar" class="fixed md:static top-16 left-0 h-[calc(100vh)] w-64 bg-white shadow-md overflow-y-auto scrollbar-hide z-20 transform -translate-x-full md:translate-x-0 transition-transform">
   <nav class="p-4 space-y-2">

     <x-nav-link
       href="{{ route('admin.dashboard') }}"
       class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }} w-full flex items-center text-2xl gap-3 p-3 rounded hover:bg-gray-100">
       <i class="fas fa-tachometer-alt"></i> {{ __('Dashboard') }}
     </x-nav-link>

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

     <!-- Dropdown Component -->

     <!-- Dropdown Component -->
     <div x-data="{ open: false }">
       <!-- Trigger Button -->
       <button @click="open = !open" class="flex items-center gap-2 p-3 rounded hover:bg-gray-100 w-full">
         <i class="fas fa-cogs"></i> {{ __('Settings') }}
         <i class="fas fa-chevron-down ml-auto text-sm"></i>
       </button>
       <!-- Dropdown Items -->
       <div x-show="open" @click.away="open = false" class="ml-3 w-56 bg-white border-l-4 rounded z-50">
         <a href="{{ route('admin.general-setting.index') }}"
           class=" {{ request()->routeIs('admin.dashboard') ? 'active' : '' }} flex items-center gap-3 px-4 py-2 hover:bg-gray-100">
           <i class="fa-solid fa-arrow-right"></i> {{ __('General Setting') }}
         </a>


       </div>
     </div>



     <a href="#" class="flex items-center gap-3 p-3 rounded hover:bg-gray-100 text-red-600">
       <i class="fas fa-sign-out-alt"></i> Logout
     </a>
   </nav>
 </aside>
 <!-- Left Sidebar End -->