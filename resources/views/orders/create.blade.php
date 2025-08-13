<x-app-layout>
    {{-- header --}}
    <x-page-header title="Create Order" :links="[
        ['route' => 'dashboard', 'icon' => 'heroicon-s-home', 'label' => 'Home'],
        ['route' => 'orders.index', 'icon' => 'heroicon-s-clipboard-document-list', 'label' => 'Orders'],
        ['route' => 'orders.create', 'icon' => 'heroicon-s-plus', 'label' => 'Create'],
    ]" />

    <fieldset class="p-4 border fieldset bg-base-200 border-base-300 rounded-box w-xs">
        <legend class="fieldset-legend">Delivery Information</legend>

        <div class="grid grid-cols-1 gap-4 mt-4 md:grid-cols-2">
            <div>
                <div x-data="{
                    open: false,
                    search: '',
                    selected: null,
                    selectedName: '',
                    // hard-coded brands list
                    brands: [
                        { id: 1, name: 'Coca-Cola' },
                        { id: 2, name: 'Pepsi' },
                        { id: 3, name: 'Nestlé' },
                        { id: 4, name: 'Unilever' },
                    ],
                    get filtered() {
                        if (!this.search) return this.brands;
                        return this.brands.filter(b =>
                            b.name.toLowerCase().includes(this.search.toLowerCase())
                        );
                    },
                    select(brand) {
                        this.selected = brand.id;
                        this.selectedName = brand.name;
                        this.open = false;
                        this.search = '';
                    }
                }" class="relative">
                    <label class="block mb-2 text-sm font-medium text-gray-300">Brand</label>

                    <!-- trigger -->
                    <div @click="open = !open"
                        class="select w-full cursor-pointer flex items-center justify-between bg-[#191e24] border border-base-content/10 rounded px-3 py-2">
                        <span x-text="selectedName || 'Select Brand'" class="truncate"></span>
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </div>

                    <!-- hidden field -->
                    <input type="hidden" name="brand_id" x-model="selected" />

                    <!-- dropdown panel -->
                    <div x-show="open" @click.away="open = false"
                        class="absolute z-50 w-full mt-1 border rounded shadow-lg bg-base-100 border-base-content/10">
                        <div class="p-2">
                            <input x-model="search" type="text" placeholder="Search brand..."
                                class="w-full input input-bordered" @keydown.escape.window="open = false"
                                @keydown.arrow-down.prevent="$refs.list?.children[0]?.focus()" />
                        </div>
                        <ul x-ref="list" class="overflow-y-auto max-h-48">
                            <template x-for="brand in filtered" :key="brand.id">
                                <li @click="select(brand)" @keydown.enter.prevent="select(brand)" tabindex="0"
                                    class="px-4 py-2 cursor-pointer hover:bg-base-200"
                                    :class="{ 'bg-base-200': selected == brand.id }" x-text="brand.name">
                                </li>
                            </template>
                            <li x-show="filtered.length === 0" class="px-4 py-2 text-gray-400">
                                No brands found.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div>
                <label class="block mb-2 text-sm font-medium text-gray-300">Deliver at</label>
                <input type="datetime-local" class="w-full input" />
            </div>
        </div>

        <div class="grid grid-cols-1 gap-4 mt-4 md:grid-cols-2">
            <div>
                <label class="block mb-2 text-sm font-medium text-gray-300">Priority</label>
                <select class="w-full select">
                    <option disabled selected>Select Priority</option>
                    <option>Low</option>
                    <option>Medium</option>
                    <option>High</option>
                </select>
            </div>
        </div>
    </fieldset>

<fieldset class="p-4 border fieldset bg-base-200 border-base-300 rounded-box w-xs"
    x-data="{
        products: [
            { id: 1, name: 'Coca-Cola 330ml Can', stock: 150 },
            { id: 2, name: 'Pepsi 500ml Bottle', stock: 200 },
            { id: 3, name: 'Sprite 1L Bottle', stock: 80 },
            { id: 4, name: 'Fanta Orange 330ml', stock: 120 },
            { id: 5, name: 'Mountain Dew 500ml', stock: 90 },
            { id: 6, name: 'Diet Coke 330ml', stock: 75 },
        ],
        selectedProducts: [],
        nextId: 1,

        addProduct() {
            this.selectedProducts.push({
                id: this.nextId++,
                product_id: null,
                product_name: '',
                current_stock: 0,
                pieces: '',
                dozen: '',
                carton: '',
                search: '',
                open: false,
                filtered: []
            });
        },

        removeProduct(id) {
            this.selectedProducts = this.selectedProducts.filter(p => p.id !== id);
        },

        selectProduct(rowIndex, product) {
            this.selectedProducts[rowIndex].product_id = product.id;
            this.selectedProducts[rowIndex].product_name = product.name;
            this.selectedProducts[rowIndex].current_stock = product.stock;
            this.selectedProducts[rowIndex].open = false;
            this.selectedProducts[rowIndex].search = '';
        },

        filterProducts(rowIndex) {
            const search = this.selectedProducts[rowIndex].search;
            if (!search) {
                this.selectedProducts[rowIndex].filtered = this.products;
                return;
            }
            this.selectedProducts[rowIndex].filtered = this.products.filter(p =>
                p.name.toLowerCase().includes(search.toLowerCase())
            );
        },

        init() {
            this.addProduct(); // Add first row by default
        }
    }">
    <legend class="fieldset-legend">Products</legend>

    <!-- Add Product Button -->
    <div class="mb-4">
        <button @click="addProduct()" class="btn btn-primary btn-sm">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
            </svg>
            Add Product
        </button>
    </div>

    <!-- Products Table -->
    <div class="overflow-x-auto" style="overflow: visible;">
        <table class="table w-full">
            <thead>
                <tr>
                    <th class="w-1/3">Select Product</th>
                    <th class="w-20">Current Stock</th>
                    <th class="w-24">Pieces</th>
                    <th class="w-24">Dozen</th>
                    <th class="w-24">Carton</th>
                    <th class="w-16">Action</th>
                </tr>
            </thead>
            <tbody style="overflow: visible;">
                <template x-for="(row, index) in selectedProducts" :key="row.id">
                    <tr style="overflow: visible;">
                        <!-- Select Product Column -->
                        <td>
                            <div class="relative">
                                <!-- Product Selector -->
                                <div @click="row.open = !row.open; filterProducts(index)"
                                    class="select w-full cursor-pointer flex items-center justify-between bg-[#191e24] border border-base-content/10 rounded px-3 py-2 min-h-[2.5rem]">
                                    <span x-text="row.product_name || 'Select Product'" class="text-sm truncate"></span>
                                    <svg class="flex-shrink-0 w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </div>

                                <!-- Hidden Input -->
                                <input type="hidden" :name="'products[' + index + '][product_id]'" x-model="row.product_id" />

                                <!-- Dropdown Panel with Fixed Positioning -->
                                <div x-show="row.open"
                                     @click.away="row.open = false"
                                     x-transition:enter="transition ease-out duration-100"
                                     x-transition:enter-start="transform opacity-0 scale-95"
                                     x-transition:enter-end="transform opacity-100 scale-100"
                                     x-transition:leave="transition ease-in duration-75"
                                     x-transition:leave-start="transform opacity-100 scale-100"
                                     x-transition:leave-end="transform opacity-0 scale-95"
                                     class="fixed z-[100] min-w-[280px] max-w-[400px] border rounded shadow-xl bg-base-100 border-base-content/10"
                                     x-anchor.bottom-start="$el.previousElementSibling"
                                     style="box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.4), 0 10px 10px -5px rgba(0, 0, 0, 0.2);">
                                    <!-- Search Input -->
                                    <div class="p-3 border-b border-base-content/10">
                                        <input x-model="row.search"
                                               @input="filterProducts(index)"
                                               type="text"
                                               placeholder="Search product..."
                                               class="w-full input input-bordered input-sm"
                                               @keydown.escape="row.open = false"
                                               x-ref="searchInput" />
                                    </div>

                                    <!-- Product Options -->
                                    <ul class="py-1 overflow-y-auto max-h-60">
                                        <template x-for="product in (row.search ? row.filtered : products)" :key="product.id">
                                            <li @click="selectProduct(index, product)"
                                                class="px-4 py-3 text-sm transition-colors duration-150 cursor-pointer hover:bg-base-200"
                                                :class="{ 'bg-primary/20 text-primary': row.product_id == product.id }">
                                                <div>
                                                    <div x-text="product.name" class="mb-1 font-medium"></div>
                                                    <div x-text="'Stock: ' + product.stock + ' units'" class="text-xs opacity-70"></div>
                                                </div>
                                            </li>
                                        </template>
                                        <li x-show="row.search && row.filtered.length === 0"
                                            class="px-4 py-6 text-sm text-center text-gray-400">
                                            <div class="flex flex-col items-center">
                                                <svg class="w-8 h-8 mb-2 opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                                </svg>
                                                No products found.
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </td>

                        <!-- Current Stock Column -->
                        <td>
                            <div class="text-center">
                                <span x-text="row.current_stock || '-'" class="font-mono text-sm"></span>
                            </div>
                        </td>

                        <!-- Pieces Column -->
                        <td>
                            <input type="number"
                                   x-model="row.pieces"
                                   :name="'products[' + index + '][pieces]'"
                                   placeholder="0"
                                   min="0"
                                   class="w-full input input-sm" />
                        </td>

                        <!-- Dozen Column -->
                        <td>
                            <input type="number"
                                   x-model="row.dozen"
                                   :name="'products[' + index + '][dozen]'"
                                   placeholder="0"
                                   min="0"
                                   class="w-full input input-sm" />
                        </td>

                        <!-- Carton Column -->
                        <td>
                            <input type="number"
                                   x-model="row.carton"
                                   :name="'products[' + index + '][carton]'"
                                   placeholder="0"
                                   min="0"
                                   class="w-full input input-sm" />
                        </td>

                        <!-- Action Column -->
                        <td>
                            <button @click="removeProduct(row.id)"
                                    class="btn btn-error btn-sm btn-square"
                                    :disabled="selectedProducts.length === 1">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                </svg>
                            </button>
                        </td>
                    </tr>
                </template>
            </tbody>
        </table>

        <!-- Empty State -->
        <div x-show="selectedProducts.length === 0" class="py-8 text-center">
            <div class="text-gray-400">
                <svg class="w-12 h-12 mx-auto mb-4 opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                </svg>
                <p>No products added yet.</p>
                <p class="text-sm">Click "Add Product" to get started.</p>
            </div>
        </div>
    </div>

    <!-- Summary Section (Optional) -->
    <div x-show="selectedProducts.length > 0" class="p-3 mt-4 rounded-lg bg-base-300">
        <div class="text-sm">
            <strong>Summary:</strong>
            <span x-text="selectedProducts.length"></span> product(s) selected
        </div>
    </div>
</fieldset>

<button class="mt-4 btn btn-lg btn-primary">Save</button>


</x-app-layout>
