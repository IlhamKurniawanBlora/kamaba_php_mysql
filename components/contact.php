<!-- Extreme Contact Section -->
<section id="contact" class="relative bg-gradient-to-b from-indigo-900 via-blue-800 to-blue-900 py-24 overflow-hidden">
    <!-- Animated Wave Background -->
    <div class="absolute inset-0 z-0">
        <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
             viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
            <defs>
                <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
            </defs>
            <g class="parallax">
                <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.8)" />
                <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.6)" />
                <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.4)" />
                <use xlink:href="#gentle-wave" x="48" y="7" fill="rgba(255,255,255,0.2)" />
            </g>
        </svg>
    </div>

    <!-- Floating Particles -->
    <div class="absolute inset-0 z-0">
        <div class="particles" id="particles-js"></div>
    </div>

    <div class="max-w-6xl mx-auto px-6 sm:px-10 lg:px-16 relative z-10 mb-24">
        <div class="text-center mb-20" data-aos="fade-down">
            <h2 class="text-5xl font-extrabold text-white mb-6">Hubungi Kami</h2>
            <div class="w-28 h-1 bg-gradient-to-r from-white to-blue-300 mx-auto rounded-full mb-8"></div>
            <p class="mt-4 text-2xl text-blue-100 font-light">
                Jangan ragu untuk menghubungi kami kapan saja!
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-16 items-center">
            <!-- Contact Form -->
            <div class="bg-gradient-to-r from-blue-700 to-indigo-800 rounded-3xl p-10 shadow-2xl backdrop-blur-lg border border-white/20" data-aos="fade-right">
                <form id="contactForm" class="space-y-8">
                    <div class="space-y-6">
                        <div class="group">
                            <input type="text" required
                                   class="w-full px-5 py-4 bg-white/20 border border-white/30 rounded-lg text-white placeholder-blue-200 focus:outline-none focus:ring-4 focus:ring-blue-500/50 transition-transform transform focus:-translate-y-1"
                                   placeholder="Nama Lengkap">
                        </div>
                        <div class="group">
                            <input type="email" required
                                   class="w-full px-5 py-4 bg-white/20 border border-white/30 rounded-lg text-white placeholder-blue-200 focus:outline-none focus:ring-4 focus:ring-blue-500/50 transition-transform transform focus:-translate-y-1"
                                   placeholder="Email">
                        </div>
                        <div class="group">
                            <textarea rows="5" required
                                      class="w-full px-5 py-4 bg-white/20 border border-white/30 rounded-lg text-white placeholder-blue-200 focus:outline-none focus:ring-4 focus:ring-blue-500/50 transition-transform transform focus:-translate-y-1 resize-none"
                                      placeholder="Pesan Anda"></textarea>
                        </div>
                    </div>
                    <button type="submit"
                            class="w-full bg-gradient-to-r from-blue-300 via-blue-500 to-indigo-600 py-4 px-8 rounded-lg font-semibold text-white shadow-lg hover:shadow-2xl hover:from-blue-400 hover:to-indigo-700 transform hover:-translate-y-1 transition-all duration-300">
                        Kirim Pesan
                    </button>
                </form>
            </div>

            <!-- Contact Info -->
            <div class="text-center md:text-left space-y-12" data-aos="fade-left">
    <!-- Social Media Links -->
    <div>
        <h3 class="text-3xl font-bold text-white mb-6">Ikuti Kami</h3>
        <div class="flex justify-center md:justify-start space-x-6">
            <a href="https://instagram.com/kamaba_official" 
               class="group bg-white/20 p-6 rounded-full shadow-lg hover:bg-white/30 transform hover:scale-110 transition-all duration-300">
                <i class="fab fa-instagram text-xl text-white group-hover:text-blue-300 transition-transform"></i>
            </a>
            <a href="https://facebook.com/kamaba.official" 
               class="group bg-white/20 p-6 rounded-full shadow-lg hover:bg-white/30 transform hover:scale-110 transition-all duration-300">
                <i class="fab fa-facebook text-xl text-white group-hover:text-blue-300 transition-transform"></i>
            </a>
            <a href="https://youtube.com/kamaba_official" 
               class="group bg-white/20 p-6 rounded-full shadow-lg hover:bg-white/30 transform hover:scale-110 transition-all duration-300">
                <i class="fab fa-youtube text-xl text-white group-hover:text-red-500 transition-transform"></i>
            </a>
            <a href="https://tiktok.com/@kamaba_official" 
               class="group bg-white/20 p-6 rounded-full shadow-lg hover:bg-white/30 transform hover:scale-110 transition-all duration-300">
                <i class="fab fa-tiktok text-xl text-white group-hover:text-blue-300 transition-transform"></i>
            </a>
            <a href="https://wa.me/6212345678900" 
               class="group bg-white/20 p-6 rounded-full shadow-lg hover:bg-white/30 transform hover:scale-110 transition-all duration-300">
                <i class="fab fa-whatsapp text-xl text-white group-hover:text-green-500 transition-transform"></i>
            </a>
        </div>
    </div>

    <!-- Contact Details -->
    <div class="space-y-6 text-blue-100">
        <div class="flex items-center justify-center md:justify-start space-x-6">
            <div class="bg-white/20 p-5 rounded-full shadow-lg">
                <i class="fas fa-map-marker-alt text-white"></i>
            </div>
            <p class="text-lg">Jl. Pemuda No. 123, Blora, Jawa Tengah</p>
        </div>
        <div class="flex items-center justify-center md:justify-start space-x-6">
            <div class="bg-white/20 p-5 rounded-full shadow-lg">
                <i class="fas fa-phone text-white"></i>
            </div>
            <p class="text-lg">+62 123 4567 8900</p>
        </div>
        <div class="flex items-center justify-center md:justify-start space-x-6">
            <div class="bg-white/20 p-5 rounded-full shadow-lg">
                <i class="fas fa-envelope text-white"></i>
            </div>
            <p class="text-lg">info@kamaba.org</p>
        </div>
    </div>
</div>

        </div>
    </div>
</section>

<style>
/***************************
    Wave Animation
***************************/
.waves {
    position: relative;
    width: 100%;
    height: 120px;
    margin-bottom: -8px;
}

.parallax > use {
    animation: moveForever 20s cubic-bezier(.55,.5,.45,.5) infinite;
}

.parallax > use:nth-child(1) {
    animation-delay: -2s;
    animation-duration: 6s;
}
.parallax > use:nth-child(2) {
    animation-delay: -3s;
    animation-duration: 9s;
}
.parallax > use:nth-child(3) {
    animation-delay: -4s;
    animation-duration: 12s;
}
.parallax > use:nth-child(4) {
    animation-delay: -5s;
    animation-duration: 15s;
}

@keyframes moveForever {
    0% { transform: translate3d(-90px,0,0); }
    100% { transform: translate3d(85px,0,0); }
}

/***************************
    Scroll Animations
***************************/
[data-aos] {
    opacity: 0;
    transition-property: all;
    transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
    transition-duration: 1000ms;
}

[data-aos="fade-right"] {
    transform: translateX(-50px);
}

[data-aos="fade-left"] {
    transform: translateX(50px);
}

[data-aos="fade-down"] {
    transform: translateY(-50px);
}

[data-aos].aos-animate {
    opacity: 1;
    transform: translate(0);
}
</style>

<script>
// Initialize particles.js
if (typeof particlesJS !== 'undefined') {
    particlesJS('particles-js', {
        particles: {
            number: { value: 50, density: { enable: true, value_area: 1000 } },
            color: { value: '#ffffff' },
            shape: { type: 'circle' },
            opacity: {
                value: 0.4,
                random: true,
                anim: { enable: true, speed: 1, opacity_min: 0.2, sync: false }
            },
            size: {
                value: 6,
                random: true,
                anim: { enable: true, speed: 2, size_min: 0.1, sync: false }
            },
            line_linked: {
                enable: true,
                distance: 150,
                color: '#ffffff',
                opacity: 0.2,
                width: 1
            },
            move: {
                enable: true,
                speed: 2,
                direction: 'none',
                random: true,
                straight: false,
                out_mode: 'out',
                bounce: false,
            }
        },
        interactivity: {
            detect_on: 'canvas',
            events: {
                onhover: { enable: true, mode: 'bubble' },
                onclick: { enable: true, mode: 'push' },
                resize: true
            },
            modes: {
                bubble: { distance: 200, size: 8, duration: 2, opacity: 0.8, speed: 3 },
                push: { particles_nb: 4 }
            }
        },
        retina_detect: true
    });
}
</script>
