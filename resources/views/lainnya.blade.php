<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Lainnya
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="grid grid-cols-1 gap-3">

                <x-bladewind.card reduce_padding="true">
                    <div class="flex items-center">
                        <div class="inline-block overflow-hidden w-20 h-auto">
                            <img src="{{ asset('assets/images/1.png') }}" alt="" class="object-cover">
                        </div>
                        <div class="grow pl-2 pt-1">
                            <h2 class="font-semibold text-xl">Panduan</h2>
                            <p>Panduan Penggunaan</p>
                        </div>
                        <div>
                            <a href="">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="w-5 h-5">
                                    <path fill-rule="evenodd"
                                        d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </x-bladewind.card>
                <x-bladewind.card reduce_padding="true">
                    <a href="https://diskominfo.semarangkota.go.id/kontak" class="flex items-center">
                        <div class="inline-block overflow-hidden w-20 h-auto justify-items-center">
                            <img src="{{ asset('assets/images/2.png') }}" alt="" class="object-cover h-16 w-auto">
                        </div>
                        <div class="grow pl-2 pt-1">
                            <h2 class="font-semibold text-xl">Bantuan</h2>
                            <p>Hubungi Kami</p>
                        </div>
                        <div>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="w-5 h-5">
                                    <path fill-rule="evenodd"
                                        d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span>
                        </div>
                    </a>
                </x-bladewind.card>
                <x-bladewind.card reduce_padding="true">
                    <a href="https://diskominfo.semarangkota.go.id/page/detail/1" class="flex items-center">
                        <div class="inline-block overflow-hidden w-20 h-auto">
                            <img src="{{ asset('assets/images/3.png') }}" alt="" class="object-cover h-16 w-auto">
                        </div>
                        <div class="grow pl-2 pt-1">
                            <h2 class="font-semibold text-xl">Tentang Kami</h2>
                            <p>Panduan Penyuluhan</p>
                        </div>
                        <div>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="w-5 h-5">
                                    <path fill-rule="evenodd"
                                        d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span>
                        </div>
                    </a>
                </x-bladewind.card>
            </div>
        </div>
</x-app-layout>
