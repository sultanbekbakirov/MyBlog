<!--
      When the mobile menu is open, add `overflow-hidden` to the `body` element to prevent double scrollbars

      Open: "fixed inset-0 z-40 overflow-y-auto", Closed: ""
    -->
<header class="bg-white shadow-sm lg:static lg:overflow-y-visible">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="relative flex justify-between xl:grid xl:grid-cols-12 lg:gap-8">
            <div class="flex md:absolute md:left-0 md:inset-y-0 lg:static xl:col-span-2">
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{route('home')}}">
                        <img class="block h-8 w-auto"
                             src="https://tailwindui.com/img/logos/workflow-mark.svg?color=indigo&shade=600"
                             alt="Workflow">
                    </a>
                </div>
            </div>
            <div class="min-w-0 flex-1 md:px-8 lg:px-0 xl:col-span-6">
                <div class="flex items-center px-6 py-4 md:max-w-3xl md:mx-auto lg:max-w-none lg:mx-0 xl:px-0">
                    <div class="w-full">
                        <label for="search" class="sr-only">Search</label>
                        <div class="relative">
                            <div class="pointer-events-none absolute inset-y-0 left-0 pl-3 flex items-center">
                                <!-- Heroicon name: solid/search -->
                                <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                          d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                          clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <x-form>
                                <input id="search" name="title" value="{{request()->get('title')}}"
                                       placeholder="{{__('Поиск постов')}}"
                                       class="block w-full bg-white border border-gray-300 rounded-md py-2 pl-10 pr-3 text-sm placeholder-gray-500 focus:outline-none focus:text-gray-900 focus:placeholder-gray-400 focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                       type="search">
                            </x-form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex items-center md:absolute md:right-0 md:inset-y-0 lg:hidden">
                <!-- Mobile menu button -->
                <button type="button"
                        class="-mx-2 rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500"
                        aria-expanded="false">
                    <span class="sr-only">Open menu</span>
                    <!--
                      Icon when menu is closed.

                      Heroicon name: outline/menu

                      Menu open: "hidden", Menu closed: "block"
                    -->
                    <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                    <!--
                      Icon when menu is open.

                      Heroicon name: outline/x

                      Menu open: "block", Menu closed: "hidden"
                    -->
                    <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
            <div class="hidden lg:flex lg:items-center lg:justify-end xl:col-span-4">
                <a href="#"
                   class="ml-5 flex-shrink-0 bg-white rounded-full p-1 text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    <span class="sr-only">View notifications</span>
                    <!-- Heroicon name: outline/bell -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
                    </svg>
                </a>

                <!-- Profile dropdown -->
                <div class="flex-shrink-0 relative ml-5">
                    @auth
                        <!-- Settings Dropdown -->
                        <div class="hidden sm:flex sm:items-center sm:ml-6">
                            <x-dropdown align="right" width="48">
                                <x-slot name="trigger">
                                    <button
                                        class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                        <div>{{ Auth::user()->name }}</div>

                                        <div class="ml-1">
                                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                 viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                      d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                      clip-rule="evenodd"/>
                                            </svg>
                                        </div>
                                    </button>
                                </x-slot>
                                <x-slot name="content">
                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <x-dropdown-link :href="route('logout')"
                                                         onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                            {{ __('Выйти') }}
                                        </x-dropdown-link>
                                    </form>
                                    <x-dropdown-link :href="route('profile.index')">
                                        {{ __('Профиль') }}
                                    </x-dropdown-link>
                                </x-slot>
                            </x-dropdown>
                        </div>
                    @endauth
                    @guest
                        <x-dropdown-link :href="route('login')">
                            {{ __('Вход') }}
                        </x-dropdown-link>
                    @endguest
                </div>
                @auth
                    <a href="{{route('post.create')}}"
                       class="ml-6 inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Создать </a>
                @endauth
            </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <nav class="lg:hidden" aria-label="Global">
        <div class="max-w-3xl mx-auto px-2 pt-2 pb-3 space-y-1 sm:px-4">
            <!-- Current: "bg-gray-100 text-gray-900", Default: "hover:bg-gray-50" -->
            <a href="#" aria-current="page"
               class="bg-gray-100 text-gray-900 block rounded-md py-2 px-3 text-base font-medium">Dashboard</a>

            <a href="#" class="hover:bg-gray-50 block rounded-md py-2 px-3 text-base font-medium">Calendar</a>

            <a href="#" class="hover:bg-gray-50 block rounded-md py-2 px-3 text-base font-medium">Teams</a>

            <a href="#" class="hover:bg-gray-50 block rounded-md py-2 px-3 text-base font-medium">Directory</a>
        </div>
        <div class="border-t border-gray-200 pt-4 pb-3">
            <div class="max-w-3xl mx-auto px-4 flex items-center sm:px-6">
                <div class="flex-shrink-0">
                    <img class="h-10 w-10 rounded-full"
                         src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                         alt="">
                </div>
                <div class="ml-3">
                    <div class="text-base font-medium text-gray-800">Chelsea Hagon</div>
                    <div class="text-sm font-medium text-gray-500">chelseahagon@example.com</div>
                </div>
                <button type="button"
                        class="ml-auto flex-shrink-0 bg-white rounded-full p-1 text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    <span class="sr-only">View notifications</span>
                    <!-- Heroicon name: outline/bell -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
                    </svg>
                </button>
            </div>
            <div class="mt-3 max-w-3xl mx-auto px-2 space-y-1 sm:px-4">
                <a href="#"
                   class="block rounded-md py-2 px-3 text-base font-medium text-gray-500 hover:bg-gray-50 hover:text-gray-900">Your
                    Profile</a>

                <a href="#"
                   class="block rounded-md py-2 px-3 text-base font-medium text-gray-500 hover:bg-gray-50 hover:text-gray-900">Settings</a>

                <a href="#"
                   class="block rounded-md py-2 px-3 text-base font-medium text-gray-500 hover:bg-gray-50 hover:text-gray-900">Sign
                    out</a>
            </div>
        </div>
    </nav>
</header>
