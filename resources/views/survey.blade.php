<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Survey
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <x-bladewind.card>

                <x-bladewind.list-view class="bg-secondary">

                    <x-bladewind.list-item>
                        <div class="ml-3">
                            <div class="text-lg font-medium text-slate-900">
                                1. Apa yang anda rasakan setelah vaksin sinovac?
                            </div>
                        </div>
                    </x-bladewind.list-item>
                    <x-bladewind.list-item>
                        <div class="ml-3">
                            <div class="text-lg font-medium text-slate-900">
                                2. Apa anda merasa lemas setelah vaksin?
                            </div>
                        </div>
                    </x-bladewind.list-item>
                    <x-bladewind.list-item>
                        <div class="ml-3">
                            <div class="text-lg font-medium text-slate-900">
                                3. Apakah anda merasa pusing setelah melakukan vaksin?
                            </div>
                        </div>
                    </x-bladewind.list-item>
                    <x-bladewind.list-item>
                        <div class="ml-3">
                            <div class="text-lg font-medium text-slate-900">
                                4. Apakah anda merasa demam setelah melakukan vaksin?
                            </div>
                        </div>
                    </x-bladewind.list-item>
                    <x-bladewind.list-item>
                        <div class="ml-3">
                            <div class="text-lg font-medium text-slate-900">
                                5. Apakah anda muntah setelah melakukan vaksin
                            </div>
                        </div>
                    </x-bladewind.list-item>

                </x-bladewind.list-view>

            </x-bladewind.card>
        </div>
    </div>
</x-app-layout>
