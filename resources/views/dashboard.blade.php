<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight ml-2">
            Dashboard
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div
                class="flex bg-secondary overflow-hidden shadow-sm rounded-xl p-6 items-center sm:max-w-fit sm:mx-auto mx-2"
            >
                <img
                    alt="Man"
                    src="https://images.unsplash.com/photo-1600486913747-55e5470d6f40?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
                    class="h-16 w-16 rounded-full object-cover"
                />

                <p class="ms-2 text-left text-lg text-white">
                    <strong class="block font-medium">{{ auth()->user()->name }}</strong>

                    <span> {{ auth()->user()->nik }} </span>
                </p>
            </div>

            <div class="grid grid-cols-2 sm:grid-cols-4 gap-2 gap-y-4 sm:gap-5 sm:space-y-0 mx-2 sm:mx-0 mt-4">
                <x-bladewind.card
                    class="cursor-pointer hover:shadow-gray-300 rounded-xl"
                >
                    <a href="{{ route('biodata.index') }}">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-20 sm:h-32 w-20 sm:w-32 mx-auto rounded-full p-3 bg-black text-white"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="2"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"
                            ></path>
                        </svg>
                        <span class="text-center block font-semibold mt-2 sm:text-2xl"
                            >Biodata</span
                        >
                    </a>
                </x-bladewind.card>
                <x-bladewind.card
                    class="cursor-pointer hover:shadow-gray-300 rounded-xl"
                >
                    <div>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-20 sm:h-32 w-20 sm:w-32 mx-auto rounded-full p-3 bg-orange-600 text-white"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="2"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"
                            ></path>
                        </svg>
                        <span class="text-center block font-semibold mt-2 sm:text-2xl"
                            >Sertifikat</span
                        >
                    </div>
                </x-bladewind.card>
                <x-bladewind.card
                    class="cursor-pointer hover:shadow-gray-300 rounded-xl"
                >
                    <div>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-20 sm:h-32 w-20 sm:w-32 mx-auto rounded-full p-3 bg-red-600 text-white"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="2"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"
                            ></path>
                        </svg>
                        <span class="text-center block font-semibold mt-2 sm:text-2xl"
                            >Status</span
                        >
                    </div>
                </x-bladewind.card>
                <x-bladewind.card
                    class="cursor-pointer hover:shadow-gray-300 rounded-xl"
                >
                    <a href="{{ route('lainnya') }}">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-20 sm:h-32 w-20 sm:w-32 mx-auto rounded-full p-3 bg-cyan-600 text-white"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="2"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"
                            ></path>
                        </svg>
                        <span class="text-center block font-semibold mt-2 sm:text-2xl"
                            >Lainnya</span
                        >
                    </div>
                </x-bladewind.card>
            </div>
        </div>
    </div>
</x-app-layout>
