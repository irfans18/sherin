<?php ?>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('NARASUMBER - Alfian Prisma Yopiangga') }}
        </h2>
    </x-slot>

    <div class="pb-12 pt-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h3 class="mt-6 text-xl">Daftar Peserta</h3>
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
                                            NRP
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
                                            Kelompok
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                            Permintaan Token
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                            Token Diterima
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                            Aksi
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    <tr class="transition-all hover:bg-gray-100 hover:shadow-lg">
                                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">1</td>
                                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">3120600001</td>
                                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">Alfian Prisma Yopiangga</td>
                                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">yopiangga@email.com</td>
                                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">Satria Baja Hitam</td>
                                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">10</td>
                                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">8</td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <button class="px-2 py-1 bg-red-400 text-sm rounded-md text-white">Hapus</button>
                                        </td>
                                    </tr>
                                    <tr class="transition-all hover:bg-gray-100 hover:shadow-lg">
                                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">2</td>
                                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">3120600002</td>
                                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">Alfian Prisma Yopiangga 2</td>
                                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">yopiangga2@email.com</td>
                                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">Satria Baja Hitam</td>
                                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">10</td>
                                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">8</td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <button class="px-2 py-1 bg-red-400 text-sm rounded-md text-white">Hapus</button>
                                        </td>
                                    </tr>
                                    <tr class="transition-all hover:bg-gray-100 hover:shadow-lg">
                                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">3</td>
                                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">3120600003</td>
                                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">Alfian Prisma Yopiangga 3</td>
                                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">yopiangga3@email.com</td>
                                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">Satria Baja Hitam</td>
                                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">10</td>
                                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">8</td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <button class="px-2 py-1 bg-red-400 text-sm rounded-md text-white">Hapus</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
