<x-admin-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <!-- Start Page-content -->
  <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
        <div class="bg-white shadow rounded-lg p-4">
          <div class="flex justify-between items-center">
            <div>
              <h3 class="text-sm text-gray-500">Total Users</h3>
              <p class="text-xl font-bold">1,234</p>
            </div>
            <i class="fas fa-users fa-2x text-blue-500"></i>
          </div>
        </div>
        <div class="bg-white shadow rounded-lg p-4">
          <div class="flex justify-between items-center">
            <div>
              <h3 class="text-sm text-gray-500">Revenue</h3>
              <p class="text-xl font-bold">$45,670</p>
            </div>
            <i class="fas fa-dollar-sign fa-2x text-green-500"></i>
          </div>
        </div>
        <div class="bg-white shadow rounded-lg p-4">
          <div class="flex justify-between items-center">
            <div>
              <h3 class="text-sm text-gray-500">Products</h3>
              <p class="text-xl font-bold">320</p>
            </div>
            <i class="fas fa-box fa-2x text-purple-500"></i>
          </div>
        </div>
        <div class="bg-white shadow rounded-lg p-4">
          <div class="flex justify-between items-center">
            <div>
              <h3 class="text-sm text-gray-500">Orders</h3>
              <p class="text-xl font-bold">76</p>
            </div>
            <i class="fas fa-shopping-cart fa-2x text-yellow-500"></i>
          </div>
        </div>
      </section>

      <section class="bg-white p-6 rounded shadow mb-6">
        <h2 class="text-lg font-semibold mb-4">Recent Orders</h2>
        <div class="overflow-x-auto">
          <table class="w-full text-left text-sm">
            <thead>
              <tr class="bg-gray-100 text-gray-600">
                <th class="p-2">Order ID</th>
                <th class="p-2">Customer</th>
                <th class="p-2">Status</th>
                <th class="p-2">Total</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="p-2">#1001</td>
                <td class="p-2">Rashidul</td>
                <td class="p-2 text-green-600">Completed</td>
                <td class="p-2">$123.00</td>
              </tr>
              <tr>
                <td class="p-2">#1002</td>
                <td class="p-2">John Doe</td>
                <td class="p-2 text-yellow-600">Pending</td>
                <td class="p-2">$89.00</td>
              </tr>
              <tr>
                <td class="p-2">#1003</td>
                <td class="p-2">Amina</td>
                <td class="p-2 text-red-600">Canceled</td>
                <td class="p-2">$45.00</td>
              </tr>
            </tbody>
          </table>
        </div>
      </section>
    <!-- End Page-content -->
</x-admin-app-layout>