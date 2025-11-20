<div class="scroll-sidebar" data-simplebar="">
  <nav class="w-full flex flex-col sidebar-nav px-4 mt-5 bg-[#E8F5F7] border-r-4 border-[#1EAEDB]">
    <!-- Background #E8F5F7 with border -->
    <ul id="sidebarnav" class="text-gray-600 text-sm">
      <li class="text-xs font-bold pb-[5px]">
        <i class="ti ti-dots nav-small-cap-icon text-lg hidden text-center"></i>
        <span class="font-pacifico text-3xl">
          <span class="text-[#6BAE75]">Bali</span><span class="text-[#1EAEDB]">Haven</span>
        </span>
      </li>

      <li class="sidebar-item mt-4">
        <a class="flex items-center p-1 text-sm gap-x-2 text-[#6BAE75] font-bold font-playfair-display hover:text-[#1EAEDB]"
          href="{{ route('dashboard') }}">
          <i class="ti ti-layout-dashboard ps-2 text-2xl"></i>
          <span>Dashboard</span>
        </a>
      </li>

      <li class="sidebar-item mt-4">
        <form action="{{ route(name: 'users.index') }}" method="POST" class="flex items-center w-full">
          <a class="flex items-center p-1 text-sm gap-x-2 text-[#6BAE75] font-bold font-playfair-display hover:text-[#1EAEDB]"
            href="{{ route('users.index') }}">
            <i class="ti ti-user ps-2 text-2xl"></i>
            <span>Users</span>
          </a>
        </form>
      </li>

      <li class="sidebar-item mt-4">
        <form action="{{ route(name: 'logout') }}" method="POST" class="flex items-center w-full">
          @csrf
          <button type="submit"
            class="flex items-center bg-[#1EAEDB] text-white px-4 py-2 rounded-3xl font-bold hover:bg-[#6BAE75] transition-colors">
            <i class="fas fa-sign-out-alt text-2xl"></i>
            <span>Sign Out</span>
          </button>
        </form>
      </li>


      
    </ul>
  </nav>
</div>
