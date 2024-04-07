<div x-data="{ open: false }" @click.away="open = false" class="flex flex-auto justify-center w-full md:flex-none md:w-auto">
    <div class="flex flex-col w-full p-2">
        <button @click="open = !open" class="flex justify-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-20 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 ml-2 mr-2">
        <span class="mr-1 capitalize">
            {{ $name }}
        </span>
            <span class="ml-1"><svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
            </svg>
        </span>
        </button>
        <div id="filter-dropdown" x-show="open" class="mx-auto z-10 mt-2 bg-white divide-y divide-gray-100 rounded-lg shadow w-full dark:bg-gray-700">
            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200 overflow-y-auto max-h-56">
                @foreach($list as $item)
                    <li>
                        <a wire:navigate href="/?{{ $name }}={{ $item->slug }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                            {{ $item->name }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>

