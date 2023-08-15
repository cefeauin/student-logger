<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>iStudentTrack</title>
</head>
<body>

  <div class="flex items-center justify-center min-h-screen bg-lightGray">
    <div class="flex flex-col overflow-y-auto px-8 py-5 mb-5">
      <div class="max-w-sm">
        <div class="px-6">
          <img class="max-w-full" src="{{asset('img/pnc_header.png')}}" alt="">
        </div>
      </div>
  
      <x-card class="mt-8">
        <x-card.card-section class="flex flex-col items-center">
          <div class="px-12 pt-5">
            <img class="max-w-full" src="{{asset('img/ist_logo.png')}}" alt="">
          </div>
          <span class="text-sm text-center font-bold text-green pt-2">Student Centralized Logging System</span>
        </x-card.card-section>
  
        <x-card.card-section class="flex flex-col ps-14 pe-14 pt-2 space-y-4">
          <x-card shadow="shadow-none">
            <x-card.card-section class="flex flex-col items-center" bgColor="bg-veryLightGreen">
              <span class="text-sm text-center text-darkGreen font-bold">PARENT & GUARDIAN LOGIN</span>
            </x-card.card-section>
          </x-card>

          <form action="#" method="" class="flex flex-col space-y-4">
            @csrf
            <x-input-group>
              <x-input type="text" placeholder="Username">
                <x-slot name="leftIcon">
                  <i class="fa-solid fa-user"></i>
                </x-slot>
              </x-input>
            </x-input-group>
  
            <x-input-group>
              <x-input type="password" placeholder="Password">
                <x-slot name="leftIcon">
                  <i class="fa-solid fa-lock"></i>
                </x-slot>
              </x-input>
            </x-input-group>
  
            <span class="flex justify-end font-bold text-green text-sm transition-all hover:text-darkGreen">
              <a href="#">Forgot Password?</a>
            </span>
  
            <div class="flex justify-center pb-5">
              <x-button>
                LOGIN
              </x-button>
            </div>
          </form>
        </x-card.card-section>
      </x-card>
    </div>
  </div>

</body>
</html>