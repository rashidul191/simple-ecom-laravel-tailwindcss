  <!-- Top Bar Section Start -->
  <header class="fixed top-0 left-0 w-full z-30 bg-white shadow flex items-center justify-between px-10 py-3">
      <div class="flex items-center gap-4">
          <button id="menuToggle" class="text-xl md:hidden">
              <i class="fas fa-bars"></i>
          </button>
          <h1 class="font-bold text-xl">Admin Panel</h1>
      </div>
      <div class="group flex items-center gap-4 relative">
             <div>{{ Auth::user()->name }}</div>
          <div class="relative ">            
              <img src="https://i.pravatar.cc/30" class="w-8 h-8 rounded-full cursor-pointer" alt="user">
              <div class="absolute right-[-5px] w-40 bg-white border rounded shadow-md hidden group-hover:block">
                  <a href="#" class="block px-4 py-2 hover:bg-gray-100 text-sm"><i class="fas fa-user-circle mr-2"></i>Profile</a>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-100 text-sm"><i class="fas fa-cog mr-2"></i>Settings</a>
                  <!-- <a href="#" class="block px-4 py-2 hover:bg-gray-100 text-sm text-red-600"><i class="fas fa-sign-out-alt mr-2"></i>Logout</a> -->
                  <form method="POST" action="{{ route('admin.logout') }}">
                      @csrf

                      <x-dropdown-link class="text-red-500" :href="route('admin.logout')"
                          onclick="event.preventDefault();
                                                this.closest('form').submit();">
                          <i class="fas fa-sign-out-alt mr-2"></i> {{ __('Log Out') }}
                      </x-dropdown-link>
                  </form>
              </div>
          </div>
      </div>
  </header>
  <!-- Top Bar Section End -->