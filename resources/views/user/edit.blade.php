<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('temp.uuser') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="overflow-hidden overflow-x-auto p-6 bg-white border-b border-gray-200">
                    <div class="min-w-full align-middle">
                        <!-- Validation Errors -->
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />

                        <form method="POST" action="{{ route('users.update', $user->id) }}">
                            @csrf
                            @method('PUT')
                            <!-- UserName -->
                            <div>
                                <x-label for="username" :value="__('temp.uname')" />

                                <x-input id="username" class="block mt-1 w-full" type="text" name="username" :value="$user->username" required autofocus />
                            </div>

                            <!-- First_Name -->
                            <div>
                                <x-label for="first_name" :value="__('temp.fname')" />

                                <x-input id="first_name" class="block mt-1 w-full" type="text" name="first_name" :value="$user->first_name" required autofocus />
                            </div>

                            <!-- Last Name -->
                            <div>
                                <x-label for="last_name" :value="__('temp.lname')" />

                                <x-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="$user->last_name" required autofocus />
                            </div>

                            <!-- Email Address -->
                            <div class="mt-4">
                                <x-label for="email" :value="__('temp.mail')" />

                                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="$user->email" required />
                            </div>
                            <div class="flex items-center justify-end mt-4">
                                <x-button class="ml-4">
                                    {{ __('temp.uuser') }}
                                </x-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
