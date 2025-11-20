<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-[#1EAEDB] border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-[#1995C1] focus:bg-[#1995C1] active:bg-[#166B94] focus:outline-none focus:ring-2 focus:ring-[#1EAEDB] focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
