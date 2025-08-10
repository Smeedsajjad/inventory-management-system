{{-- resources/views/dashboard.blade.php --}}
<x-app-layout>
    <x-slot name="title">Dashboard - Inventory Management</x-slot>
    <x-slot name="pageTitle">Dashboard</x-slot>

    <!-- Welcome Section -->
    <div class="hero bg-base-200 rounded-lg mb-8">
        <div class="hero-content text-center">
            <div class="max-w-md">
                <h1 class="text-3xl font-bold">Welcome back, {{ Auth::user()->name ?? 'Admin' }}!</h1>
                <p class="py-4">Here's what's happening with your inventory today.</p>
            </div>
        </div>
    </div>

    <!-- Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-8">
        <!-- Total Products -->
        <div class="stats shadow">
            <div class="stat">
                <div class="stat-figure text-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 7.5l-.625 10.632a2.25 2.25 0 01-2.247 2.118H6.622a2.25 2.25 0 01-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
                    </svg>
                </div>
                <div class="stat-title">Total Products</div>
                <div class="stat-value text-primary">1,247</div>
                <div class="stat-desc">+12% from last month</div>
            </div>
        </div>

        <!-- Low Stock -->
        <div class="stats shadow">
            <div class="stat">
                <div class="stat-figure text-error">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
                    </svg>
                </div>
                <div class="stat-title">Low Stock Items</div>
                <div class="stat-value text-error">23</div>
                <div class="stat-desc text-error">Requires attention</div>
            </div>
        </div>

        <!-- Total Value -->
        <div class="stats shadow">
            <div class="stat">
                <div class="stat-figure text-success">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                </div>
                <div class="stat-title">Total Value</div>
                <div class="stat-value text-success">$284,590</div>
                <div class="stat-desc text-success">+8.5% from last month</div>
            </div>
        </div>

        <!-- Pending Orders -->
        <div class="stats shadow">
            <div class="stat">
                <div class="stat-figure text-warning">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                </div>
                <div class="stat-title">Pending Orders</div>
                <div class="stat-value text-warning">15</div>
                <div class="stat-desc text-warning">Awaiting processing</div>
            </div>
        </div>
    </div>

    <!-- Quick Actions & Recent Activity -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">
        <!-- Quick Actions -->
        <div class="card bg-base-100 shadow-xl">
            <div class="card-body">
                <h2 class="card-title">Quick Actions</h2>
                <div class="space-y-2">
                    <button class="btn btn-primary btn-sm w-full justify-start">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        Add New Product
                    </button>

                    <button class="btn btn-success btn-sm w-full justify-start">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        Stock In
                    </button>

                    <button class="btn btn-error btn-sm w-full justify-start">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        Stock Out
                    </button>

                    <button class="btn btn-secondary btn-sm w-full justify-start">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z" />
                        </svg>
                        Generate Report
                    </button>
                </div>
            </div>
        </div>

        <!-- Recent Activity -->
        <div class="card bg-base-100 shadow-xl lg:col-span-2">
            <div class="card-body">
                <h2 class="card-title">Recent Activity</h2>
                <div class="space-y-4">
                    <div class="alert alert-success">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        <div>
                            <div class="font-bold">Stock added: iPhone 15 Pro</div>
                            <div class="text-xs">50 units added • 2 hours ago</div>
                        </div>
                    </div>

                    <div class="alert alert-info">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        <div>
                            <div class="font-bold">New product: Samsung Galaxy S24</div>
                            <div class="text-xs">Added to Electronics category • 4 hours ago</div>
                        </div>
                    </div>

                    <div class="alert alert-error">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
                        </svg>
                        <div>
                            <div class="font-bold">Low stock alert: MacBook Air</div>
                            <div class="text-xs">Only 3 units remaining • 6 hours ago</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Low Stock Alert & Top Products -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <!-- Low Stock Alert -->
        <div class="card bg-base-100 shadow-xl">
            <div class="card-body">
                <div class="flex items-center justify-between">
                    <h2 class="card-title">Low Stock Alert</h2>
                    <div class="badge badge-error">23 Items</div>
                </div>

                <div class="space-y-3">
                    <div class="alert alert-error">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 0 0 6 3.75v16.5a2.25 2.25 0 0 0 2.25 2.25h7.5A2.25 2.25 0 0 0 18 20.25V3.75a2.25 2.25 0 0 0-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
                        </svg>
                        <div class="flex-1">
                            <div class="font-bold">iPhone 14 Pro</div>
                            <div class="text-xs">Electronics</div>
                        </div>
                        <div class="text-right">
                            <div class="font-bold">2 units</div>
                            <div class="text-xs">Min: 10</div>
                        </div>
                    </div>

                    <div class="alert alert-error">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 0 1-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0 1 15 18.257V17.25m6-12V15a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 15V5.25m18 0A2.25 2.25 0 0 0 18.75 3H5.25A2.25 2.25 0 0 0 3 5.25m18 0V12a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 12V5.25" />
                        </svg>
                        <div class="flex-1">
                            <div class="font-bold">MacBook Air M2</div>
                            <div class="text-xs">Computers</div>
                        </div>
                        <div class="text-right">
                            <div class="font-bold">3 units</div>
                            <div class="text-xs">Min: 5</div>
                        </div>
                    </div>

                    <div class="alert alert-error">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.114 5.636a9 9 0 0 1 0 12.728M16.463 8.288a5.25 5.25 0 0 1 0 7.424M6.75 8.25l4.72-4.72a.75.75 0 0 1 1.28.53v15.88a.75.75 0 0 1-1.28.53l-4.72-4.72H4.51c-.88 0-1.704-.507-1.938-1.354A9.009 9.009 0 0 1 2.25 12c0-.83.112-1.633.322-2.396C2.806 8.756 3.63 8.25 4.51 8.25H6.75Z" />
                        </svg>
                        <div class="flex-1">
                            <div class="font-bold">AirPods Pro</div>
                            <div class="text-xs">Accessories</div>
                        </div>
                        <div class="text-right">
                            <div class="font-bold">4 units</div>
                            <div class="text-xs">Min: 15</div>
                        </div>
                    </div>
                </div>

                <div class="card-actions justify-end">
                    <button class="btn btn-sm">View All Low Stock Items</button>
                </div>
            </div>
        </div>

        <!-- Top Products -->
        <div class="card bg-base-100 shadow-xl">
            <div class="card-body">
                <div class="flex items-center justify-between">
                    <h2 class="card-title">Top Products</h2>
                    <div class="badge badge-success">This Month</div>
                </div>

                <div class="space-y-3">
                    <div class="flex items-center justify-between p-3 bg-base-200 rounded-lg">
                        <div class="flex items-center space-x-3">
                            <div class="badge badge-success badge-lg">1</div>
                            <div>
                                <div class="font-bold">Samsung Galaxy S24</div>
                                <div class="text-xs">142 sold this month</div>
                            </div>
                        </div>
                        <div class="text-right">
                            <div class="font-bold text-success">$85,200</div>
                        </div>
                    </div>

                    <div class="flex items-center justify-between p-3 bg-base-200 rounded-lg">
                        <div class="flex items-center space-x-3">
                            <div class="badge badge-neutral badge-lg">2</div>
                            <div>
                                <div class="font-bold">iPhone 15</div>
                                <div class="text-xs">128 sold this month</div>
                            </div>
                        </div>
                        <div class="text-right">
                            <div class="font-bold">$102,400</div>
                        </div>
                    </div>

                    <div class="flex items-center justify-between p-3 bg-base-200 rounded-lg">
                        <div class="flex items-center space-x-3">
                            <div class="badge badge-neutral badge-lg">3</div>
                            <div>
                                <div class="font-bold">MacBook Pro M3</div>
                                <div class="text-xs">89 sold this month</div>
                            </div>
                        </div>
                        <div class="text-right">
                            <div class="font-bold">$178,000</div>
                        </div>
                    </div>
                </div>

                <div class="card-actions justify-end">
                    <button class="btn btn-sm">View Detailed Analytics</button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
