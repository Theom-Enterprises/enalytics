<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <div class="flex flex-col justify-center text-4xl items-center text-center w-full font-bold">
                <div>Melde Dich an,</div>
                <div>um das Admin-Panel zu bedienen</div>
            </div>
        </x-slot>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('E-Mail')"/>

                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                              required placeholder="Your email" autofocus/>

                <x-input-error :messages="$errors->get('email')" class="mt-2"/>
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')"/>

                <x-text-input id="password" class="block mt-1 w-full"
                              type="password"
                              name="password"
                              placeholder="Your password"
                              required autocomplete="current-password"/>

                <x-input-error :messages="$errors->get('password')" class="mt-2"/>
            </div>

            <x-primary-button class="mt-8 w-full bg-bg_color">
                {{ __('Log in') }}
            </x-primary-button>
        </form>
    </x-auth-card>
</x-guest-layout>