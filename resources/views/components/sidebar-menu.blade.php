<div class="drawer-side">
    <label for="my-drawer-2" aria-label="close sidebar" class="drawer-overlay"></label>
    <ul class="menu bg-base-200 text-base-content min-h-full w-80 p-4">
        <div class="mb-4 border-b p-4 pl-0 border-gray-300">
            <div class="flex items-center space-x-3 px-2">
                <x-heroicon-o-cube class="h-8 w-8" />
                <span class="text-xl font-bold">Bilal Teraders</span>
            </div>
        </div>
        <li
            class="p-1 rounded-md mb-4 hover:bg-base-300 hover:text-primary
               {{ request()->routeIs('dashboard') ? 'menu-active bg-primary text-white' : '' }} ">
            <a class="flex items-center gap-2 hover:bg-base-300" href="{{ route('dashboard') }}">
                <x-heroicon-s-home class="h-5 w-5" />
                Dashboard
            </a>
        </li>

        <li
            class="p-1 rounded-md mb-4 hover:bg-base-300 hover:text-primary
               {{ request()->routeIs('dashboard') ? 'menu-active bg-primary text-white' : '' }} ">
            <a class="flex items-center gap-2 hover:bg-base-300" href="{{ route('dashboard') }}">
                <x-heroicon-s-tag class="h-5 w-5" />
                Brands
            </a>
        </li>

    </ul>
</div>
