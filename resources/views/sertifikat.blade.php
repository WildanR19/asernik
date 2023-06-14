<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Sertifikat
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="container mx-auto px-5 py-2 lg:px-32 lg:pt-12">
                <div class="-m-1 flex flex-wrap md:-m-2">
                    @foreach ($imageList as $image)
                        <div class="flex w-1/3 flex-wrap">
                            <div class="w-full p-1 md:p-2">
                                <img alt="{{ $image }}"
                                    class="block h-full w-full rounded-lg object-cover object-center cursor-pointer"
                                    src="{{ asset('sertifikat/' . $image) }}"
                                    loading="lazy"
                                    onclick="showModal('{{ asset('sertifikat/' . $image) }}')" />
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div id="modal"
            class="hidden fixed top-0 left-0 z-80 w-screen h-screen bg-black/70 flex justify-center items-center" aria-backdrop-close="true">

            <!-- The close button -->
            <a class="fixed z-90 top-6 right-8 text-white text-5xl font-bold" href="javascript:void(0)"
                onclick="closeModal()">&times;</a>
            <a class="fixed z-90 top-6 right-24 text-white text-5xl font-bold py-2" href="javascript:void(0)"
                onclick="downloadImage()">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="2" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                    </svg>
                </span>
            </a>

            <!-- A big image will be displayed here -->
            <img id="modal-img" class="max-w-[800px] max-h-[600px] object-cover" alt="imgModal" />
        </div>
</x-app-layout>

<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script>
    // Get the modal by id
    const modal = document.getElementById("modal");

    // Get the modal image tag
    const modalImg = document.getElementById("modal-img");
    let filename = ''

    // this function is called when a small image is clicked
    function showModal(src) {
        modal.classList.remove('hidden');
        modalImg.src = src;
        filename = src.replace(/^.*[\\\/]/, '')
    }

    // this function is called when the close button is clicked
    function closeModal() {
        modal.classList.add('hidden');
    }

    function downloadImage() {
        let params = {
            filename: filename
        }
        let urlParams = $.param(params)
        window.open('{{ route('sertifikat.download') }}' + '?' + urlParams,"_blank");
    }

    document.getElementById('modal').addEventListener('click', function (e){ 
        let backdrop_close = this.getAttribute('aria-backdrop-close');
        if(backdrop_close) hide('#modal');
    });
</script>
