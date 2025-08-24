<header>
    <div class="flex justify-between md:justify-center md:gap-10 items-center px-12 py-12">
        <!-- Logo -->
        <div class="flex items-center" id="logo">
            <a href="/" class="text-white md:text-3xl text-4xl ms-3">Olivard</a>
        </div>

        <!-- Burger Icon (small screens only) -->
        <div class="md:hidden cursor-pointer" id="burger-icon">
            <i class="fa-solid fa-burger text-4xl text-tertiary"></i>
        </div>

        <!-- Nav (medium+ screens only) -->
        <nav class="hidden md:block bg-tertiary py-2 px-5 rounded-full" id="burger-menu">
            <ul class="flex items-center gap-3">
                <li><x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link></li> 
                <li><x-nav-link href="about" :active="request()->is('about')">About</x-nav-link></li> 
                <li><x-nav-link href="blog" :active="request()->is('blog')">Blog</x-nav-link></li> 
                <li><x-nav-link href="contact" :active="request()->is('contact')">Contact</x-nav-link></li> 
            </ul>
        </nav>
    </div>

    <!-- Dropdown Menu for Small Screens -->
    <nav class="md:hidden hidden bg-tertiary mt-4 mx-6 rounded-xl p-4" id="mobile-menu">
        <ul class="flex flex-col gap-3">
            <li><a href="/home" class="text-secondary">Home</a></li>
            <li><a href="/about" class="text-secondary">About</a></li>
            <li><a href="/blog" class="text-secondary">Blog</a></li>
            <li><a href="/contact" class="text-secondary">Contact</a></li>
            <li><a href="/login" class="text-secondary">Login</a></li>
        </ul>
    </nav>
</header>
