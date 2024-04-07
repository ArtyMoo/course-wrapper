<header>
    <nav class="bg-white border-gray-200 dark:bg-gray-900">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-4">
            <a href="{{ url('') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('images/ififagency-logo-sq.png') }}" class="h-16" alt="Ififagency Logo" />
            </a>
            <div class="flex items-center space-x-6 rtl:space-x-reverse">
                <a href="tel:5541251234" class="text-sm  text-gray-500 dark:text-white hover:underline">(555) 412-1234</a>
                @auth()
                    <h5>Hi {{ auth()->user()->firstname }}</h5>
                    <a href="#"
                       x-data="{}"
                       @click.prevent="document.querySelector('#logout-form').submit()"
                       class="text-sm  text-blue-600 dark:text-blue-500 hover:underline"
                    >
                        Logout
                    </a>
                    <form id="logout-form" method="POST" action="/logout" class="text-xs font-bold uppercase mr-3 ml-3">
                        @csrf
                    </form>
                @else
                    <a wire:navigate href="/register" class="text-sm  text-blue-600 dark:text-blue-500 hover:underline">Register</a>
                    <a wire:navigate href="/login" class="text-sm  text-blue-600 dark:text-blue-500 hover:underline">Login</a>
                @endauth
                <button wire:click="toggleDarkMode">Toggle Dark Mode</button>
            </div>
        </div>
    </nav>
    <nav class="bg-gray-50 dark:bg-gray-700">
        <div class="max-w-screen-xl px-4 py-3 mx-auto">
            <div class="flex items-center">
                <ul class="flex flex-row font-medium mt-0 space-x-8 rtl:space-x-reverse text-sm">
                    <li>
                        <a wire:navigate href="{{ url('') }}" class="text-gray-900 dark:text-white hover:underline" aria-current="page">Home</a>
                    </li>
                    <li>
                        <a wire:navigate href="#" class="text-gray-900 dark:text-white hover:underline">Company</a>
                    </li>
                    <li>
                        <a wire:navigate href="#" class="text-gray-900 dark:text-white hover:underline">Team</a>
                    </li>
                    <li>
                        <a wire:navigate href="#" class="text-gray-900 dark:text-white hover:underline">Features</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

