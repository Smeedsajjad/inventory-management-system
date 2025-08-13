<x-app-layout>
    {{-- header --}}
    <x-page-header title="Create Shops" :links="[
        ['route' => 'dashboard', 'icon' => 'heroicon-s-home', 'label' => 'Home'],
        ['route' => 'shops.index', 'icon' => 'heroicon-s-folder-open', 'label' => 'Shops'],
        ['route' => 'shops.create', 'icon' => 'heroicon-s-plus', 'label' => 'Create'],
    ]" />

    <fieldset class="p-4 border fieldset bg-base-200 border-base-300 rounded-box w-xs">
        <legend class="fieldset-legend">Shop Details</legend>
        <!-- Row 1 -->
        <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
            <div>
                <label class="label">Shop Name</label>
                <input type="text" class="w-full input input-bordered" placeholder="Shop Name" />
            </div>
            <div>
                <label class="label">NTN (Code)</label>
                <input type="text" class="w-full input input-bordered" placeholder="00000000" />
            </div>
        </div>

        <!-- Row -->
        <div class="grid grid-cols-1 gap-4 mt-4 md:grid-cols-2">
            <div>
                <label class="label">Owner</label>
                <input type="text" class="w-full input input-bordered" placeholder="Shop Owner Name" />
            </div>
            <div>
                <label class="label">Tier</label>
                 <select class="w-full select">
                    <option disabled selected>Select Tier</option>
                    <option>Tier 1</option>
                    <option>Tier 2</option>
                    <option>Tier 3</option>
                </select>
            </div>
        </div>

        <!-- Row 2 -->
        <div class="grid grid-cols-1 gap-4 mt-4 md:grid-cols-2">
            <div>
                <label class="label">Phone Number</label>
                <input type="text" class="w-full input input-bordered" placeholder="+92 300 0000000" />
            </div>
            <div>
                <label class="label">CNIC No.</label>
                <input type="text" class="w-full input input-bordered" placeholder="00000-0000000-0" />
            </div>
        </div>

        <!-- Row 3 -->
        <div class="mt-4">
            <label class="label">Address</label>
            <textarea class="w-full textarea textarea-bordered" placeholder="Enter full address"></textarea>
        </div>
        <!-- Submit -->
        <div class="mt-6">
            <button class="btn btn-primary">Save</button>
        </div>
    </fieldset>


</x-app-layout>
