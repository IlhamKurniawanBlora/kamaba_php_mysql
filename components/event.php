<!-- Events Section -->
<section id="events" class="relative py-20 bg-gradient-to-b from-white to-blue-50 overflow-hidden">
    <!-- Decorative Elements -->
    <div class="absolute inset-0 z-0">
        <div class="absolute top-0 left-0 w-64 h-64 bg-blue-100 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob"></div>
        <div class="absolute top-0 right-0 w-64 h-64 bg-purple-100 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob animation-delay-2000"></div>
        <div class="absolute -bottom-8 left-20 w-64 h-64 bg-pink-100 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob animation-delay-4000"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <!-- Section Header -->
        <div class="text-center mb-16" data-aos="fade-down">
            <h2 class="text-4xl font-extrabold text-kamaba-bluee mb-4">Agenda Mendatang</h2>
            <div class="w-24 h-1 bg-kamaba-bluee mx-auto rounded-full mb-6"></div>
            <p class="text-gray-600 max-w-2xl mx-auto">Ikuti berbagai kegiatan menarik yang telah kami siapkan untuk mengembangkan potensi dan mempererat tali persaudaraan.</p>
        </div>

        <!-- Events Grid -->
        <div class="grid gap-8 md:grid-cols-3 relative">
            <?php foreach ($events as $event): ?>
            <div class="group" data-aos="fade-up" data-aos-delay="<?php echo $loop * 100; ?>">
                <div class="bg-white rounded-2xl p-6 shadow-lg transform transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl relative overflow-hidden">
                    <!-- Event Date Badge -->
                    <div class="absolute -right-12 top-6 transform rotate-45 bg-kamaba-bluee text-white px-12 py-1 text-sm font-semibold">
                        <?php echo date('M', strtotime($event['event_date'])); ?>
                    </div>

                    <!-- Event Icon & Category -->
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mr-4 group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-calendar-alt text-2xl text-kamaba-bluee"></i>
                        </div>
                        <span class="text-sm font-semibold text-kamaba-bluee bg-blue-50 px-3 py-1 rounded-full">
                            Event
                        </span>
                    </div>

                    <!-- Event Title -->
                    <h3 class="text-xl font-bold mb-3 text-gray-900 group-hover:text-kamaba-bluee transition-colors duration-300">
                        <?php echo htmlspecialchars($event['title']); ?>
                    </h3>

                    <!-- Event Description -->
                    <p class="text-gray-600 mb-6">
                        <?php echo substr(htmlspecialchars($event['description']), 0, 100) . '...'; ?>
                    </p>

                    <!-- Event Details -->
                    <div class="space-y-3 mb-6">
                        <div class="flex items-center text-gray-600">
                            <i class="far fa-clock w-5 text-kamaba-bluee"></i>
                            <span class="ml-2"><?php echo date('d F Y', strtotime($event['event_date'])); ?></span>
                        </div>
                        <div class="flex items-center text-gray-600">
                            <i class="fas fa-map-marker-alt w-5 text-kamaba-bluee"></i>
                            <span class="ml-2"><?php echo htmlspecialchars($event['location']); ?></span>
                        </div>
                    </div>

                    <!-- Action Button -->
                    <a href="detail_event.php?id=<?php echo htmlspecialchars($event['id']); ?>" 
                       class="block w-full text-center bg-kamaba-bluee text-white px-6 py-3 rounded-lg transition-all duration-300 hover:bg-blue-700 transform hover:-translate-y-1">
                        <span class="inline-flex items-center">
                            Detail Event
                            <svg class="w-4 h-4 ml-2 transform transition-transform duration-300 group-hover:translate-x-1" 
                                 fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </span>
                    </a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<style>
/* Blob Animation */
@keyframes blob {
    0% { transform: translate(0, 0) scale(1); }
    33% { transform: translate(30px, -50px) scale(1.1); }
    66% { transform: translate(-20px, 20px) scale(0.9); }
    100% { transform: translate(0, 0) scale(1); }
}

.animate-blob {
    animation: blob 7s infinite;
}

.animation-delay-2000 {
    animation-delay: 2s;
}

.animation-delay-4000 {
    animation-delay: 4s;
}

/* Scroll Animations */
[data-aos] {
    opacity: 0;
    transition-property: all;
    transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
    transition-duration: 1000ms;
}

[data-aos="fade-up"] {
    transform: translateY(30px);
}

[data-aos="fade-down"] {
    transform: translateY(-30px);
}

[data-aos].aos-animate {
    opacity: 1;
    transform: translate(0);
}
</style>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('aos-animate');
            } else {
                entry.target.classList.remove('aos-animate'); // Re-animate when scrolling back up
            }
        });
    }, {
        threshold: 0.1,
        rootMargin: '50px'
    });

    // Observe all elements with data-aos attribute
    document.querySelectorAll('[data-aos]').forEach(element => {
        observer.observe(element);
    });
});
</script>