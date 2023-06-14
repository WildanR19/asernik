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

                        <form method="post" action="{{ route('biodata.store') }}" class="mt-6 space-y-6" id="bioForm">
                            @csrf
                            @method('post')

                            <div>
                                <x-input-label for="nama" value="Nama *" />
                                <x-text-input id="nama" name="nama" type="text" class="mt-1 block w-full"
                                    required autofocus autocomplete="nama" />
                                <x-input-error class="mt-2" :messages="$errors->get('nama')" />
                            </div>

                            <div>
                                <x-input-label for="nik" value="NIK *" />
                                <x-text-input id="nik" name="nik" type="text" class="mt-1 block w-full"
                                    required autocomplete="nik" />
                                <x-input-error class="mt-2" :messages="$errors->get('nik')" />
                            </div>

                            <div>
                                <x-input-label for="alamat" value="Alamat *" />
                                <x-textarea id="alamat" name="alamat" rows="3" class="mt-1" required
                                    autocomplete="alamat" />
                                <x-input-error class="mt-2" :messages="$errors->get('alamat')" />
                            </div>

                            <div>
                                <x-input-label for="tgl_lahir" value="Tanggal Lahir *" />
                                <x-text-input id="tgl_lahir" name="tgl_lahir" type="date" onfocus="this.showPicker()" class="mt-1 block w-full"
                                    required autocomplete="tgl_lahir" />
                                <x-input-error class="mt-2" :messages="$errors->get('tgl_lahir')" />
                            </div>

                            <div>
                                <x-input-label for="vaksin" value="Jenis Vaksin yang diikuti *" />
                                <x-text-input id="vaksin" name="vaksin" type="text" class="mt-1 block w-full"
                                    required autocomplete="vaksin" />
                                <x-input-error class="mt-2" :messages="$errors->get('vaksin')" />
                            </div>

                        </form>
                        <div class="flex items-center gap-4 mt-4">
                            <x-bladewind.button onclick="showModal('survey')"
                                class="bg-gray-800 hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900">
                                Create
                            </x-bladewind.button>
                        </div>
                    </section>

                </div>
            </div>
        </div>
    </div>
    <x-bladewind.modal size="large" name="survey" title="Kuesioner"
        ok_button_label="Create"
        ok_button_type="submit"
        ok_button_form="bioForm">
        <x-bladewind.list-view>
            <x-bladewind.list-item>
                <div>
                    <h3>1. Pertanyaan 1</h3>
                    <div class="mt-2">
                        <x-bladewind.radio-button label="Action" name="p1" />
                        <x-bladewind.radio-button label="Comedy" name="p1" />
                        <x-bladewind.radio-button label="Drama" name="p1" />
                        <x-bladewind.radio-button label="Thriller" name="p1" />
                    </div>
                </div>
            </x-bladewind.list-item>
            <x-bladewind.list-item>
                <div>
                    <h3>2. Pertanyaan 2</h3>
                    <div class="mt-2">
                        <x-bladewind.radio-button label="Action" name="p2" />
                        <x-bladewind.radio-button label="Comedy" name="p2" />
                        <x-bladewind.radio-button label="Drama" name="p2" />
                        <x-bladewind.radio-button label="Thriller" name="p2" />
                    </div>
                </div>
            </x-bladewind.list-item>
            <x-bladewind.list-item>
                <div>
                    <h3>3. Pertanyaan 3</h3>
                    <div class="mt-2">
                        <x-bladewind.radio-button label="Action" name="p3" />
                        <x-bladewind.radio-button label="Comedy" name="p3" />
                        <x-bladewind.radio-button label="Drama" name="p3" />
                        <x-bladewind.radio-button label="Thriller" name="p3" />
                    </div>
                </div>
            </x-bladewind.list-item>
        </x-bladewind.list-view>
    </x-bladewind.modal>
</x-app-layout>
