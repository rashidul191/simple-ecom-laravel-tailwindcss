<x-admin-app-layout title="Dashboard">
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Admin Dashboard') }}
    </h2>
  </x-slot>


  <!-- Dashboard Cards -->
  <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

    @foreach ($cards as $index => $item )
    <div class="bg-white dark:bg-gray-800 p-6 rounded shadow">
      <h3 class="text-2xl font-semibold mb-3">{{ $item->title }}</h3>
      <div class="flex items-center justify-between">
        <i class="fas fa-users text-3xl text-primary"></i>
        <p class="text-2xl font-bold">{{ $item->value }}</p>
      </div>
    </div>
    @endforeach


  </section>

  <!-- DataTable -->
  <section>
    <div class="bg-white dark:bg-gray-800 p-4 rounded shadow overflow-x-auto">
      <h2 class="text-lg font-semibold mb-4">User Table</h2>
      <table id="userTable" class="display w-full">
        <thead>
          <tr>
            <th>User</th>
            <th>Email</th>
            <th>Role</th>
            <th>Joined</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="flex items-center space-x-3">
              <img src="https://i.pravatar.cc/40?img=1" alt="Rashidul Islam"
                class="rounded-full w-10 h-10 object-cover" />
              <span>Rashidul Islam</span>
            </td>
            <td>rashidul@example.com</td>
            <td>Admin</td>
            <td>2025-01-15</td>
            <td class="space-x-2">
              <button title="View" class="text-blue-500 hover:text-blue-700"><i class="fas fa-eye"></i></button>
              <button title="Edit" class="text-green-500 hover:text-green-700"><i
                  class="fas fa-edit"></i></button>
              <button title="Delete" class="text-red-500 hover:text-red-700"><i
                  class="fas fa-trash-alt"></i></button>
            </td>
          </tr>
          <tr>
            <td class="flex items-center space-x-3">
              <img src="https://i.pravatar.cc/40?img=2" alt="Samrat"
                class="rounded-full w-10 h-10 object-cover" />
              <span>Samrat</span>
            </td>
            <td>samrat@example.com</td>
            <td>Editor</td>
            <td>2025-03-10</td>
            <td class="space-x-2">
              <button title="View" class="text-blue-500 hover:text-blue-700"><i class="fas fa-eye"></i></button>
              <button title="Edit" class="text-green-500 hover:text-green-700"><i
                  class="fas fa-edit"></i></button>
              <button title="Delete" class="text-red-500 hover:text-red-700"><i
                  class="fas fa-trash-alt"></i></button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>

</x-admin-app-layout>