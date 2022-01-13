<?php ?>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('ADMIN - ' . $username) }}
        </h2>
    </x-slot>

    <div class="pb-12 pt-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h3 class="mt-6 mb-6 text-xl">Daftar Narasumber</h3>
            <a class="px-4 py-2 bg-purple-400 text-sm rounded-md text-white" href="/dashboard/narasumber/tambah-narasumber">Tambah Narasumber</a>
            <div class="flex flex-col mt-6">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                        <div class="overflow-hidden border-b border-gray-200 rounded-md shadow-md">
                            <table class="min-w-full overflow-x-scroll divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col"
                                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                            No
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                            Nama
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                            Email
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                            Jumlah Token
                                        </th>
                                    </tr>
                                </thead>
                                 @isset($narasumber)
                                    @php
                                       $count = 1;
                                    @endphp
                                    <tbody class="bg-white divide-y divide-gray-200">
                                       @foreach ($narasumber as $row)
                                          <tr class="transition-all hover:bg-gray-100 hover:shadow-lg">
                                             <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                                {{ $count++ }}
                                             </td>
                                             <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                                {{ $row['name'] }}
                                             </td>
                                             <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                                {{ $row['email'] }}
                                             </td>
                                             <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                                {{ $row['token'] }}
                                             </td>
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
