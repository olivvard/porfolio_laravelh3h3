<title>Rahmat Rivaldo | {{ $title }}</title>
<x-layout>
    <div class="bg-secondary py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:mx-0">
                <h2 class="text-4xl font-semibold tracking-tight text-pretty text-white sm:text-5xl">My Portfolio</h2>
                <p class="mt-2 text-lg/8 text-gray-600">First Class Showcase On My Handcrafted <span
                        class="font-bold text-tertiary">Art</span></p>
            </div>
            <div
                class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-t border-gray-200 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                {{-- article 1 --}}
                <article class="flex max-w-xl flex-col items-start justify-between">
                    <div class="flex items-center gap-x-4 text-xs">
                        <time datetime="2024-06-26" class="text-gray-500">26 June, 2024</time>
                        <a href="#"
                            class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">Brand
                            Identity</a>
                    </div>
                    <div class="img mt-5">
                        <img src="{{ asset('images/telkomsel.png') }}" alt=""
                            class="rounded-2xl hover:scale-110 duration-300 hover:transition-all object-cover"
                            style="width: 25rem; height: 18rem;">
                    </div>
                    <div class="group relative">
                        <h3 class="mt-3 text-lg/6 font-semibold text-tertiary group-hover:text-white">
                            <a href="#">
                                <span class="absolute inset-0"></span>
                                Telkomsel
                            </a>
                        </h3>
                        <p class="mt-2 line-clamp-3 text-sm/6 text-gray-500">Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Est ipsum minima quaerat, labore iure alias qui non vitae deleniti
                            corporis ipsa quia placeat reprehenderit aliquid necessitatibus officiis! Similique,
                            aspernatur consectetur?</p>
                    </div>
                    <button
                        class="mt-5 bg-tertiary cursor-pointer py-2 px-4 rounded-lg hover:bg-zinc-50 transition-all duration-300">Read
                        More</button>
                    <div class="relative mt-8 flex items-center gap-x-4">
                        <img src="{{ asset('images/IMG_20240927_142258_943.jpg') }}" alt=""
                            class="size-10 rounded-full bg-gray-50">
                        <div class="text-sm/6">
                            <p class="font-semibold text-tertiary">
                                <a href="#">
                                    <span class="absolute inset-0"></span>
                                    Rahmat Rivaldo
                                </a>
                            </p>
                            <p class="text-gray-600">Co Founder</p>
                        </div>
                    </div>
                </article>
                {{-- article 2 --}}
                <article class="flex max-w-xl flex-col items-start justify-between">
                    <div class="flex items-center gap-x-4 text-xs">
                        <time datetime="2024-23-8" class="text-gray-500">23 August, 2024</time>
                        <a href="#"
                            class="relative z-10 rounded-full bg-purple-400 px-3 py-1.5 font-medium text-zinc-100 hover:bg-purple-700">Campus
                            Project</a>
                    </div>
                    <div class="img mt-5">
                        <img src="{{ asset('images/index.png') }}" alt=""
                            class="rounded-2xl hover:scale-110 duration-300 hover:transition-all  object-cover"
                            style="width: 25rem; height: 18rem;">
                    </div>
                    <div class="group relative">
                        <h3 class="mt-3 text-lg/6 font-semibold text-tertiary group-hover:text-white">
                            <a href="#">
                                <span class="absolute inset-0"></span>
                                Project PSSD (Pengaduan STT Dumai)
                            </a>
                        </h3>
                        <p class="mt-2 line-clamp-3 text-sm/6 text-gray-500">Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Est ipsum minima quaerat, labore iure alias qui non vitae deleniti
                            corporis ipsa quia placeat reprehenderit aliquid necessitatibus officiis! Similique,
                            aspernatur consectetur?</p>
                    </div>
                    <button
                        class="mt-5 bg-tertiary cursor-pointer py-2 px-4 rounded-lg hover:bg-zinc-50 transition-all duration-300">Read
                        More</button>
                    <div class="relative mt-8 flex items-center gap-x-4">
                        <img src="{{ asset('images/IMG_20240927_142258_943.jpg') }}" alt=""
                            class="size-10 rounded-full bg-gray-50">
                        <div class="text-sm/6">
                            <p class="font-semibold text-tertiary">
                                <a href="#">
                                    <span class="absolute inset-0"></span>
                                    Rahmat Rivaldo
                                </a>
                            </p>
                            <p class="text-gray-600">Co Founder</p>
                        </div>
                    </div>
                </article>
                {{-- article 3 --}}
                <article class="flex max-w-xl flex-col items-start justify-between">
                    <div class="flex items-center gap-x-4 text-xs">
                        <time datetime="2024-23-8" class="text-gray-500">23 August, 2024</time>
                        <a href="#"
                            class="relative z-10 rounded-full bg-purple-400 px-3 py-1.5 font-medium text-zinc-100 hover:bg-purple-700">Campus
                            Project</a>
                    </div>
                    <div class="img mt-5">
                        <img src="{{ asset('images/itb.jpg') }}" alt=""
                            class="rounded-2xl hover:scale-110 duration-300 hover:transition-all  object-cover"
                            style="width: 25rem; height: 18rem;">
                    </div>
                    <div class="group relative">
                        <h3 class="mt-3 text-lg/6 font-semibold text-tertiary group-hover:text-white">
                            <a href="#">
                                <span class="absolute inset-0"></span>
                                ITB Landing Page
                            </a>
                        </h3>
                        <p class="mt-2 line-clamp-3 text-sm/6 text-gray-500">Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Est ipsum minima quaerat, labore iure alias qui non vitae deleniti
                            corporis ipsa quia placeat reprehenderit aliquid necessitatibus officiis! Similique,
                            aspernatur consectetur?</p>
                    </div>
                    <button
                        class="mt-5 bg-tertiary cursor-pointer py-2 px-4 rounded-lg hover:bg-zinc-50 transition-all duration-300">Read
                        More</button>
                    <div class="relative mt-8 flex items-center gap-x-4">
                        <img src="{{ asset('images/IMG_20240927_142258_943.jpg') }}" alt=""
                            class="size-10 rounded-full bg-gray-50">
                        <div class="text-sm/6">
                            <p class="font-semibold text-tertiary">
                                <a href="#">
                                    <span class="absolute inset-0"></span>
                                    Rahmat Rivaldo
                                </a>
                            </p>
                            <p class="text-gray-600">Co Founder</p>
                        </div>
                    </div>
                </article>

                <!-- More posts... -->
            </div>
        </div>
    </div>
</x-layout>
