<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Biodata
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <section>
                        <header>
                            <h2 class="text-lg font-medium text-gray-900">
                                Isi Data
                            </h2>

                            <p class="mt-1 text-sm text-red-600">
                                * Wajib diisi
                            </p>
                        </header>

                        <form method="post" action="{{ route('biodata.store') }}" class="mt-6 space-y-6">
                            @csrf
                            @method('patch')

                            <div>
                                <x-input-label for="name" value="Nama *" />
                                <x-text-input id="name" name="name" type="text" class="mt-1 block w-full"
                                    required autofocus autocomplete="name" />
                                <x-input-error class="mt-2" :messages="$errors->get('name')" />
                            </div>

                            <div>
                                <x-input-label for="address" value="Alamat *" />
                                <x-textarea id="address" name="address" rows="3" class="mt-1"
                                    required autocomplete="address" />
                                <x-input-error class="mt-2" :messages="$errors->get('address')" />
                            </div>


                            <div>
                                <x-input-label for="email" value="Email *" />
                                <x-text-input id="email" name="email" type="email" class="mt-1 block w-full"
                                    required autocomplete="username" />
                                <x-input-error class="mt-2" :messages="$errors->get('email')" />
                            </div>

                            <div>
                                <x-input-label for="activity" value="Kegiatan yang diikuti *" />
                                <x-textarea id="activity" name="activity" rows="3" class="mt-1"
                                    required autocomplete="activity" />
                                <x-input-error class="mt-2" :messages="$errors->get('activity')" />
                            </div>

                            <div class="flex items-center gap-4">
                                <x-button>{{ __('Save') }}</x-button>

                                @if (session('status') === 'profile-updated')
                                    <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                                        class="text-sm text-gray-600">{{ __('Saved.') }}</p>
                                @endif
                            </div>
                        </form>
                    </section>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
