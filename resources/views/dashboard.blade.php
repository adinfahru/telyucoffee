<x-app-layout>
    <x-slot name="header">
        <div class="overflow-hidden bg-white py-6 sm:py-6">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2">
                    <div class="lg:pr-8 lg:pt-4">
                        <div class="lg:max-w-lg">
                            <h2 class="text-base font-semibold leading-7 text-indigo-600">Welcome to</h2>
                            <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Telyu Coffee</p>
                            <p class="mt-6 text-lg leading-8 text-gray-600 mb-5">Selamat datang di Telyu Coffee, tempat di mana keindahan kopi bertemu dengan kekuatan rasa. Kami mengundang Anda untuk menjelajahi dunia kopi kami yang penuh gairah, di mana setiap biji dipilih dengan teliti untuk menciptakan pengalaman kopi yang tak terlupakan.</p>
                            <a href="{{ __('menu') }}" class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">Pesan Sekarang</a>
                        </div>
                    </div>
                    <img src="{{ asset('storage/images/telyu1.jpg') }}" alt="Product screenshot" class="w-[48rem] max-w-none rounded-xl shadow-xl ring-1 ring-gray-400/10 sm:w-[57rem] md:-ml-4 lg:-ml-0" width="2432" height="1442">
                </div>


                <section>
                    <div class="relative items-center w-full px-5 py-12 mx-auto md:px-12 lg:px-20 max-w-7xl mt-10">
                    <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl mb-10">Apa Kata Mereka Tentang Telyu Coffee?</p>
                    
                        <div class="grid grid-cols-1 gap-6 lg:grid-cols-3">
                            <div class="inline-block p-4 mx-auto text-left align-bottom transition-all transform bg-gray-100 sm:align-middle sm:p-8 rounded-2xl">
                                <div class="flex w-full mb-4">
                                    <div class="flex-grow pl-3">
                                        <h6 class="text-lg font-medium leading-6 text-black">Anies</h6>
                                    </div>

                                </div>
                                <div class="w-full mb-4">
                                    <p class="text-base text-gray-500">
                                    "Saya baru-baru ini mencoba kopi dari Telyu Coffee, dan saya benar-benar terkesan! Aroma kopi mereka begitu kuat dan menggoda, memberikan pengalaman yang luar biasa sejak pertama kali menciumnya. Telyu Coffee benar-benar membawa kopi ke tingkat yang baru!"
                                    </p>
                                </div>
                            </div>
                            <div class="inline-block p-4 mx-auto text-left align-bottom transition-all transform bg-gray-100 sm:align-middle sm:p-8 rounded-2xl">
                                <div class="flex w-full mb-4">
                                    <div class="flex-grow pl-3">
                                        <h6 class="text-lg font-medium leading-6 text-black">Subianto</h6>
                                    </div>

                                </div>
                                <div class="w-full mb-4">
                                    <p class="text-base text-gray-500">
                                    "Saya seorang pencinta kopi sejati, dan Telyu Coffee memberikan segalanya yang saya cari dalam secangkir kopi. Pilihan mereka yang beragam membuat saya bisa mencoba berbagai rasa dan asal biji kopi. Saya sangat menghargai ketelitian mereka dalam pemilihan biji, dan hasil akhirnya terasa begitu sempurna.
                                    </p>
                                </div>
                            </div>
                            <div class="inline-block p-4 mx-auto text-left align-bottom transition-all transform bg-gray-100 sm:align-middle sm:p-8 rounded-2xl">
                                <div class="flex w-full mb-4">
                                    <div class="flex-grow pl-3">
                                        <h6 class="text-lg font-medium leading-6 text-black">Pranowo</h6>
                                    </div>

                                </div>
                                <div class="w-full mb-4">
                                    <p class="text-base text-gray-500">
                                    "Saya suka sekali dengan pengalaman belanja di Telyu Coffee. Website mereka mudah dinavigasi, dan koleksi kopi yang ditawarkan sangat mengesankan. Saya memesan campuran kopi untuk mencoba variasi rasa, dan saya tidak kecewa. 
                                    </p>
                                </div>
                            </div>


                        </div>
                    </div>
                </section>

            </div>
        </div>

        <section>
            <div class="relative items-center w-full px-5 mx-auto md:px-12 lg:px-20 max-w-7xl">
            <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-1xl">Ambience Telyu Coffee</p>
                <div class="grid grid-cols-2 gap-6 py-12 md:grid-cols-3 lg:grid-cols-6">
                    <div class="grid grid-cols-2 col-span-2 gap-4 lg:grid-cols-1 md:col-span-3 lg:col-span-2">
                        <figure>
                            <img class="w-full bg-gray-200" src="{{ asset('storage/images/telyu4.jpg') }}">
                        </figure>
                    </div>
                    <figure class="lg:col-span-3">
                        <img class="w-full bg-gray-200" src="{{ asset('storage/images/telyu3.jpg') }}">
                    </figure>
                </div>
            </div>
        </section>



    </x-slot>

</x-app-layout>