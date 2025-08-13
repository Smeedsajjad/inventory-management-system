<x-app-layout>
    {{-- header --}}
    <x-page-header title="Create Product" :links="[
        ['route' => 'dashboard', 'icon' => 'heroicon-s-home', 'label' => 'Home'],
        ['route' => 'products.index', 'icon' => 'heroicon-s-folder-open', 'label' => 'Products'],
        ['route' => 'products.create', 'icon' => 'heroicon-s-plus', 'label' => 'Create'],
    ]" />

    <fieldset class="w-full p-6 border fieldset bg-base-200 border-base-300 rounded-box">
        <legend class="fieldset-legend">Create Product</legend>

        <!-- Product Name + Code -->
        <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
            <div>
                <label class="label">
                    <span class="label-text">Product Name</span>
                </label>
                <input type="text" class="w-full input input-bordered" placeholder="Enter product name" />
            </div>
            <div>
                <label class="label">
                    <span class="label-text">Code of Product</span>
                </label>
                <input type="text" class="w-full input input-bordered" placeholder="Enter product code" />
            </div>
        </div>

        <!-- Stocks + Select Brand -->
        <div class="grid grid-cols-1 gap-4 mt-4 md:grid-cols-2">
            <div>
                <label class="label">
                    <span class="label-text">Stocks <span class="text-xs text-gray-400">(per piece)</span></span>
                </label>
                <input type="number" class="w-full input input-bordered" placeholder="Enter stock quantity" />
            </div>
            <div>
                <label class="label">
                    <span class="label-text">Select Brand</span>
                </label>
                <select class="w-full select select-bordered">
                    <option disabled selected>Select a brand</option>
                    <option>Brand A</option>
                    <option>Brand B</option>
                    <option>Brand C</option>
                </select>
            </div>
        </div>

        <!-- Price + Pieces Per Carton -->
        <div class="grid grid-cols-1 gap-4 mt-4 md:grid-cols-2">
            <div>
                <label class="label">
                    <span class="label-text">Price <span class="text-xs text-gray-400">(per piece)</span></span>
                </label>
                <input type="number" step="0.01" class="w-full input input-bordered" placeholder="Enter price" />
            </div>
            <div>
                <label class="label">
                    <span class="label-text">Pieces Per Carton</span>
                </label>
                <input type="number" class="w-full input input-bordered" placeholder="Enter pieces per carton" />
            </div>
        </div>

        <!-- TP + RRP -->
        <div class="grid grid-cols-1 gap-4 mt-4 md:grid-cols-2">
            <div>
                <label class="label">
                    <span class="label-text">TP <span class="text-xs text-gray-400">(purchase price)</span></span>
                </label>
                <input type="number" step="0.01" class="w-full input input-bordered"
                    placeholder="Enter purchase price" />
            </div>
            <div>
                <label class="label">
                    <span class="label-text">RRP <span class="text-xs text-gray-400">(selling price)</span></span>
                </label>
                <input type="number" step="0.01" class="w-full input input-bordered"
                    placeholder="Enter selling price" />
            </div>
        </div>

        <!-- Submit -->
        <div class="mt-6">
            <button class="btn btn-primary">Save Product</button>
        </div>
    </fieldset>


</x-app-layout>
