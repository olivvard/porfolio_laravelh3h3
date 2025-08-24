   <title>Rahmat Rivaldo | {{ $title }}</title>
   <x-layout>
       {{-- about --}}
       <section id="about" class="bg-zinc-900 mt-12 py-12">
           <div class="lg:px-64 px-12 py-5 flex flex-col md:flex-row justify-center">
               <div class="lg:w-1/2 w-full" id="about-desc">
                   <div class="px-5 py-5 flex flex-col justify-center">
                       <h2 class="text-xl text-zinc-900 dark:text-tertiary mb-2">Yo 👋, My name Is <span
                               class="font-semibold">Rahmat Rivaldo</span></h2>
                       <h1 class="text-4xl text-white font-bold mb-2">Web Developer | Graphic Designer</h1>
                       <p class="text-base text-tertiary mb-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                           Facere
                           voluptates animi doloremque beatae natus, repudiandae quibusdam, placeat sequi autem totam
                           vel
                           aperiam quia quis? Laborum ipsa magnam aspernatur error quos.</p>
                       <ul class="links flex justify-baseline items-center gap-5">
                           <li><a href="https://www.instagram.com/olivvard"
                                   class="text-tertiary md:text-2xl text-lg hover:text-purple-400 transition-all duration-300"
                                   target="_blank"><i class="fa-brands fa-instagram"></i> Olivvard</a></li>
                           <li><a href="https://www.youtube.com/@Olivvard"
                                   class="text-tertiary md:text-2xl text-lg hover:text-red-400 transition-all duration-300"
                                   target="_blank"><i class="fa-brands fa-youtube"></i> Olivvard</a></li>
                           <li><a href="https://www.linkedin.com/in/rahmat-rivaldo-245825292/"
                                   class="text-tertiary md:text-2xl text-lg hover:text-blue-400 transition-all duration-300"
                                   target="_blank"><i class="fa-brands fa-linkedin"></i> Rahmat Rivaldo</a></li>
                           <li><a href="https://www.behance.net/rahmatrivaldo"
                                   class="text-tertiary md:text-2xl text-lg hover:text-gray-500 transition-all duration-300"
                                   target="_blank"><i class="fa-brands fa-behance"></i> Olivvard</a></li>
                       </ul>
                   </div>
               </div>
               <div class="lg:w-1/2 w-full" id="about-img">
                   <div class="px-5 py-5 flex justify-center md:justify-end items-center">
                       <div
                           class="w-50 h-100 border-4 border-black rounded-full overflow-hidden transition-all duration-500 hover:border-blue-500">
                           <img src="{{ asset('images/IMG_20240927_142258_943.jpg') }}" alt="Framed Image"
                               class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-500">
                       </div>
                   </div>
               </div>
           </div>
           </div>

       </section>

       {{-- portfolio table --}}
       <section id="portfolio" class="mt-12 py-12 px-32 relative">
           <div class="px-12 py-5">
               <table class="table-fixed absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                   <thead>
                       <tr>
                           <th class="w-250 text-left font-bold text-white text-xl pb-2 border-b-2">Project Name</th>
                           <th class="text-left font-bold text-white text-xl pb-2 border-b-2">Year</th>
                       </tr>
                   </thead>
                   <tbody class="text-base text-tertiary">
                       <tr>
                           <td>Telkomsel</td>
                           <td>2024</td>
                       </tr>
                       <tr>
                           <td>Project PSSD</td>
                           <td>2024</td>
                       </tr>
                       <tr>
                           <td>Institut Teknologi Bandung Site</td>
                           <td>2025</td>
                       </tr>
                       <tr>
                           <td>Tweakin' Out</td>
                           <td>2025</td>
                       </tr>
                   </tbody>
               </table>
           </div>
       </section>
   </x-layout>