<title>Rahmat Rivaldo | {{ $title }}</title>
<x-layout>
    <section id="contact">
        <div class="bg-secondary py-24 sm:py-32">
            <div class="mx-auto grid max-w-7xl gap-20 px-6 lg:px-8 xl:grid-cols-3">
                <div class="max-w-xl">
                    <h2 class="text-3xl font-semibold tracking-tight text-pretty text-white sm:text-4xl">Meet our Team
                    </h2>
                    <p class="mt-6 text-lg/8 text-tertiary">We’re a dynamic group of individuals who are passionate about
                        what we do and dedicated to delivering the best results for our clients.</p>
                </div>
                <ul role="list" class="grid gap-x-8 gap-y-12 sm:grid-cols-2 sm:gap-y-16 xl:col-span-2">
                    <li>
                        <div class="flex items-center gap-x-6">
                            <img class="size-25 rounded-full grayscale hover:grayscale-0 transition-all duration-500"
                                src="{{ asset('images/IMG_20240927_142258_943.jpg') }}" alt="">
                            <div>
                                <h3 class="text-2xl/7 font-semibold tracking-tight text-white">Rahmat Rivaldo</h3>
                                <p class="text-sm/6 font-semibold text-tertiary">Co-Founder / CEO</p>
                                <p class="text-sm/6 font-semibold text-tertiary">rahmatrivaldo666@gmail.com</p>
                                <p class="text-sm/6 font-semibold text-tertiary">+62 822 8936 5996</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center gap-x-6">
                            <img class="size-25 rounded-full object-cover grayscale hover:grayscale-0 transition-all duration-500"
                                src="{{ asset('images/budi.jpg') }}" alt="">
                            <div>
                                <h3 class="text-2xl/7 font-semibold tracking-tight text-white">Budi Santoso</h3>
                                <p class="text-sm/6 font-semibold text-tertiary">Co-Founder</p>
                                <p class="text-sm/6 font-semibold text-tertiary">example@email.com</p>
                                <p class="text-sm/6 font-semibold text-tertiary">+62 888 8888 8888</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center gap-x-6">
                            <img class="size-25 rounded-full object-cover grayscale hover:grayscale-0 transition-all duration-500"
                                src="{{ asset('images/alpin.jpg') }}" alt="">
                            <div>
                                <h3 class="text-2xl/7 font-semibold tracking-tight text-white">Mhd Alfin Rubama</h3>
                                <p class="text-sm/6 font-semibold text-tertiary">example@email.com</p>
                                <p class="text-sm/6 font-semibold text-tertiary">+62 888 8888 8888</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center gap-x-6">
                            <img class="size-25 rounded-full object-cover grayscale hover:grayscale-0 transition-all duration-500"
                                src="{{ asset('images/isan.jpg') }}" alt="">
                            <div>
                                <h3 class="text-2xl/7 font-semibold tracking-tight text-white">Ihsan Dwi Randa</h3>
                                <p class="text-sm/6 font-semibold text-tertiary">Co-Founder</p>
                                <p class="text-sm/6 font-semibold text-tertiary">example@email.com</p>
                                <p class="text-sm/6 font-semibold text-tertiary">+62 888 8888 8888</p>
                            </div>
                        </div>
                    </li>
                    <!-- More people... -->
                </ul>
            </div>
        </div>
    </section>
</x-layout>
