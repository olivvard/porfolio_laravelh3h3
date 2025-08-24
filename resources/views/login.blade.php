<title>Rahmat Rivaldo | {{ $title }}</title>
<x-layout>
    <div class="bg-secondary">
        <div class="py-12 px-12">
            <div class="w-full">
                <div class="py-6">
                    <div class="text-6xl text-purple-500 text-center font-bold">LOGIN</div>
                    <div class="text-base text-tertiary text-center">Login to proceed</div>
                    <form action="{{ route('login.process') }}" method="POST">
                        <div class="flex justify-center flex-col items-center">
                            {{-- inputs --}}
                            <div class="relative w-60 md:w-120 group mt-5 mb-2" id="username">
                                <span
                                    class="absolute -left-0.5 top-2 bottom-2 w-1.5 rounded bg-gradient-to-b from-indigo-500 to-purple-500 opacity-70 transition-all duration-300 group-focus-within:opacity-100"></span>
                                <input type="text" id="input" name="username"
                                    class="peer w-full pl-6 pr-4 pt-6 pb-2 text-sm text-gray-800 bg-white border border-gray-200 rounded-lg shadow-md focus:border-transparent focus:ring-2 focus:ring-indigo-300 focus:outline-none transition-all duration-300 delay-200 placeholder-transparent" />
                                <label for="input"
                                    class="absolute left-6 top-3.5 text-sm text-gray-500 transition-all duration-200 ease-in-out peer-placeholder-shown:top-3.5 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-focus:top-1 peer-focus:text-sm peer-focus:text-indigo-500 peer-focus:font-semibold cursor-text">Username</label>
                            </div>
                            <div class="relative w-60 md:w-120 group mt-5 mb-2 id="password">
                                <span
                                    class="absolute -left-0.5 top-2 bottom-2 w-1.5 rounded bg-gradient-to-b from-indigo-500 to-purple-500 opacity-70 transition-all duration-300 group-focus-within:opacity-100"></span>
                                <input type="text" id="input" name="password"
                                    class="peer w-full pl-6 pr-4 pt-6 pb-2 text-sm text-gray-800 bg-white border border-gray-200 rounded-lg shadow-md focus:border-transparent focus:ring-2 focus:ring-indigo-300 focus:outline-none transition-all duration-300 delay-200 placeholder-transparent" />
                                <label for="input"
                                    class="absolute left-6 top-3.5 text-sm text-gray-500 transition-all duration-200 ease-in-out peer-placeholder-shown:top-3.5 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-focus:top-1 peer-focus:text-sm peer-focus:text-indigo-500 peer-focus:font-semibold cursor-text">Password</label>
                            </div>
                            {{-- register/remember --}}
                            <div class="flex flex-col my-5 md:flex-row justify-between items-center gap-5 md:gap-20">
                                <span><label class="relative flex items-center cursor-pointer group">
                                        <input class="peer sr-only" type="checkbox" />
                                        <div
                                            class="w-6 h-6 rounded-sm bg-white border-2 border-purple-500 transition-all duration-300 ease-in-out peer-checked:bg-gradient-to-br from-purple-500 to-pink-500 peer-checked:border-0 peer-checked:rotate-12 after:content-[''] after:absolute after:top-1/2 after:left-1/2 after:-translate-x-1/2 after:-translate-y-1/2 after:w-5 after:h-5 after:opacity-0 after:bg-[url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0IiBmaWxsPSJub25lIiBzdHJva2U9IiNmZmZmZmYiIHN0cm9rZS13aWR0aD0iMyIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIj48cG9seWxpbmUgcG9pbnRzPSIyMCA2IDkgMTcgNCAxMiI+PC9wb2x5bGluZT48L3N2Zz4=')] after:bg-contain after:bg-no-repeat peer-checked:after:opacity-100 after:transition-opacity after:duration-300 hover:shadow-[0_0_15px_rgba(168,85,247,0.5)]">
                                        </div>
                                        <span class="ml-3 text-tertiary text-sm md:text-base">Remember me</span>
                                    </label></span>
                                <span class="text-tertiary text-sm md:text-base">Don't have an account? <span
                                        class="underline hover:text-purple-600"><a href="/register">Register
                                            here</a></span></span>
                            </div>
                            {{-- submit button --}}
                            <button type="submit"
                                class="bg-tertiary py-3 px-25 md:px-55 font-semibold rounded hover:bg-gradient-to-br from-purple-500 to-pink-500 transition-all duration-300 ease-in-out cursor-pointer hover:text-white md:text-xl">LOGIN</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>
