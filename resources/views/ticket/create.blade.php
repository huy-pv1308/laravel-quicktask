<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('temp.cticket') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="overflow-hidden overflow-x-auto p-6 bg-white border-b border-gray-200">
                    <div class="min-w-full align-middle">
                        <!-- Validation Errors -->
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />

                        <form method="POST" action="{{ route('tickets.store') }}">
                            @csrf

                            <!-- Movie Name -->
                            <div>
                                <x-label for="movie_name" :value="__('temp.movie')" />

                                <x-input id="movie_name" class="block mt-1 w-full" type="text" name="movie_name" :value="old('movie_name')" required autofocus />
                            </div>

                            <!-- Time Show -->
                            <div>
                                <x-label for="time_show" :value="__('temp.timefor')" />

                                <x-input id="time_show" class="block mt-1 w-full" type="text" name="time_show" :value="old('time_show')" required autofocus />
                            </div>

                            <div class="flex items-center justify-end mt-4">
                                <x-button class="ml-4">
                                    {{ __('temp.cticket') }}
                                </x-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
