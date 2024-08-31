<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <form method="POST" action="{{ route('logout') }}">
        @csrf

        <x-dropdown-link :href="route('logout')"
                onclick="event.preventDefault();
                            this.closest('form').submit();">
            {{ __('Log Out') }}
        </x-dropdown-link>
    </form>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>

            <div class="border-t border-gray-200 py-6">
                @foreach ($users as $user)
                    {{-- one row show 3 user  --}}
                    <div class="flex items-center px-6 py-4 hover:bg-gray-50">
                        <div class="flex-shrink-0 w-10 h-10 bg-gray-200 rounded-full"></div>
                        <a href="{{ route('chat', $user->id) }}">
                            <div class="flex-1 ml-4">
                                <div class="text-sm font-medium text-gray-900">
                                    {{ $user->name }}
                                </div>
                                <div class="text-sm text-gray-500">
                                    {{ $user->email }}
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach

            </div>
        </div>
</x-app-layout>
