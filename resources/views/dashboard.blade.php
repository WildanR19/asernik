<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight ml-2">
            Dashboard
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div
                class="flex bg-secondary overflow-hidden shadow-sm rounded-xl p-6 items-center sm:max-w-fit sm:mx-auto mx-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="h-16 w-16 rounded-full object-cover">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>


                <p class="ms-2 text-left text-lg">
                    <strong class="block font-semibold text-xl">{{ auth()->user()->name }}</strong>

                    <span class="text-lg"> {{ auth()->user()->email }} </span>
                </p>
            </div>

            <div class="grid grid-cols-2 sm:grid-cols-4 gap-1 gap-y-4 sm:gap-5 sm:space-y-0 mx-2 sm:mx-0 mt-4">
                <x-bladewind.card class="cursor-pointer hover:shadow-gray-300 rounded-xl">
                    <a href="{{ route('biodata.index') }}">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="h-20 sm:h-32 w-20 sm:w-32 mx-auto rounded-full p-3 bg-black text-white"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01">
                            </path>
                        </svg>
                        <span class="text-center block font-semibold mt-2 sm:text-2xl">Biodata</span>
                    </a>
                </x-bladewind.card>
                <x-bladewind.card class="cursor-pointer hover:shadow-gray-300 rounded-xl">
                    <a href="{{ route('sertifikat.index') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            class="h-20 sm:h-32 w-20 sm:w-32 mx-auto rounded-full p-3 bg-orange-600 text-white"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z" />
                        </svg>

                        <span class="text-center block font-semibold mt-2 sm:text-2xl">Sertifikat</span>
                    </a>
                </x-bladewind.card>
                <x-bladewind.card class="cursor-pointer hover:shadow-gray-300 rounded-xl">
                    <a href="{{ route('survey.index') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor"
                            class="h-20 sm:h-32 w-20 sm:w-32 mx-auto rounded-full p-3 bg-red-600 text-white">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z" />
                        </svg>


                        <span class="text-center block font-semibold mt-2 sm:text-2xl">Survey</span>
                    </a>
                </x-bladewind.card>
                <x-bladewind.card class="cursor-pointer hover:shadow-gray-300 rounded-xl">
                    <a href="{{ route('lainnya') }}">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="h-20 sm:h-32 w-20 sm:w-32 mx-auto rounded-full p-3 bg-cyan-600 text-white"
                            fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M8.625 12a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span class="text-center block font-semibold mt-2 sm:text-2xl">Lainnya</span>
                    </a>
                </x-bladewind.card>
            </div>
        </div>
    </div>
</x-app-layout>
