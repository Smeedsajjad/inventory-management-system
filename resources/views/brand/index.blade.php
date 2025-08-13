<x-app-layout>
    {{-- header --}}
    {{-- header --}}
    <x-page-header title="Manage Brands" :links="[
        ['route' => 'dashboard', 'icon' => 'heroicon-s-home', 'label' => 'Home'],
        ['route' => 'brands.index', 'icon' => 'heroicon-s-folder-open', 'label' => 'Brands'],
    ]" />
    <div class="flex flex-col gap-4 mt-10 md:flex-row">
        <div class="w-full p-4 md:w-2/5">
            <fieldset class="p-4 border fieldset bg-base-200 border-base-300 rounded-box w-xs">
                <legend class="fieldset-legend">Create Brade</legend>
                <input type="text" class="w-full input" placeholder="Create new here..." />
                <button class="mt-4 btn btn-neutral">Save</button>
            </fieldset>
        </div>
        <div class="w-full md:w-3/5">
            <div class="overflow-x-auto border rounded-box border-base-content/5 bg-base-100">
                <table class="table">
                    <!-- head -->
                    <thead>
                        <tr>
                            <th></th>
                            <th>Brand Name</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- row 1 -->
                        <tr>
                            <th>1</th>
                            <td>Ariel</td>
                            <td class="space-x-2 text-center">
                                <button class="btn btn-xs btn-info">Edit</button>
                                <button class="btn btn-xs btn-error">Delete</button>
                            </td>
                        </tr>
                        <!-- row 2 -->
                        <tr>
                            <th>2</th>
                            <td>H&S</td>
                            <td class="space-x-2 text-center">
                                <button class="btn btn-xs btn-info">Edit</button>
                                <button class="btn btn-xs btn-error">Delete</button>
                            </td>
                        </tr>
                        <!-- row 3 -->
                        <tr>
                            <th>3</th>
                            <td>PPV</td>
                            <td class="space-x-2 text-center">
                                <button class="btn btn-xs btn-info">Edit</button>
                                <button class="btn btn-xs btn-error">Delete</button>
                            </td>
                        </tr>
                        <!-- row 4 -->
                        <tr>
                            <th>3</th>
                            <td>Safeguard</td>
                            <td class="space-x-2 text-center">
                                <button class="btn btn-xs btn-info">Edit</button>
                                <button class="btn btn-xs btn-error">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


</x-app-layout>
