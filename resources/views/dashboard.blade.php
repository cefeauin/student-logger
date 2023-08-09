<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>iStudentTrack</title>
</head>
<body>

  <div class="flex h-screen">
    <!-- Sidebar -->
    <aside id="sidebar" class="flex-col bg-white drop-shadow-lg  overflow-x-hidden overflow-y-auto transition-all w-0 lg:w-60">
      <div class="mt-5 mx-6 w-40">
        <img class="w-full mt-1 mb-14" src="{{asset('img/ist_logo.png')}}" alt="">
      </div>

      <div class="bg-darkGray px-6 py-3 mb-4 text-white flex flex-col space-y-2">
        <div>
          <span class="text-sm bg-red rounded-md py-1 px-3">Admin</span>
        </div>
        <span class="text-md">Dela Cruz, Juan M.</span>
      </div>

      <nav>
        <ul class="mx-2 text-darkGray">
          <li class="py-3 px-4 w-full rounded-lg hover:bg-lightGray">
            <a href="#" class="block w-full space-x-2">
              <i class="fa-solid fa-chart-simple"></i>
              <span class="text-sm">Dashboard</span>
            </a>
          </li>
          <li class="py-3 px-4 w-full rounded-lg hover:bg-lightGray">
            <a href="#" class="block w-full space-x-2">
              <i class="fa-solid fa-question"></i>
              <span class="text-sm">Menu 1</span>
            </a>
          </li>
          <li class="py-3 px-4 w-full rounded-lg hover:bg-lightGray">
            <a href="#" class="block w-full space-x-2">
              <i class="fa-solid fa-question"></i>
              <span class="text-sm">Menu 2</span>
            </a>
          </li>
          <li class="py-3 px-4 w-full rounded-lg hover:bg-lightGray">
            <a href="#" class="block w-full space-x-2">
              <i class="fa-solid fa-question"></i>
              <span class="text-sm">Menu 3</span>
            </a>
          </li>
          <li class="py-3 px-4 w-full rounded-lg hover:bg-lightGray">
            <a href="#" class="block w-full space-x-2">
              <i class="fa-solid fa-question"></i>
              <span class="text-sm">Menu 4</span>
            </a>
          </li>
        </ul>
      </nav>
      
    </aside>

    <div class="flex-1 flex flex-col p-0">
      <!-- Header -->
      <header class="bg-green py-4 px-8 z-10">
        <div class="flex items-center justify-between space-x-8">
          <div class="text-white space-x-8">
            <button id="sidebar-btn" class="transition-all focus:outline-none hover:text-gray">
              <i class="fa-solid fa-bars"></i>
            </button>
            <span class="space-x-3">
              <i class="fa-solid fa-chart-simple"></i><span class="font-bold text-lg">Dashboard</span>
            </span>
          </div>

          <div class="text-white space-x-8">
            <button class="transition-all focus:outline-none hover:text-gray">
              <i class="fa-regular fa-bell"></i>
            </button>
            <button class="transition-all focus:outline-none hover:text-gray">
              <i class="fa-regular fa-user"></i>
            </button>
          </div>
        </div>
      </header>
      
      <!-- Main -->
      <main class="flex-1 bg-lightGray p-8 overflow-y-auto">
        
        <!-- Variable content here -->
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam explicabo voluptates tempora, adipisci ratione expedita quo id optio. Voluptate enim reiciendis, tenetur incidunt voluptates reprehenderit distinctio omnis ea magnam error? <br>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam explicabo voluptates tempora, adipisci ratione expedita quo id optio. Voluptate enim reiciendis, tenetur incidunt voluptates reprehenderit distinctio omnis ea magnam error? <br>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam explicabo voluptates tempora, adipisci ratione expedita quo id optio. Voluptate enim reiciendis, tenetur incidunt voluptates reprehenderit distinctio omnis ea magnam error? <br>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam explicabo voluptates tempora, adipisci ratione expedita quo id optio. Voluptate enim reiciendis, tenetur incidunt voluptates reprehenderit distinctio omnis ea magnam error? <br>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam explicabo voluptates tempora, adipisci ratione expedita quo id optio. Voluptate enim reiciendis, tenetur incidunt voluptates reprehenderit distinctio omnis ea magnam error? <br>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam explicabo voluptates tempora, adipisci ratione expedita quo id optio. Voluptate enim reiciendis, tenetur incidunt voluptates reprehenderit distinctio omnis ea magnam error? <br>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam explicabo voluptates tempora, adipisci ratione expedita quo id optio. Voluptate enim reiciendis, tenetur incidunt voluptates reprehenderit distinctio omnis ea magnam error? <br>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam explicabo voluptates tempora, adipisci ratione expedita quo id optio. Voluptate enim reiciendis, tenetur incidunt voluptates reprehenderit distinctio omnis ea magnam error? <br>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam explicabo voluptates tempora, adipisci ratione expedita quo id optio. Voluptate enim reiciendis, tenetur incidunt voluptates reprehenderit distinctio omnis ea magnam error? <br>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam explicabo voluptates tempora, adipisci ratione expedita quo id optio. Voluptate enim reiciendis, tenetur incidunt voluptates reprehenderit distinctio omnis ea magnam error? <br>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam explicabo voluptates tempora, adipisci ratione expedita quo id optio. Voluptate enim reiciendis, tenetur incidunt voluptates reprehenderit distinctio omnis ea magnam error? <br>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam explicabo voluptates tempora, adipisci ratione expedita quo id optio. Voluptate enim reiciendis, tenetur incidunt voluptates reprehenderit distinctio omnis ea magnam error? <br>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam explicabo voluptates tempora, adipisci ratione expedita quo id optio. Voluptate enim reiciendis, tenetur incidunt voluptates reprehenderit distinctio omnis ea magnam error? <br>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam explicabo voluptates tempora, adipisci ratione expedita quo id optio. Voluptate enim reiciendis, tenetur incidunt voluptates reprehenderit distinctio omnis ea magnam error? <br>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam explicabo voluptates tempora, adipisci ratione expedita quo id optio. Voluptate enim reiciendis, tenetur incidunt voluptates reprehenderit distinctio omnis ea magnam error? <br>
        
        <footer class="flex flex-col justify-center items-center mt-24 lg:items-start lg:flex-row lg:justify-between">
          <div class="w-40 lg:w-48">
            <img class="w-full mt-2" src="{{asset('img/ist_logo.png')}}" alt="">
          </div>

          <div class="flex flex-col w-64 mt-10 justify-center items-center lg:items-end lg:mt-0">
            <img class="w-full" src="{{asset('img/pnc_header.png')}}" alt="">
            <span class="text-xs">Student Attendance Management System</span>
          </div>
          
        </footer>
      </main>

    </div>
  </div>

  {{-- make it external script --}}
  <script>
    document.getElementById('sidebar-btn').addEventListener('click', () => {
      const sidebar = document.getElementById('sidebar');

      sidebar.classList.toggle('lg:w-60');
    });
  </script>
</body>
</html>