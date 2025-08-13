<header>
    <div class="flex items-center justify-between w-full">
        <h1 class="text-3xl text-gray-300">{{ $title }}</h1>

        @if(!empty($links))
            <div class="text-sm breadcrumbs">
                <ul>
                    @foreach($links as $link)
                        <li>
                            <a wire:navigate href="{{ route($link['route']) }}">
                                <x-dynamic-component
                                    :component="$link['icon']"
                                    class="text-white size-4"
                                />
                                {{ $link['label'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
    <hr class="my-5 border-gray-700">
</header>
