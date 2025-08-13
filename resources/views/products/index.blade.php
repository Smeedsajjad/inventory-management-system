<x-app-layout>
    {{-- header --}}
    <x-page-header title="Manage Products" :links="[
        ['route' => 'dashboard', 'icon' => 'heroicon-s-home', 'label' => 'Home'],
        ['route' => 'brands.index', 'icon' => 'heroicon-s-folder-open', 'label' => 'Products'],
    ]" />

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
    <div class="mt-8 overflow-x-auto border rounded-box border-base-content/5 bg-base-100">
        <table class="table">
            <!-- head -->
            <thead>
                <tr>
                    <th>#</th>
                    <th>Product Name</th>
                    <th>Code</th>
                    <th>Stocks (per piece)</th>
                    <th>Brand</th>
                    <th>Price (per piece)</th>
                    <th>Pieces/Carton</th>
                    <th>TP (price)</th>
                    <th>RRP (price)</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Example row 1 -->
                <tr>
                    <th>1</th>
                    <td>Sample Product</td>
                    <td>PR-001</td>
                    <td>100</td>
                    <td>Brand A</td>
                    <td>$2.50</td>
                    <td>24</td>
                    <td>$1.80</td>
                    <td>$3.50</td>
                    <td class="space-x-2 text-center">
                        <button class="btn btn-xs btn-info">Edit</button>
                        <button class="btn btn-xs btn-error">Delete</button>
                    </td>
                </tr>

                <!-- Example row 2 -->
                <tr>
                    <th>2</th>
                    <td>Another Product</td>
                    <td>PR-002</td>
                    <td>50</td>
                    <td>Brand B</td>
                    <td>$5.00</td>
                    <td>12</td>
                    <td>$4.00</td>
                    <td>$6.50</td>
                    <td class="space-x-2 text-center">
                        <button class="btn btn-xs btn-info">Edit</button>
                        <button class="btn btn-xs btn-error">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>


</x-app-layout>
