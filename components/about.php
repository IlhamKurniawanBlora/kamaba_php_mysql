<!-- About Section -->
<section id="about" class="min-h-screen bg-gradient-to-b from-white to-gray-50 py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section with Fade In Animation -->
        <div class="text-center mb-16 opacity-0 transform translate-y-10 transition-all duration-1000" data-aos="fade-up">
            <h2 class="text-4xl md:text-5xl font-extrabold text-kamaba-bluee mb-6">Tentang KAMABA</h2>
            <div class="w-24 h-1 bg-kamaba-bluee mx-auto rounded-full mb-6"></div>
            <p class="mt-4 max-w-3xl text-xl text-gray-600 lg:mx-auto">
                Organisasi yang mewadahi dan mempererat tali silaturahmi antar mahasiswa Blora yang sedang menempuh pendidikan di berbagai perguruan tinggi, dengan fokus pada pengembangan akademik dan kontribusi sosial.
            </p>
        </div>

        <!-- Main Features Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-20">
            <!-- Kekeluargaan Card -->
            <div class="transform hover:scale-105 transition-all duration-300" data-aos="fade-right" data-aos-delay="100">
                <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-shadow">
                    <div class="text-kamaba-bluee mb-6">
                        <i class="fas fa-users text-4xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-kamaba-bluee">Kekeluargaan</h3>
                    <p class="text-gray-600 mb-4">Mempererat hubungan antar mahasiswa Blora melalui berbagai kegiatan sosial, gathering, dan acara kebersamaan.</p>
                    <ul class="text-gray-600 space-y-2">
                        <li>• Pertemuan Rutin Bulanan</li>
                        <li>• Gathering Tahunan</li>
                        <li>• Forum Diskusi Online</li>
                    </ul>
                </div>
            </div>

            <!-- Akademik Card -->
            <div class="transform hover:scale-105 transition-all duration-300" data-aos="fade-up" data-aos-delay="200">
                <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-shadow">
                    <div class="text-kamaba-bluee mb-6">
                        <i class="fas fa-graduation-cap text-4xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-kamaba-bluee">Akademik</h3>
                    <p class="text-gray-600 mb-4">Mendukung pengembangan akademik melalui program mentoring, diskusi, dan berbagi pengalaman.</p>
                    <ul class="text-gray-600 space-y-2">
                        <li>• Program Mentoring</li>
                        <li>• Seminar Akademik</li>
                        <li>• Pelatihan Soft Skills</li>
                    </ul>
                </div>
            </div>

            <!-- Pengabdian Card -->
            <div class="transform hover:scale-105 transition-all duration-300" data-aos="fade-left" data-aos-delay="300">
                <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-shadow">
                    <div class="text-kamaba-bluee mb-6">
                        <i class="fas fa-hands-helping text-4xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-kamaba-bluee">Pengabdian</h3>
                    <p class="text-gray-600 mb-4">Berkontribusi untuk kemajuan Kabupaten Blora melalui program sosial dan pemberdayaan masyarakat.</p>
                    <ul class="text-gray-600 space-y-2">
                        <li>• Program Bakti Sosial</li>
                        <li>• Pengabdian Masyarakat</li>
                        <li>• Edukasi Masyarakat</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Additional Features Section -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-12">
            <!-- Innovation Hub -->
            <div class="bg-white p-8 rounded-2xl shadow-lg" data-aos="fade-right" data-aos-delay="400">
                <div class="flex items-start space-x-4">
                    <div class="flex-shrink-0">
                        <i class="fas fa-lightbulb text-3xl text-kamaba-bluee"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold mb-3 text-kamaba-bluee">Innovation Hub</h3>
                        <p class="text-gray-600">Wadah kreativitas dan inovasi bagi mahasiswa Blora untuk mengembangkan solusi bagi permasalahan daerah.</p>
                    </div>
                </div>
            </div>

            <!-- Career Development -->
            <div class="bg-white p-8 rounded-2xl shadow-lg" data-aos="fade-left" data-aos-delay="500">
                <div class="flex items-start space-x-4">
                    <div class="flex-shrink-0">
                        <i class="fas fa-briefcase text-3xl text-kamaba-bluee"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold mb-3 text-kamaba-bluee">Career Development</h3>
                        <p class="text-gray-600">Program pengembangan karir dan networking untuk mempersiapkan masa depan mahasiswa Blora.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
[data-aos] {
    opacity: 0;
    transition-property: opacity, transform;
    transition-duration: 1000ms;
}

[data-aos="fade-up"] {
    transform: translateY(50px);
}

[data-aos="fade-right"] {
    transform: translateX(-50px);
}

[data-aos="fade-left"] {
    transform: translateX(50px);
}

[data-aos].aos-animate {
    opacity: 1;
    transform: translate(0);
}
</style>

<script>
// Simple AOS (Animate On Scroll) Implementation
const observerOptions = {
    threshold: 0.1
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('aos-animate');
        }
    });
}, observerOptions);

// Observe all elements with data-aos attribute
document.addEventListener('DOMContentLoaded', () => {
    const elements = document.querySelectorAll('[data-aos]');
    elements.forEach(element => observer.observe(element));
});

// Add delay to animations based on data-aos-delay attribute
document.querySelectorAll('[data-aos-delay]').forEach(element => {
    const delay = element.getAttribute('data-aos-delay');
    element.style.transitionDelay = delay + 'ms';
});
</script>