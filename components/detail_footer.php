<footer class="bg-white text-slate-800 py-12 relative overflow-hidden">
    <!-- Animated Wave Background -->
    <div class="absolute inset-0 -z-10">
        <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
             viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
            <defs>
                <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
            </defs>
            <g class="parallax">
                <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.1)" />
                <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.05)" />
                <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.03)" />
            </g>
        </svg>
    </div>

    <!-- Footer Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center md:text-left">
            <div>
                <h3 class="text-3xl font-bold">KAMABA</h3>
                <p class="mt-2 text-slate-600">Keluarga Mahasiswa Blora</p>
                <div class="flex space-x-4 mt-4 justify-center md:justify-start">
                    <a href="#" class="bg-white/10 p-3 rounded-full hover:bg-white/20 transition-all">
                        <i class="fab fa-facebook-f text-xl"></i>
                    </a>
                    <a href="#" class="bg-white/10 p-3 rounded-full hover:bg-white/20 transition-all">
                        <i class="fab fa-instagram text-xl"></i>
                    </a>
                    <a href="#" class="bg-white/10 p-3 rounded-full hover:bg-white/20 transition-all">
                        <i class="fab fa-twitter text-xl"></i>
                    </a>
                </div>
            </div>
            <div>
                <h4 class="text-lg font-bold mb-4">Links</h4>
                <ul class="space-y-2">
                    <li><a href="/index.php#" class="text-slate-600 hover:underline">Beranda</a></li>
                    <li><a href="/index.php#about" class="text-slate-600 hover:underline">Tentang Kami</a></li>
                    <li><a href="/index.php#blogs" class="text-slate-600 hover:underline">Berita</a></li>
                    <li><a href="/index.php#events" class="text-slate-600 hover:underline">Acara</a></li>
                    <li><a href="/index.php#contact" class="text-slate-600 hover:underline">Kontak</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-lg font-bold mb-4">Contact Us</h4>
                <p class="text-slate-600">Jl. Pemuda No. 123, Blora, Jawa Tengah</p>
                <p class="text-slate-600">Phone: +62 123 4567 8900</p>
                <p class="text-slate-600">Email: info@kamaba.org</p>
            </div>
        </div>

        <div class="mt-12 text-center text-gray-600 text-sm">
            <p class="inline-block bg-gradient-to-r from-white/20 via-transparent to-white/20 py-1 px-3 rounded-lg shadow-lg animate-bounce">
                © <?php echo date('Y'); ?> KAMABA. All rights reserved. Built with ❤️ by Kairav
            </p>
        </div>
    </div>

    <style>
    .waves {
        position: absolute;
        width: 100%;
        height: 100px;
        bottom: 0;
    }

    .parallax > use {
        animation: moveForever 25s cubic-bezier(.55,.5,.45,.5) infinite;
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

    @keyframes moveForever {
        0% { transform: translate3d(-90px,0,0); }
        100% { transform: translate3d(85px,0,0); }
    }
    </style>
</footer>
