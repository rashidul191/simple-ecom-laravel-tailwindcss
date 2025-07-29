<x-admin-app-layout title="Social Link">
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Social Link') }}
    </h2>
  </x-slot>

  <!-- Start Page-content -->
  <div class="bg-white p-5 w-full md:w-1/2">
    <form action="{{ route('admin.social-link.store') }}" method="post" enctype="multipart/form-data">
      @csrf

      <div class="grid grid-cols-1 gap-4 w-full">
        <div>
          <!-- Selected Input -->
          <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-1">Selected Icon *</label>
            <input
              type="text"
              name="icon"
              id="selectedIcon"
              class="w-full px-4 py-2 border rounded bg-gray-100 cursor-pointer"
              placeholder="Click to pick an icon"
              required
              readonly />
          </div>
          <!-- Preview Box -->
          <div id="preview" class="text-3xl mb-4 text-blue-600"></div>
          <!-- Icon Picker -->
          <div
            id="iconPicker"
            class="hidden grid grid-cols-6 gap-4 max-h-64 overflow-y-auto border rounded p-4 bg-gray-50">
            <!-- Icons will be loaded here -->
          </div>
        </div>

        <div class="flex w-full p-1">
          <div class="w-full">
            <label for="color">Color *</label>
            <input type="color" name="color" id="color" class="block mt-1 w-full" />
          </div>
        </div>
        <div class="flex w-full p-1">
          <div class="w-full">
            <x-input-label class="!text-md" for="link" :value="__('Link *')" />
            <x-text-input id="link" class="block mt-1 w-full" type="link" name="link" :value="old('link')" required="true" />
            <x-input-error :messages="$errors->get('link')" class="mt-2" />
          </div>
        </div>
      </div>

      <div class="w-full mt-3 text-right">
        <x-primary-button>
          <i class="fas fa-save mr-2"></i> {{ __('Save') }}
        </x-primary-button>
      </div>
    </form>
  </div>
  <!-- End Page-content -->


  <x-slot name="script">
    <script>
      const socialIcons = [
        "fa-brands fa-facebook",
        "fa-brands fa-facebook-f",
        "fa-brands fa-twitter",
        "fa-brands fa-x-twitter",
        "fa-brands fa-instagram",
        "fa-brands fa-linkedin",
        "fa-brands fa-linkedin-in",
        "fa-brands fa-youtube",
        "fa-brands fa-github",
        "fa-brands fa-tiktok",
        "fa-brands fa-pinterest",
        "fa-brands fa-reddit",
        "fa-brands fa-discord",
        "fa-brands fa-snapchat",
        "fa-brands fa-whatsapp",
        "fa-brands fa-telegram",
        "fa-brands fa-skype",
        "fa-brands fa-behance",
        "fa-brands fa-dribbble",
        "fa-brands fa-medium",
        "fa-brands fa-vimeo",
        "fa-brands fa-slack",
        "fa-brands fa-stack-overflow"
      ];

      const picker = document.getElementById("iconPicker");
      const selectedIcon = document.getElementById("selectedIcon");
      const preview = document.getElementById("preview");

      // Show/hide picker on input click
      selectedIcon.addEventListener("click", () => {
        picker.classList.toggle("hidden");
      });

      // Load icons
      socialIcons.forEach(iconClass => {
        const icon = document.createElement("i");
        icon.className = `${iconClass} text-xl text-gray-700 hover:text-blue-600 cursor-pointer transition`;
        icon.title = iconClass;

        icon.addEventListener("click", () => {
          selectedIcon.value = iconClass;
          preview.innerHTML = `<i class="${iconClass}"></i>`;
          picker.classList.add("hidden");
        });

        picker.appendChild(icon);
      });

      // Optional: Hide picker if clicked outside
      document.addEventListener("click", (e) => {
        if (!picker.contains(e.target) && e.target !== selectedIcon) {
          picker.classList.add("hidden");
        }
      });
    </script>
  </x-slot>

</x-admin-app-layout>