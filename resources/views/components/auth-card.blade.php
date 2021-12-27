<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
    <div class="mt-6">
        {{ $logo }}
    </div>

   <div class="py-12 w-full sm:max-w-md">
      <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
         {{ $slot }}
      </div>
   </div>
</div>
