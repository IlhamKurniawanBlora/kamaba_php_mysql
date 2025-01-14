<!-- Blog Section -->
<section id="news" class="py-16 bg-gradient-to-b from-gray-50 to-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-12" data-aos="fade-down">
            <h2 class="text-4xl font-extrabold text-kamaba-bluee mb-4">Berita Terkini</h2>
            <div class="w-24 h-1 bg-kamaba-bluee mx-auto rounded-full"></div>
        </div>

        <!-- Blog Grid -->
        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
            <?php foreach ($blogs as $blog): ?>
            <!-- Blog Card -->
            <article class="group bg-white rounded-2xl overflow-hidden shadow-lg transform transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl" 
                     data-aos="fade-up" 
                     data-aos-duration="1000"
                     data-aos-offset="200">
                <!-- Image Container -->
                <?php if ($blog['image_url']): ?>
                <div class="relative overflow-hidden h-56">
                    <img class="w-full h-full object-cover transform transition-transform duration-500 group-hover:scale-110" 
                         src="<?php echo htmlspecialchars($blog['image_url']); ?>" 
                         alt="<?php echo htmlspecialchars($blog['title']); ?>">
                    <!-- Overlay on Hover -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                </div>
                <?php endif; ?>

                <!-- Content Container -->
                <div class="p-6">
                    <!-- Category Tag -->
                    <div class="mb-4">
                        <span class="inline-block px-3 py-1 text-sm font-semibold text-kamaba-bluee bg-blue-50 rounded-full">
                            Berita
                        </span>
                    </div>

                    <!-- Title -->
                    <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-kamaba-bluee transition-colors duration-300">
                        <?php echo htmlspecialchars($blog['title']); ?>
                    </h3>

                    <!-- Excerpt -->
                    <p class="text-gray-600 mb-4 line-clamp-3">
                        <?php echo substr(strip_tags($blog['content']), 0, 150) . '...'; ?>
                    </p>

                    <!-- Author and Date Info -->
                    <div class="flex items-center mb-4">
                        <div class="w-10 h-10 rounded-full bg-gray-200 flex items-center justify-center mr-3">
                            <i class="fas fa-user text-gray-400"></i>
                        </div>
                        <div>
                            <p class="text-sm font-semibold text-gray-900">
                                <?php echo htmlspecialchars($blog['author_name']); ?>
                            </p>
                            <p class="text-sm text-gray-500">
                                <?php echo date('d M Y', strtotime($blog['created_at'])); ?>
                            </p>
                        </div>
                    </div>

                    <!-- Read More Button -->
                    <div class="relative">
                        <a href="detail_blog.php?id=<?php echo htmlspecialchars($blog['id']); ?>" 
                           class="inline-flex items-center w-full justify-center px-6 py-3 bg-kamaba-bluee text-white rounded-lg transition-all duration-300 hover:bg-blue-700 transform hover:-translate-y-1">
                            <span>Baca Selengkapnya</span>
                            <svg class="w-4 h-4 ml-2 transition-transform duration-300 group-hover:translate-x-1" 
                                 fill="none" 
                                 stroke="currentColor" 
                                 viewBox="0 0 24 24">
                                <path stroke-linecap="round" 
                                      stroke-linejoin="round" 
                                      stroke-width="2" 
                                      d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<style>
/* Animations */
[data-aos] {
    opacity: 0;
    transition-property: opacity, transform;
    transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
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

/* Line Clamp */
.line-clamp-3 {
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

/* Button Hover Effect */
.group:hover .group-hover\:translate-x-1 {
    transform: translateX(4px);
}
</style>

<script>
// Initialize Intersection Observer for scroll animations
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

    // Add staggered delay to blog cards
    document.querySelectorAll('[data-aos="fade-up"]').forEach((element, index) => {
        element.style.transitionDelay = `${index * 100}ms`;
    });
});
</script>