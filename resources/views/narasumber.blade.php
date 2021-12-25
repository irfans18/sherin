<?php ?>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('NARASUMBER - Alfian Prisma Yopiangga') }}
        </h2>
    </x-slot>

    <div class="pt-12 pb-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-4">
                <div class="p-4 transition-shadow border rounded-lg shadow-sm hover:shadow-lg">
                    <div class="flex items-start justify-between">
                        <div class="flex flex-col space-y-2">
                            <span class="text-gray-400">Total Token</span>
                            <span class="text-lg font-semibold">10 Token</span>
                        </div>
                        <div class="p-10 bg-gray-200 rounded-md"></div>
                    </div>
                    <div>
                        <span class="inline-block px-2 text-sm text-white bg-green-300 rounded">10%</span>
                        <span>dari 100</span>
                    </div>
                </div>
                <div class="p-4 transition-shadow border rounded-lg shadow-sm hover:shadow-lg">
                    <div class="flex items-start justify-between">
                        <div class="flex flex-col space-y-2">
                            <span class="text-gray-400">Total Disetujui</span>
                            <span class="text-lg font-semibold">2 Token</span>
                        </div>
                        <div class="p-10 bg-gray-200 rounded-md"></div>
                    </div>
                    <div>
                        <span class="inline-block px-2 text-sm text-white bg-green-300 rounded">20%</span>
                        <span>dari 10</span>
                    </div>
                </div>
                <div class="p-4 transition-shadow border rounded-lg shadow-sm hover:shadow-lg">
                    <div class="flex items-start justify-between">
                        <div class="flex flex-col space-y-2">
                            <span class="text-gray-400">Total Ditolak</span>
                            <span class="text-lg font-semibold">2 Token</span>
                        </div>
                        <div class="p-10 bg-gray-200 rounded-md"></div>
                    </div>
                    <div>
                        <span class="inline-block px-2 text-sm text-white bg-red-300 rounded">20%</span>
                        <span>dari 10</span>
                    </div>
                </div>
                <div class="p-4 transition-shadow border rounded-lg shadow-sm hover:shadow-lg">
                    <div class="flex items-start justify-start">
                        <div class="flex space-x-6 items-center">
                            <img src="https://i.pinimg.com/originals/25/0c/a0/250ca0295215879bd0d53e3a58fa1289.png"
                                class="w-auto h-24 rounded-lg" />
                            <div>
                                <p class="font-semibold text-base">Buat Baru</p>
                                <p class="font-semibold text-sm text-gray-400 mb-2">Token Peserta</p>
                                <input type='button'
                                    class="bg-green-300 text-white font-medium py-1 px-4 border border-green-400 rounded-lg tracking-wide mr-1 hover:bg-green-400 cursor-pointer"
                                    value='Generate'>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="pb-12 pt-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h3 class="mt-6 text-xl">Daftar Token</h3>
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
                                            Token
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                            Permintaan
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                            Waktu Dibuat
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
                                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                            $2y$10$4iHhbLjdwOFVB1f.ETPjo.UX.AiSTC3rNn4VwSmpnkPBSu2KatItq</td>
                                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">10</td>
                                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">19:30 - 24
                                            Desember 2021</td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <button class="px-2 py-1 bg-purple-400 text-sm rounded-md text-white">Copy</button>
                                            <button class="px-2 py-1 bg-blue-400 text-sm rounded-md text-white">Detail</button>
                                            <button class="px-2 py-1 bg-red-400 text-sm rounded-md text-white">Hapus</button>
                                        </td>
                                    </tr>
                                    <tr class="transition-all hover:bg-gray-100 hover:shadow-lg">
                                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">2</td>
                                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                            $2y$10$4iHhbLjdwOFVB1f.ETPjo.UX.AiSTC3rNn4VwSmpnkPBSu2KatItq</td>
                                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">10</td>
                                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">19:30 - 24
                                            Desember 2021</td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <button class="px-2 py-1 bg-purple-400 text-sm rounded-md text-white">Copy</button>
                                            <button class="px-2 py-1 bg-blue-400 text-sm rounded-md text-white">Detail</button>
                                            <button class="px-2 py-1 bg-red-400 text-sm rounded-md text-white">Hapus</button>
                                        </td>
                                    </tr>
                                    <tr class="transition-all hover:bg-gray-100 hover:shadow-lg">
                                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">3</td>
                                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                            $2y$10$4iHhbLjdwOFVB1f.ETPjo.UX.AiSTC3rNn4VwSmpnkPBSu2KatItq</td>
                                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">10</td>
                                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">19:30 - 24
                                            Desember 2021</td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <button class="px-2 py-1 bg-purple-400 text-sm rounded-md text-white">Copy</button>
                                            <button class="px-2 py-1 bg-blue-400 text-sm rounded-md text-white">Detail</button>
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