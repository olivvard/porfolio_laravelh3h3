<script>
    const burgerIcon = document.getElementById('burger-icon');
    const mobileMenu = document.getElementById('mobile-menu');

    burgerIcon.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>
