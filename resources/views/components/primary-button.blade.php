<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-[#003F7D] border border-transparent rounded-md font-semibold text-sm text-white uppercase tracking-widest hover:bg-[#003F7D] focus:bg-[#003F7D] active:bg-[#003F7D] focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
