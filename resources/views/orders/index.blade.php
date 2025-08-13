{{-- resources/views/orders/index.blade.php --}}
<x-app-layout>
    <x-page-header title="All Orders" :links="[
        ['route' => 'dashboard', 'icon' => 'heroicon-s-home', 'label' => 'Home'],
        ['route' => 'orders.index', 'icon' => 'heroicon-s-clipboard-document-list', 'label' => 'Orders'],
    ]" />

    <div class="p-6">
        <!-- Toolbar -->
        <div class="flex items-center justify-between mb-4">
            <h2 class="text-2xl font-bold">Orders</h2>
            <div class="flex items-center gap-6">
   <div class="flex my-8">
        <label class="input">
            <svg class="h-[1em] opacity-50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <g stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" fill="none" stroke="currentColor">
                    <circle cx="11" cy="11" r="8"></circle>
                    <path d="m21 21-4.3-4.3"></path>
                </g>
            </svg>
            <input type="search" class="grow" placeholder="Search" />
        </label>
    </div>
                <a href="{{ route('orders.create') }}" class="btn btn-primary btn-sm">
                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                </svg>
                New Order
            </a>
        </div>
        </div>

        <!-- Table -->
        <div class="overflow-x-auto border rounded-box border-base-content/5 bg-base-100">
            <table class="table">
                <!-- head -->
                <thead>
                    <tr>
                        <th>Order&nbsp;ID</th>
                        <th>Shop&nbsp;Name</th>
                        <th>Priority</th>
                        <th>Quantity</th>
                        <th>Order&nbsp;Total</th>
                        <th>Payment&nbsp;Status</th>
                        <th>Order&nbsp;Status</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>
                    <!-- row 1 -->
                    <tr>
                        <th class="font-mono text-sm">ORD-001</th>
                        <td>City Mart</td>
                        <td>
                            <span class="badge badge-sm badge-success">Low</span>
                        </td>
                        <td class="font-mono">24</td>
                        <td class="font-mono">$57.60</td>
                        <td>
                            <span class="badge badge-sm badge-warning">Unpaid</span>
                        </td>
                        <td>
                            <span class="badge badge-sm badge-info">Pending</span>
                        </td>
                        <td class="text-xs">2024-08-10</td>
                        <td class="space-x-2">
                        <button class="btn btn-xs btn-info">Edit</button>
                        <button class="btn btn-xs btn-error">Delete</button>
                    </td>
                    </tr>

                    <!-- row 2 -->
                    <tr>
                        <th class="font-mono text-sm">ORD-002</th>
                        <td>Green Grocer</td>
                        <td>
                            <span class="badge badge-sm badge-warning">Medium</span>
                        </td>
                        <td class="font-mono">12</td>
                        <td class="font-mono">$36.00</td>
                        <td>
                            <span class="badge badge-sm badge-success">Paid</span>
                        </td>
                        <td>
                            <span class="badge badge-sm badge-secondary">Shipped</span>
                        </td>
                        <td class="text-xs">2024-08-11</td>
                        <td class="space-x-2">
                        <button class="btn btn-xs btn-info">Edit</button>
                        <button class="btn btn-xs btn-error">Delete</button>
                    </td>
                    </tr>

                    <!-- row 3 -->
                    <tr>
                        <th class="font-mono text-sm">ORD-003</th>
                        <td>Super Store</td>
                        <td>
                            <span class="badge badge-sm badge-error">High</span>
                        </td>
                        <td class="font-mono">36</td>
                        <td class="font-mono">$86.40</td>
                        <td>
                            <span class="badge badge-sm badge-success">Paid</span>
                        </td>
                        <td>
                            <span class="badge badge-sm badge-success">Delivered</span>
                        </td>
                        <td class="text-xs">2024-08-12</td>
                        <td class="space-x-2">
                        <button class="btn btn-xs btn-info">Edit</button>
                        <button class="btn btn-xs btn-error">Delete</button>
                    </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- Empty state (optional) -->
        <div class="hidden py-10 text-center">
            <p class="text-gray-500">No orders yet.</p>
            <a href="{{ route('orders.create') }}" class="mt-4 btn btn-primary">Create first order</a>
        </div>
    </div>
</x-app-layout>
