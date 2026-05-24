<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-3 bg-red-600 border border-transparent rounded-md font-bold text-xs text-white uppercase tracking-widest shadow-md hover:bg-red-700 focus:bg-red-700 active:bg-red-900 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150 justify-center w-full sm:w-auto']) }}>
    {{ $slot }}
</button>
