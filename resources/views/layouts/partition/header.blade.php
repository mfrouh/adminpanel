<header class="flex justify-between items-center py-4 px-6 bg-white shadow-md">
    <div class="flex items-center">
        <button @click="sidebarOpen = true" class="text-gray-500 focus:outline-none lg:hidden">
            <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4 6H20M4 12H20M4 18H11" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
        </button>

    </div>

    <div class="flex items-center">
        <div x-data="{ dropdownOpenlang: false }" class="relative">
            <button @click="dropdownOpenlang = ! dropdownOpenlang"
                class="relative block h-8 w-8 overflow-hidden focus:outline-none"
                style="text-align: -webkit-@lang('setting.right');"">
                <svg xmlns=" http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd"
                    d="M7 2a1 1 0 011 1v1h3a1 1 0 110 2H9.578a18.87 18.87 0 01-1.724 4.78c.29.354.596.696.914 1.026a1 1 0 11-1.44 1.389c-.188-.196-.373-.396-.554-.6a19.098 19.098 0 01-3.107 3.567 1 1 0 01-1.334-1.49 17.087 17.087 0 003.13-3.733 18.992 18.992 0 01-1.487-2.494 1 1 0 111.79-.89c.234.47.489.928.764 1.372.417-.934.752-1.913.997-2.927H3a1 1 0 110-2h3V3a1 1 0 011-1zm6 6a1 1 0 01.894.553l2.991 5.982a.869.869 0 01.02.037l.99 1.98a1 1 0 11-1.79.895L15.383 16h-4.764l-.724 1.447a1 1 0 11-1.788-.894l.99-1.98.019-.038 2.99-5.982A1 1 0 0113 8zm-1.382 6h2.764L13 11.236 11.618 14z"
                    clip-rule="evenodd" />
                </svg>
            </button>

            <div x-show="dropdownOpenlang" @click="dropdownOpenlang = false" class="fixed inset-0 h-full w-full z-10">
            </div>

            <div x-show="dropdownOpenlang" x-transition:enter="transition ease-out duration-200"
                x-transition:enter-start="transform opacity-0 scale-95"
                x-transition:enter-end="transform opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-75"
                x-transition:leave-start="transform opacity-100 scale-100"
                x-transition:leave-end="transform opacity-0 scale-95"
                class="absolute z-50 mt-2 w-20 rounded-md shadow-lg origin-top-right @lang('setting.right')-0 "
                style="display: none;" @click="dropdownOpenlang = false">
                <div class="rounded-md ring-1 ring-black ring-opacity-5 py-1 bg-white text-center">
                    <ul>
                        {{-- @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <li>
                                <a class="p-2" rel="alternate" hreflang="{{ $localeCode }}"
                                    href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                    {{ $properties['native'] }}
                                </a>
                            </li>
                        @endforeach --}}
                    </ul>
                </div>
            </div>
        </div>

        <div x-data="{ notificationOpen: false }" class="relative">
            <button @click="notificationOpen = ! notificationOpen" class="flex mx-4 text-gray-600 focus:outline-none">
                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M15 17H20L18.5951 15.5951C18.2141 15.2141 18 14.6973 18 14.1585V11C18 8.38757 16.3304 6.16509 14 5.34142V5C14 3.89543 13.1046 3 12 3C10.8954 3 10 3.89543 10 5V5.34142C7.66962 6.16509 6 8.38757 6 11V14.1585C6 14.6973 5.78595 15.2141 5.40493 15.5951L4 17H9M15 17V18C15 19.6569 13.6569 21 12 21C10.3431 21 9 19.6569 9 18V17M15 17H9"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </button>

            <div x-show="notificationOpen" @click="notificationOpen = false" class="fixed inset-0 h-full w-full z-10">
            </div>
            <div x-show="notificationOpen" x-transition:enter="transition ease-out duration-200"
                x-transition:enter-start="transform opacity-0 scale-95"
                x-transition:enter-end="transform opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-75"
                x-transition:leave-start="transform opacity-100 scale-100"
                x-transition:leave-end="transform opacity-0 scale-95"
                class="absolute @lang('setting.right')-0 mt-2 w-96 bg-white rounded-lg shadow-xl overflow-hidden z-10"
                style="display: none;" @click="notificationOpen = false">
                <a class="flex items-center px-4 py-3  text-white bg-indigo-600 -mx-2 text-center"
                    style="flex-direction: column;">
                    {{ __('setting.notifications') }}
                </a>
                {{-- @forelse (auth()->user()->notifications->sortBy('id')->take(4) as $notification)
                    <a href="script::void(0)" class="flex items-center px-4 py-3 text-gray-600 hover:bg-gray-100 -mx-2">
                        <p class="text-sm mx-2">{{ Arr::get($notification, 'data.content') }}</p>
                    </a>
                    <hr>
                @empty --}}
                <a class="flex items-center px-4 py-3 font-bold  text-black bg-white text-center"
                    style="flex-direction: column;">
                    @lang('setting.not_found_notifications')
                </a>
                {{-- @endforelse --}}
                {{-- <a href="{{ route('notifications') }}" --}}
                <a class="flex items-center px-4 py-3 font-bold  text-white bg-indigo-600 text-center"
                    style="flex-direction: column;">
                    {{ __('setting.allnotifications') }}
                </a>
            </div>
        </div>

        <div x-data="{ dropdownOpen: false }" class="relative">
            <button @click="dropdownOpen = ! dropdownOpen"
                class="relative block h-8 w-8 rounded-full overflow-hidden shadow focus:outline-none">
                {{-- <img class="h-full w-full object-cover" src="{{ asset(auth()->user()->image) }}" alt="Your avatar"> --}}
            </button>

            <div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 h-full w-full z-10"></div>

            <div x-show="dropdownOpen" x-transition:enter="transition ease-out duration-200"
                x-transition:enter-start="transform opacity-0 scale-95"
                x-transition:enter-end="transform opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-75"
                x-transition:leave-start="transform opacity-100 scale-100"
                x-transition:leave-end="transform opacity-0 scale-95"
                class="absolute z-50 mt-2 w-48 rounded-md shadow-lg origin-top-right @lang('setting.right')-0 "
                style="display: none;" @click="dropdownOpen = false">
                <div class="rounded-md ring-1 ring-black ring-opacity-5 py-1 bg-white">
                    <!-- Account Management -->
                    <div class="block px-4 py-2 text-sm text-gray-600 text-center">
                        {{-- {{ auth()->user()->name }} --}}
                    </div>
                    <a class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition"
                        href="">{{ __('dashboard.dashboard') }}</a>
                    <div class="border-t border-gray-100"></div>
                    <!-- Authentication -->
                    <form method="POST" action="">
                        @csrf
                        <a class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition"
                            href="" onclick="event.preventDefault();
                             this.closest('form').submit();">{{ __('setting.logout') }}</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>
