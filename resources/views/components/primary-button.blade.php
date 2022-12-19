<button {{ $attributes->merge(['type' => 'submit', 'class' => 'items-center px-4 py-2 border border-transparent rounded-md font-bold text-white uppercase hover:bg-primary  focus:outline-none focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
