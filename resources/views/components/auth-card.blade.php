<div class="min-h-screen sm:justify-center flex  items-center sm:pt-0 relative">
    <div class="flex flex-col items-center w-full">
        <div class=" p-4">
            {{ $logo }}
        </div>

        <div class="w-full sm:max-w-md mt-6 p-8 transparent_bg shadow-md overflow-hidden sm:rounded-3xl text-lg">
            {{ $slot }}
        </div>
    </div>

    <div class="w-full absolute bottom-0 z-[-1] h-full flex overflow-hidden">
        <img src="{{ asset('svg/login.svg') }}" class="absolute min-w-full max-w-none max-h-[50%] right-0 bottom-0" alt="login-wave-svg"/>
    </div>
</div>
