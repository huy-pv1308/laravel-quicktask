<style>
    ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: hidden;
    }
    
    li {
      float: left;
    }
    
    li a {
      display: block;
      color: white;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }
    
    li a:hover {
      background-color: #111;
    }
</style>

<x-guest-layout>
    <ul style="background-color: #333">
        <li>
            <a> Language: 
                @switch(session()->get('locale'))
                    @case('en')
                        English
                        @break
                    @case('vi')
                        Vietname
                        @break
                    @default
                        English
                @endswitch
            </a>
        </li>
        <li>    
            <a href="{{ route('lang', ['en']) }}"> English </a> 
        </li>
        <li>    
            <a href="{{ route('lang', ['vi']) }}"> Vietnam </a> 
        <li>
    </ul>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- UserName -->
            <div>
                <x-label for="username" :value="__('temp.uname')" />

                <x-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username')" required autofocus />
            </div>

            <!-- First_Name -->
            <div>
                <x-label for="first_name" :value="__('temp.fname')" />

                <x-input id="first_name" class="block mt-1 w-full" type="text" name="first_name" :value="old('first name')" required autofocus />
            </div>

            <!-- Last Name -->
            <div>
                <x-label for="last_name" :value="__('temp.lname')" />

                <x-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('temp.mail')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('temp.pass')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('temp.compass')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('temp.alup') }}
                </a>

                <x-button class="ml-4">
                    {{ __('temp.up') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
