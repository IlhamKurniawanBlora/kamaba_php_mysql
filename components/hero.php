<!-- Hero Section -->
<div class="relative h-screen bg-gradient-to-br from-blue-900 via-blue-800 to-blue-700 overflow-hidden">
    <!-- Animated background particles -->
    <div id="particles-js" class="absolute inset-0"></div>
    
    <!-- Background image with parallax effect -->
    <div style="background-image: url('images/oil.png')" 
         class="absolute inset-0 bg-cover bg-center bg-fixed opacity-15 transform scale-105 transition-transform duration-1000"
         id="parallax-bg">
    </div>

    <!-- Content wrapper -->
    <div class="relative z-10 h-full flex items-center justify-center">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center space-y-8 animate-fadeIn">
                <!-- Main heading with animated gradient -->
                <h1 class="text-5xl sm:text-6xl md:text-7xl font-extrabold tracking-tight text-white space-y-4">
                    <span class="block transform hover:scale-105 transition-transform duration-300 animate-slideDown">
                        Keluarga Mahasiswa Blora
                    </span>
                    <span class="block bg-gradient-to-r from-blue-200 to-white text-transparent bg-clip-text animate-slideUp">
                        Bersatu Untuk Maju
                    </span>
                </h1>

                <!-- Animated line separator -->
                <div class="w-24 h-1 bg-white/50 mx-auto rounded-full animate-expandWidth"></div>

                <!-- Description with fade-in effect -->
                <p class="mt-6 max-w-md mx-auto text-lg sm:text-xl md:text-2xl text-blue-100 sm:max-w-xl animate-fadeIn opacity-90">
                    Wadah pemersatu mahasiswa asal Blora untuk berkarya, berkembang, dan berkontribusi bagi daerah.
                </p>

                <!-- CTA Button with hover effects -->
                <div class="mt-10 animate-slideUp">
                    <a href="#join" 
                       class="group relative inline-flex items-center px-12 py-4 border-2 border-white text-lg font-medium rounded-full text-white overflow-hidden transition-all duration-300 transform hover:scale-105">
                        <span class="absolute inset-0 bg-white/10 group-hover:bg-white/20 transition-all duration-300"></span>
                        <span class="relative flex items-center">
                            Bergabung Sekarang
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                            </svg>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Decorative bottom wave -->
    <div class="absolute bottom-0 left-0 right-0">
        <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
             viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
            <defs>
                <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
            </defs>
            <g class="parallax">
                <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7)" />
                <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
                <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
                <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
            </g>
        </svg>
    </div>
</div>

<style>
/* Custom Animations */
@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}

@keyframes slideDown {
    from { transform: translateY(-50px); opacity: 0; }
    to { transform: translateY(0); opacity: 1; }
}

@keyframes slideUp {
    from { transform: translateY(50px); opacity: 0; }
    to { transform: translateY(0); opacity: 1; }
}

@keyframes expandWidth {
    from { width: 0; }
    to { width: 6rem; }
}

.animate-fadeIn {
    animation: fadeIn 1s ease-out forwards;
}

.animate-slideDown {
    animation: slideDown 1s ease-out forwards;
}

.animate-slideUp {
    animation: slideUp 1s ease-out forwards;
}

.animate-expandWidth {
    animation: expandWidth 1s ease-out forwards;
}

/* Wave Animation */
.waves {
    width: 100%;
    height: 100px;
}

.parallax > use {
    animation: wave 25s cubic-bezier(.55,.5,.45,.5) infinite;
}

.parallax > use:nth-child(1) {
    animation-delay: -2s;
    animation-duration: 7s;
}

.parallax > use:nth-child(2) {
    animation-delay: -3s;
    animation-duration: 10s;
}

.parallax > use:nth-child(3) {
    animation-delay: -4s;
    animation-duration: 13s;
}

.parallax > use:nth-child(4) {
    animation-delay: -5s;
    animation-duration: 20s;
}

@keyframes wave {
    0% { transform: translate3d(-90px,0,0); }
    100% { transform: translate3d(85px,0,0); }
}
</style>

<script>
// Parallax effect
window.addEventListener('scroll', function() {
    const parallaxBg = document.getElementById('parallax-bg');
    let scrolled = window.pageYOffset;
    parallaxBg.style.transform = 'translate3d(0, ' + (scrolled * 0.4) + 'px, 0) scale(1.1)';
});

// Add particles.js if you include the library
document.addEventListener('DOMContentLoaded', function() {
    if (typeof particlesJS !== 'undefined') {
        particlesJS('particles-js', {
            particles: {
                number: { value: 80, density: { enable: true, value_area: 800 } },
                color: { value: '#ffffff' },
                opacity: { value: 0.2 },
                size: { value: 3 },
                line_linked: {
                    enable: true,
                    distance: 150,
                    color: '#ffffff',
                    opacity: 0.1,
                    width: 1
                },
                move: {
                    enable: true,
                    speed: 2,
                    direction: 'none',
                    random: false,
                    straight: false,
                    out_mode: 'out',
                    bounce: false,
                }
            },
            interactivity: {
                detect_on: 'canvas',
                events: {
                    onhover: { enable: true, mode: 'repulse' },
                    resize: true
                }
            },
            retina_detect: true
        });
    }
});
</script>