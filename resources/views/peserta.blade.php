<?php ?>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('PESERTA - Alfian Prisma Yopiangga - Puntadewa') }}
        </h2>
    </x-slot>

    {{-- <div class="pt-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Peserta - Alfian Prisma Yopiangga - Kelompok Borobudur
                </div>
            </div>
        </div>
    </div> --}}

    <div class="pt-12 pb-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-5 mt-2 sm:grid-cols-2 lg:grid-cols-2">
                <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-2">
                    <div class="p-4 transition-shadow border rounded-lg shadow-sm hover:shadow-lg">
                        <div class="flex items-start justify-between">
                            <div class="flex flex-col space-y-2">
                                <span class="text-gray-400">Total Diterima</span>
                                <span class="text-lg font-semibold">8 Token</span>
                            </div>
                            <div class="p-10 bg-gray-200 rounded-md"></div>
                        </div>
                        <div>
                            <span class="inline-block px-2 text-sm text-white bg-green-300 rounded">80%</span>
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
                </div>
                <div>
                    <form
                        class="w-full transition-shadow border shadow-sm hover:shadow-lg rounded-lg px-4 pt-2">
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <h2 class="px-4 pt-3 pb-2 text-gray-800 text-lg">Submit token narasumber</h2>
                            <div class="w-full md:w-full px-3 mb-2 mt-2">
                                <input
                                    class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-9 py-2 px-3 font-medium placeholder-gray-600 focus:outline-none focus:bg-transparent"
                                    name="body" placeholder='Token yang anda miliki' required />
                            </div>
                            <div class="w-full md:w-full flex items-start md:w-full px-3">
                                <div class="flex items-start w-1/2 text-gray-700 px-2 mr-auto">
                                    <svg fill="none" class="w-5 h-5 text-gray-600 mr-1" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <p class="text-xs md:text-sm pt-px">Token hanya dapat digunakan sekali</p>
                                </div>
                                <div class="-mr-1">
                                    <input type='submit'
                                        class="bg-green-300 text-white font-medium py-1 px-4 border border-green-400 rounded-lg tracking-wide mr-1 hover:bg-green-400 cursor-pointer"
                                        value='Kirim'>
                                </div>
                            </div>
                    </form>
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
                                            Narasumber
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                            Token
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                            Waktu Kirim
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                            Status
                                        </th>

                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    <tr class="transition-all hover:bg-gray-100 hover:shadow-lg">
                                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">1</td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">Alfian Prisma Yopiangga</div>
                                            <div class="text-sm text-gray-500">yopiangga@email.com</div>
                                        </td>
                                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                            $2y$10$4iHhbLjdwOFVB1f.ETPjo.UX.AiSTC3rNn4VwSmpnkPBSu2KatItq</td>
                                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">19:30 - 24
                                            Desember 2021</td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span
                                                class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full">
                                                Diterima
                                            </span>
                                        </td>

                                    </tr>
                                    <tr class="transition-all hover:bg-gray-100 hover:shadow-lg">
                                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">2</td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">Alfian Prisma Yopiangga</div>
                                            <div class="text-sm text-gray-500">yopiangga@email.com</div>
                                        </td>
                                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                            $2y$10$4iHhbLjdwOFVB1f.ETPjo.UX.AiSTC3rNn4VwSmpnkPBSu2KatItq</td>
                                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">19:30 - 24
                                            Desember 2021</td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span
                                                class="inline-flex px-2 text-xs font-semibold leading-5 text-yellow-800 bg-yellow-100 rounded-full">
                                                Menunggu
                                            </span>
                                        </td>

                                    </tr>
                                    <tr class="transition-all hover:bg-gray-100 hover:shadow-lg">
                                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">3</td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">Alfian Prisma Yopiangga</div>
                                            <div class="text-sm text-gray-500">yopiangga@email.com</div>
                                        </td>
                                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                            $2y$10$4iHhbLjdwOFVB1f.ETPjo.UX.AiSTC3rNn4VwSmpnkPBSu2KatItq</td>
                                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">19:30 - 24
                                            Desember 2021</td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span
                                                class="inline-flex px-2 text-xs font-semibold leading-5 text-red-800 bg-red-100 rounded-full">
                                                Ditolak
                                            </span>
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
