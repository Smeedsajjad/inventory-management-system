<x-app-layout>
    {{-- header --}}
    <x-page-header title="Manage Brands" :links="[
        ['route' => 'dashboard', 'icon' => 'heroicon-s-home', 'label' => 'Home'],
        ['route' => 'brands.index', 'icon' => 'heroicon-s-building-storefront', 'label' => 'Shops'],
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

    <div class="overflow-x-auto border shadow-md rounded-box border-base-content/10 bg-base-100">
        <table class="table table-zebra">
            <!-- Table Head -->
            <thead class="bg-base-200">
                <tr>
                    <th>#</th>
                    <th>Shop Name</th>
                    <th>Owner</th>
                    <th>NTN</th>
                    <th>Phone Number</th>
                    <th>CNIC</th>
                    <th>Address</th>
                    <th>Tier    </th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <!-- Table Body -->
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Jhon</td>
                    <td>Bilal</td>
                    <td>2130231320</td>
                    <td>0300 11111111</td>
                    <td>0331311564132-1</td>
                    <td>Here shop address...</td>
                    <td>Tier 2</td>
                    <td class="space-x-2 text-center">
                        <button class="btn btn-xs btn-info">Edit</button>
                        <button class="btn btn-xs btn-error">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Jhon</td>
                    <td>Bilal</td>
                    <td>2130231320</td>
                    <td>0300 11111111</td>
                    <td>0331311564132-1</td>
                    <td>Here shop address...</td>
                    <td>Tier 2</td>
                    <td class="space-x-2 text-center">
                        <button class="btn btn-xs btn-info">Edit</button>
                        <button class="btn btn-xs btn-error">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Jhon</td>
                    <td>Bilal</td>
                    <td>2130231320</td>
                    <td>0300 11111111</td>
                    <td>0331311564132-1</td>
                    <td>Here shop address...</td>
                    <td>Tier 2</td>
                    <td class="space-x-2 text-center">
                        <button class="btn btn-xs btn-info">Edit</button>
                        <button class="btn btn-xs btn-error">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

</x-app-layout>
