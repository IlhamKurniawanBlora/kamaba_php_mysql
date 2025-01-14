<!-- Navigation -->
<nav class="fixed w-full transition-all duration-300 z-50" id="navbar">
    <div class="backdrop-blur-md bg-white/20 shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <img src="./images/logo-kamaba.png" alt="Kamaba Logo" class="h-12 w-auto">
                    <span class="ml-2 text-slate-600 font-bold text-xl">KAMABA</span>
                </div>
                <div class="flex items-center space-x-8">
                    <a href="#" class="nav-link relative text-slate-600 hover:text-slate-800 transition-all duration-300 after:content-[''] after:absolute after:w-0 after:h-0.5 after:bg-slate-800 after:left-0 after:-bottom-1 after:transition-all after:duration-300 hover:after:w-full">Beranda</a>
                    <a href="#about" class="nav-link relative text-slate-600 hover:text-slate-800 transition-all duration-300 after:content-[''] after:absolute after:w-0 after:h-0.5 after:bg-slate-800 after:left-0 after:-bottom-1 after:transition-all after:duration-300 hover:after:w-full">Tentang Kami</a>
                    <a href="#news" class="nav-link relative text-slate-600 hover:text-slate-800 transition-all duration-300 after:content-[''] after:absolute after:w-0 after:h-0.5 after:bg-slate-800 after:left-0 after:-bottom-1 after:transition-all after:duration-300 hover:after:w-full">Berita</a>
                    <a href="#events" class="nav-link relative text-slate-600 hover:text-slate-800 transition-all duration-300 after:content-[''] after:absolute after:w-0 after:h-0.5 after:bg-slate-800 after:left-0 after:-bottom-1 after:transition-all after:duration-300 hover:after:w-full">Acara</a>
                    <a href="#contact" class="nav-link relative text-slate-600 hover:text-slate-800 transition-all duration-300 after:content-[''] after:absolute after:w-0 after:h-0.5 after:bg-slate-800 after:left-0 after:-bottom-1 after:transition-all after:duration-300 hover:after:w-full">Kontak</a>
                </div>
            </div>
        </div>
    </div>
</nav>

<style>
/* Custom styles for the navigation */
.scrolled {
    background: rgba(255, 255, 255, 0.1) !important;
    backdrop-filter: blur(10px);
    text-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
    color: black;
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
}
</style>

<script>
// JavaScript for handling scroll effects
window.addEventListener('scroll', function() {
    const navbar = document.getElementById('navbar');
    if (window.scrollY > 50) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
});
</script>