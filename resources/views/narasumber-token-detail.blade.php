<?php ?>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
         {{ __('NARASUMBER - '. $username) }}
        </h2>
    </x-slot>

    <div class="pt-12 pb-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-5 mt-2 sm:grid-cols-2 lg:grid-cols-2">
                <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-2">
                    <div class="p-4 transition-shadow border rounded-lg shadow-sm hover:shadow-lg">
                        <div class="flex items-start justify-between">
                            <div class="flex flex-col space-y-2">
                                <span class="text-gray-400">Total Diterima</span>
                                <span class="text-lg font-semibold"> {{ $request_acc }} Permintaan</span>
                            </div>
                            <div class="p-10 bg-gray-200 rounded-md"></div>
                        </div>
                        <div>
                           <span class="inline-block px-2 text-sm text-white bg-green-300 rounded"> 
                              @if ($total_request > 0)
                                 {{ round((float)($request_acc/$total_request)  * 100 ) . '%' }} 
                              @else
                                 {{ round((float)($request_acc/1)  * 100 ) . '%' }} 
                              @endif
                           </span>
                            <span>dari {{ $total_request }}</span>
                        </div>
                    </div>
                    <div class="p-4 transition-shadow border rounded-lg shadow-sm hover:shadow-lg">
                        <div class="flex items-start justify-between">
                            <div class="flex flex-col space-y-2">
                                <span class="text-gray-400">Total Ditolak</span>
                                <span class="text-lg font-semibold"> {{ $request_deny }} Permintaan</span>
                            </div>
                            <div class="p-10 bg-gray-200 rounded-md"></div>
                        </div>
                        <div>
                           <span class="inline-block px-2 text-sm text-white bg-red-300 rounded"> 
                              @if ($total_request > 0)
                                 {{ round((float)($request_deny/$total_request) * 100 ) . '%' }} 
                              @else
                                 {{ round((float)($request_deny/1)  * 100 ) . '%' }} 
                              @endif
                           </span>
                           <span>dari {{ $total_request }}</span>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="w-full transition-shadow border shadow-sm hover:shadow-lg rounded-lg px-4 pt-2">
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <h2 class="px-4 pt-3 pb-2 text-gray-800 text-lg">Token yang anda bagikan</h2>
                            <div class="w-full md:w-full px-3 mb-2 mt-2">
                                <input
                                    class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-9 py-2 px-3 font-medium placeholder-gray-600 focus:outline-none focus:bg-transparent"
                                    name="body" value=" {{ $token_code }} "
                                    readonly />
                            </div>
                            <div class="w-full md:w-full flex items-start px-3">
                                <div class="flex items-start w-1/2 text-gray-700 px-2 mr-auto">
                                    <svg fill="none" class="w-5 h-5 text-gray-600 mr-1" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <p class="text-xs md:text-sm pt-px">Bagikan token pada peserta</p>
                                </div>
                                {{-- <div class="-mr-1">
                                    <input type='button'
                                        class="bg-green-300 text-white font-medium py-1 px-4 border border-green-400 rounded-lg tracking-wide mr-1 hover:bg-green-400 cursor-pointer"
                                        value='Copy'>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="pb-12 pt-6">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h3 class="mt-6 text-xl">Daftar Permintaan</h3>
                <div class="flex flex-col mt-6">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                            <div class="overflow-hidden border-b border-gray-200 rounded-md shadow-md">
                                <table class="min-w-full overflow-x-scroll divide-y divide-gray-200">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th scope="col"
                                                class="px-3 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                                No
                                            </th>
                                            <th scope="col"
                                                class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                                Nama
                                            </th>
                                            <th scope="col"
                                                class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                                Waktu Permintaan
                                            </th>
                                            <th scope="col"
                                                class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                                Status
                                            </th>
                                            <th scope="col"
                                                class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                                Aksi
                                            </th>

                                        </tr>
                                    </thead>
                                    @isset($requests)
                                       <tbody class="bg-white divide-y divide-gray-200">
                                          @php
                                                $count = 0;
                                          @endphp
                                          @foreach ($requests as $row)
                                             @php  
                                                $count++;
                                             @endphp
                                          
                                             <tr class="transition-all hover:bg-gray-100 hover:shadow-lg">
                                                <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                                   {{ $count++}}
                                                </td>
                                                <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                                   {{ $row['username'] }}
                                                </td>
                                                <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                                   {{ ( new DateTime($row['created_at']) )->format('d F Y, h:i:s A') }}
                                                </td>
                                                <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                                   <span
                                                      class="inline-flex px-2 text-xs font-semibold leading-5 rounded-full
                                                      @if ($row['status'] == 0)
                                                      text-yellow-800 bg-yellow-100 
                                                      @elseif ($row['status'] == 1)
                                                      text-green-800 bg-green-100 
                                                      @else
                                                      text-red-800 bg-red-100 
                                                      @endif
                                                      ">
                                                      {{ $row['status_name'] }}
                                                   </span>
                                                </td>
                                                @if ($row['status'] > 0)
                                                   <td class="px-6 py-4 whitespace-nowrap">-</td>
                                                @else
                                                   <td class="px-6 py-4 whitespace-nowrap">
                                                      <a href="/narasumber/{{ $row['token_id'] }}/accept/{{ $row['id'] }}"
                                                      class="px-2 py-1 bg-green-400 text-sm rounded-md text-white">Terima</a>
                                                      
                                                      <a href="/narasumber/{{ $row['token_id'] }}/deny/{{ $row['id'] }}"
                                                      class="px-2 py-1 bg-red-400 text-sm rounded-md text-white">Tolak</a>
                                                   </td>
                                                @endif
                                                
                                             </tr>
                                          @endforeach
                                       </tbody>
                                    @endisset

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>
