<aside id="sidebar" class="flex-col bg-white drop-shadow-lg overflow-x-hidden overflow-y-auto transition-all w-0 lg:w-60">
  <div id="sidebar-header" class="sticky top-0 pt-1 pb-14 bg-white">
    <div class="mt-2 mx-3 w-40 hidden-logo hidden">
      <a href="/dashboard"><img class="h-10 w-10 " src="{{asset('img/pnc_logo.png')}}" alt=""></a>
    </div>
    <div class="mt-5 mx-6 w-40 hidden-logo">
      <a href="/dashboard"><img class="w-full hidden-logo" src="{{asset('img/ist_logo.png')}}" alt=""></a>
    </div>
  </div>  

  <div id="sidebar-subheader" class="bg-darkGray px-6 py-3 mb-2 text-white flex flex-col space-y-2">
    <span>
      <x-badge>Admin</x-badge>
    </span>
    <span class="text-sm">De Guzman, Alexandrina Eleanor M.</span>
  </div>

  <nav class="flex flex-col mx-2 text-darkGray">
    <a href="#dashboard" class="rounded-lg transition-all hover:bg-lightGray">
      <div class="py-3 px-4 w-full flex space-x-2">
        <span class="w-6">
          <i class="fa-solid fa-chart-simple"></i>
        </span>
        <span class="flex items-center">
          <span class="navitem-title text-sm">Dashboard</span>
        </span>
      </div>
    </a>
    <a href="#" class="rounded-lg transition-all hover:bg-lightGray">
      <div class="py-3 px-4 w-full flex space-x-2">
        <span class="w-6">
          <i class="fa-solid fa-user-graduate"></i>
        </span>
        <span class="flex items-center">
          <span class="navitem-title text-sm">Students</span>
        </span>
      </div>
    </a>
    <a href="#" class="rounded-lg transition-all hover:bg-lightGray">
      <div class="py-3 px-4 w-full flex space-x-2">
        <span class="w-6">
          <i class="fa-solid fa-clock fa-sm"></i>
        </span>
        <span class="flex items-center">
          <span class="navitem-title text-sm">Attendance</span>
        </span>
      </div>
    </a>
    <a href="#" class="rounded-lg transition-all hover:bg-lightGray">
      <div class="py-3 px-4 w-full flex space-x-2">
        <span class="w-6">
          <i class="fa-solid fa-user-large fa-sm"></i>
        </span>
        <span class="flex items-center">
          <span class="navitem-title text-sm">Users</span>
        </span>
      </div>
    </a>
    <a href="#" class="rounded-lg transition-all hover:bg-lightGray">
      <div class="py-3 px-4 w-full flex space-x-2">
        <span class="w-6">
          <i class="fa-solid fa-clipboard-list"></i>
        </span>
        <span class="flex items-center">
          <span class="navitem-title text-sm">Audit Log</span>
        </span>
      </div>
    </a>
    <a href="#" class="rounded-lg transition-all hover:bg-lightGray">
      <div class="py-3 px-4 w-full flex space-x-2">
        <span class="w-6">
          <i class="fa-solid fa-hard-drive fa-sm"></i>
        </span>
        <span class="flex items-center">
          <span class="navitem-title text-sm">Backup</span>
        </span>
      </div>
    </a>
  </nav>
</aside>

{{-- Use Laravel Mix for assets --}}
@push('scripts')
  <script src="{{ asset('js/sidebar.js') }}"></script>
@endpush