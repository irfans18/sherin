<?php ?>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('ADMIN - ' . $username) }}
        </h2>
    </x-slot>

    <div class="pt-12 pb-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-4">
                <div class="p-4 transition-shadow border rounded-lg shadow-sm hover:shadow-lg">
                    <div class="flex items-start justify-between">
                        <div class="flex flex-col space-y-2">
                            <span class="text-gray-400">Total Peserta</span>
                            <span class="text-lg font-semibold"> {{ $user['peserta'] }} Peserta</span>
                        </div>
                        <div class="p-10 bg-gray-200 rounded-md"></div>
                    </div>
                    <div>
                        <span class="inline-block px-2 text-sm text-white bg-green-300 rounded">
                           @if ( $user['total'] > 0 )
                              {{ round((float)($user['peserta']/$user['total']) * 100 ) . '%' }} 
                           @else
                              {{ round((float)($user['peserta']/1) * 100 ) . '%' }} 
                           @endif   
                        </span>
                        <span>dari {{ $user['total'] }} Pengguna</span>
                    </div>
                </div>
                <div class="p-4 transition-shadow border rounded-lg shadow-sm hover:shadow-lg">
                    <div class="flex items-start justify-between">
                        <div class="flex flex-col space-y-2">
                            <span class="text-gray-400">Total Narasumber</span>
                            <span class="text-lg font-semibold"> {{ $user['narasumber'] }} Narasumber</span>
                        </div>
                        <div class="p-10 bg-gray-200 rounded-md"></div>
                    </div>
                    <div>
                     <span class="inline-block px-2 text-sm text-white bg-green-300 rounded">
                        @if ( $user['total'] > 0 )
                           {{ round((float)($user['narasumber']/$user['total']) * 100 ) . '%' }} 
                        @else
                           {{ round((float)($user['narasumber']/1) * 100 ) . '%' }} 
                        @endif   
                     </span>
                     <span>dari {{ $user['total'] }} Pengguna</span>
                    </div>
                </div>
                <div class="p-4 transition-shadow border rounded-lg shadow-sm hover:shadow-lg">
                    <div class="flex items-start justify-between">
                        <div class="flex flex-col space-y-2">
                            <span class="text-gray-400">Total Token</span>
                            <span class="text-lg font-semibold"> {{ $token['total'] }} Token</span>
                        </div>
                        <div class="p-10 bg-gray-200 rounded-md"></div>
                    </div>
                    <div>
                        <span class="inline-block px-2 text-sm text-white bg-green-300 rounded"> {{ $token['today'] }} token</span>
                        <span>dibuat hari ini</span>
                    </div>
                </div>
                <div class="p-4 transition-shadow border rounded-lg shadow-sm hover:shadow-lg">
                    <div class="flex items-start justify-between">
                        <div class="flex flex-col space-y-2">
                            <span class="text-gray-400">Total Request</span>
                            <span class="text-lg font-semibold"> {{ $request['total'] }} Request</span>
                        </div>
                        <div class="p-10 bg-gray-200 rounded-md"></div>
                    </div>
                    <div>
                        <span class="inline-block px-2 text-sm text-white bg-green-300 rounded"> {{ $request['today'] }} Request</span>
                        <span>dibuat hari ini</span>
                    </div>
                </div>
                <div class="p-4 transition-shadow border rounded-lg shadow-sm hover:shadow-lg">
                    <div class="flex items-start justify-between">
                        <div class="flex flex-col space-y-2">
                            <span class="text-gray-400">Request disetujui</span>
                            <span class="text-lg font-semibold"> {{ $request['acc'] }} Permintaan</span>
                        </div>
                        <div class="p-10 bg-gray-200 rounded-md"></div>
                    </div>
                    <div>
                        <span class="inline-block px-2 text-sm text-white bg-green-300 rounded">
                           @if ( $request['total'] > 0 )
                              {{ round((float)($request['acc']/$request['total']) * 100 ) . '%' }} 
                           @else
                              {{ round((float)($request['acc']/1) * 100 ) . '%' }} 
                           @endif   
                        </span>
                        <span>dari {{ $request['total'] }} Permintaan</span>
                    </div>
                </div>
                <div class="p-4 transition-shadow border rounded-lg shadow-sm hover:shadow-lg">
                    <div class="flex items-start justify-between">
                        <div class="flex flex-col space-y-2">
                            <span class="text-gray-400">Request ditolak</span>
                            <span class="text-lg font-semibold"> {{ $request['deny'] }} Permintaan</span>
                        </div>
                        <div class="p-10 bg-gray-200 rounded-md"></div>
                    </div>
                    <div>
                        <span class="inline-block px-2 text-sm text-white bg-red-300 rounded">
                           @if ( $request['total'] > 0 )
                              {{ round((float)($request['deny']/$request['total']) * 100 ) . '%' }} 
                           @else
                              {{ round((float)($request['deny']/1) * 100 ) . '%' }} 
                           @endif   
                        </span>
                        <span>dari {{ $request['total'] }} Permintaan</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
