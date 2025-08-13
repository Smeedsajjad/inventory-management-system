<div class="drawer-side">
    <label for="my-drawer-2" aria-label="close sidebar" class="drawer-overlay"></label>
    <ul class="min-h-full p-4 menu bg-base-200 text-base-content w-80">
        <div class="p-4 pl-0 mb-4 border-b border-gray-300">
            <div class="flex items-center px-2 space-x-3">
                <x-heroicon-o-cube class="w-8 h-8" />
                <span class="text-xl font-bold">Bilal Teraders</span>
            </div>
        </div>
        <li
            class="p-1 rounded-md mb-4 hover:bg-base-300 hover:text-primary
               {{ request()->routeIs('dashboard') ? 'menu-active bg-primary text-white' : '' }} ">
            <a class="flex items-center gap-2 hover:bg-base-300" href="{{ route('dashboard') }}">
                <x-heroicon-s-home class="w-5 h-5" />
                Dashboard
            </a>
        </li>

        <li class="my-2">
            <details {{ request()->routeIs('products.*') ? 'open' : '' }}>
                <summary
                    class="p-[13px] flex items-center gap-2 rounded-md cursor-pointer hover:bg-base-300 hover:text-primary
            {{ request()->routeIs('products.*') ? 'bg-primary text-white' : '' }} ">
                    <x-heroicon-s-shopping-bag class="w-5 h-5" />
                    <span>Products</span>
                </summary>

                <ul class="ml-4">
                    {{-- All Products Link --}}
                    <li
                        class="rounded-md my-2 hover:bg-base-300 hover:text-primary
                {{ request()->routeIs('products.index') ? 'menu-active bg-primary text-white' : '' }} ">
                        <a class="flex items-center gap-2" href="{{ route('products.index') }}">
                            <x-heroicon-s-list-bullet class="w-5 h-5" />
                            All Products
                        </a>
                    </li>

                    {{-- Create Product Link --}}
                    <li
                        class="rounded-md my-2 hover:bg-base-300 hover:text-primary
                {{ request()->routeIs('products.create') ? 'menu-active bg-primary text-white' : '' }} ">
                        <a class="flex items-center gap-2" href="{{ route('products.create') }}">
                            <x-heroicon-s-plus class="w-5 h-5" />
                            Create Product
                        </a>
                    </li>
                </ul>
            </details>
        </li>

        <li class="my-2">
            <details {{ request()->routeIs('orders.*') ? 'open' : '' }}>
                <summary
                    class="p-[13px] flex items-center gap-2 rounded-md cursor-pointer hover:bg-base-300 hover:text-primary
            {{ request()->routeIs('orders.*') ? 'bg-primary text-white' : '' }} ">
                    <x-heroicon-s-clipboard-document-list class="w-5 h-5" />
                    <span>Orders</span>
                </summary>

                <ul class="ml-4">
                    {{-- All Orders Link --}}
                    <li
                        class="rounded-md my-2 hover:bg-base-300 hover:text-primary
                {{ request()->routeIs('orders.index') ? 'menu-active bg-primary text-white' : '' }} ">
                        <a class="flex items-center gap-2" href="{{ route('orders.index') }}">
                            <x-heroicon-s-list-bullet class="w-5 h-5" />
                            All Orders
                        </a>
                    </li>

                    {{-- Create Product Link --}}
                    <li
                        class="rounded-md my-2 hover:bg-base-300 hover:text-primary
                {{ request()->routeIs('orders.create') ? 'menu-active bg-primary text-white' : '' }} ">
                        <a class="flex items-center gap-2" href="{{ route('orders.create') }}">
                            <x-heroicon-s-plus class="w-5 h-5" />
                            Create Orders
                        </a>
                    </li>
                </ul>
            </details>
        </li>

        <li
            class="p-1 rounded-md my-2 hover:bg-base-300 hover:text-primary
                {{ request()->routeIs('brands.index') ? 'menu-active bg-primary text-white' : '' }} ">
            <a class="flex items-center gap-2" href="{{ route('brands.index') }}">
                <x-heroicon-s-rectangle-stack class="w-5 h-5" />
                Brands
            </a>
        </li>

        <li class="my-2">
            <details {{ request()->routeIs('shops.*') ? 'open' : '' }}>
                <summary
                    class="p-[13px] flex items-center gap-2 rounded-md cursor-pointer hover:bg-base-300 hover:text-primary
            {{ request()->routeIs('shops.*') ? 'bg-primary text-white' : '' }} ">
                    <x-heroicon-s-building-storefront class="w-5 h-5" />
                    <span>Shop</span>
                </summary>

                <ul class="ml-4">
                    {{-- All Shop Link --}}
                    <li
                        class="rounded-md my-2 hover:bg-base-300 hover:text-primary
                {{ request()->routeIs('products.index') ? 'menu-active bg-primary text-white' : '' }} ">
                        <a class="flex items-center gap-2" href="{{ route('shops.index') }}">
                            <x-heroicon-s-list-bullet class="w-5 h-5" />
                            All Shop
                        </a>
                    </li>

                    {{-- Create Shop Link --}}
                    <li
                        class="rounded-md my-2 hover:bg-base-300 hover:text-primary
                {{ request()->routeIs('shops.create') ? 'menu-active bg-primary text-white' : '' }} ">
                        <a class="flex items-center gap-2" href="{{ route('shops.create') }}">
                            <x-heroicon-s-plus class="w-5 h-5" />
                            Create Shop
                        </a>
                    </li>
                </ul>
            </details>
        </li>

    </ul>
</div>
