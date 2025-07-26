<aside id="sidebar"
  class="w-64 md:translate-x-0 -translate-x-full md:block bg-white dark:bg-gray-800 fixed top-0 left-0 h-full z-40 shadow-md transition-all duration-300">
  <div class="p-6">
    <div class="flex justify-between items-center mb-2">
      <div></div>
      <div>
        <button class="md:hidden text-xl text-red-500" id="closeSidebarBtn"><i class="fas fa-times"></i></button>
      </div>
    </div>
    <div class="text-center">
      <img src="" alt="logo">
    </div>
    <ul class="space-y-3">
      <li>
        <a href="{{ route('admin.dashboard.index') }}"
          class="nav-link flex items-center gap-2 px-3 py-2 font-medium text-gray-700 dark:text-white"
          data-tippy-content="Dashboard">
          <i class="fas fa-chart-line"></i><span>Dashboard</span>
        </a>
      </li>
      <li class="dropdown">
        <a href="javascript:void(0)"
          class="dropdown-toggle nav-link flex items-center  gap-2 px-3 py-2 font-medium text-gray-700 dark:text-white">
          <i class="fas fa-layer-group"></i>
          <span>Menu</span>
        </a>
        <ul class="ml-6 mt-2 space-y-1 hidden">
          <li><a href="#"
              class="block px-3 py-1 text-sm hover:bg-gray-100 dark:hover:bg-gray-700">Submenu 1</a></li>
          <li><a href="#"
              class="block px-3 py-1 text-sm hover:bg-gray-100 dark:hover:bg-gray-700">Submenu 2</a></li>
        </ul>
      </li>
      <li>
        <a href="#"
          class="nav-link flex items-center gap-2 px-3 py-2 font-medium text-gray-700 dark:text-white"
          data-tippy-content="Users">
          <i class="fas fa-users"></i><span>Users List</span>
        </a>
      </li>

      <li class="dropdown">
        <a href="javascript:void(0)"
          class="dropdown-toggle nav-link flex items-center  gap-2 px-3 py-2 font-medium text-gray-700 dark:text-white">
          <i class="fa-solid fa-gear"></i>
          <span>Setting</span>
        </a>
        <ul class="ml-6 mt-2 space-y-1 hidden">

          <li><a href="{{ route('admin.general-setting.index') }}"
              class="block px-3 py-1 text-sm hover:bg-gray-100 dark:hover:bg-gray-700">General Setting</a></li>

        </ul>
      </li>
    </ul>
  </div>
</aside>