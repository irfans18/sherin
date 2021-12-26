<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
      
      <title> {{ env('APP_NAME') }} </title>
   
      <style>
         .bg-ob{
            background-image: url('assets/bg.png');
            background-attachment: fixed;
            background-position: inherit; 
            background-size: cover;
            background-repeat: no-repeat;
         }
      </style>
      <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-ob">
   <div>
      <div class="flex justify-center my-12">
         <img class="w-32 md:w-60 mt-3"
            src="{{ url('assets/logo/dynamic.png') }}" alt="dynamic">
      </div>

      <div class="flex justify-center">
         <p class="py-6 px-8 text-xl md:text-3xl text-white text-center font-bold border-white border-4 rounded-full bg-transparent">
            Selamat Datang di <br>
            Dynamic Online Bounding 2021
         </p>
      </div>

      <div class="flex justify-center my-6">

         @if (Route::has('login'))
               {{-- <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block"> --}}
                  @auth
                     <a href="{{ url('/dashboard') }}" class="text-white text-2xl bg-blue-700 rounded-full py-1 px-8 mx-3">
                        Dashboard
                     </a>
                  @else
                  <a class="text-white text-2xl bg-blue-700 rounded-full py-1 px-8 mx-3"
                     href="{{ route('login') }}">Masuk</a>

                     @if (Route::has('register'))
                     <a class="text-white text-2xl bg-blue-700 rounded-full py-1 px-8 mx-3"
                     href="{{ route('login') }}">Daftar</a>
                     @endif
                  @endauth
               {{-- </div> --}}
         @endif
      </div>


         
         

      <div class="flex justify-center flex-nowrap my-6">
         <div class="px-6 max-h-24 bg-white rounded-full flex">
            <img class="w-10 md:w-24 my-2 mr-2"
            src="{{ url('assets/logo/pens.png') }}" alt="dynamic">
            <img class="w-10 md:w-24 my-2 ml-2"
            src="{{ url('assets/logo/himit.png') }}" alt="dynamic">
         </div>
      </div>
      
   </div>
</body>

</html>
