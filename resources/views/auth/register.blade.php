<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="{{ URL('/') }}">
                <span class="sr-only">KYFAME</span>
                <img class="h-8 w-auto sm:h-10" src="{{URL::to('assets/logo.png') }}" style="height: 50px;" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- firstName -->
            <div>
                <x-label for="firstName" :value="__('First Name')" />

                <x-input id="firstName" class="block mt-1 w-full" type="text" name="firstName" :value="old('firstName')" required
                    autofocus />
            </div>

             <!-- lastName -->
            <div>
                <x-label for="lastName" :value="__('Last Name')" />

                <x-input id="lastName" class="block mt-1 w-full" type="text" name="lastName" :value="old('lastName')" required
                    autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full" type="password"
                    name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
