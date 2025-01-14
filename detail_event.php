<?php
require_once 'config/db.php';

// Validate and sanitize the event ID
if (!isset($_GET['id']) || !filter_var($_GET['id'], FILTER_VALIDATE_INT)) {
    header("Location: index.php");
    exit();
}

$event_id = intval($_GET['id']);

// Fetch event details
$stmt = $pdo->prepare("SELECT * FROM events WHERE id = ?");
$stmt->execute([$event_id]);
$event = $stmt->fetch();

if (!$event) {
    // Event not found
    http_response_code(404);
    echo "<h1>404 - Event Not Found</h1>";
    echo "<p>The event you are looking for does not exist.</p>";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($event['title']); ?> - KAMABA</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .fade-in {
            animation: fadeIn 0.8s ease-in-out;
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <?php include_once 'components/detail_nav.php'; ?>

    <!-- Event Detail Section -->
    <div class="pt-24 pb-12 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <?php if (!empty($event['image_url'])): ?>
                <img class="w-full h-64 object-cover fade-in" 
                     src="<?php echo htmlspecialchars($event['image_url']); ?>" 
                     alt="<?php echo htmlspecialchars($event['title']); ?>">
            <?php endif; ?>

            <div class="p-8 relative">
                <!-- Decorative Elements -->
                <div class="absolute top-0 left-0 w-20 h-20 bg-blue-100 rounded-full -translate-x-8 -translate-y-8"></div>
                <div class="absolute bottom-0 right-0 w-16 h-16 bg-blue-200 rounded-full translate-x-6 translate-y-6"></div>

                <h1 class="text-5xl font-extrabold text-gray-900 mb-6 fade-in">
                    <i class="fas fa-star text-yellow-400 mr-2"></i>
                    <?php echo htmlspecialchars($event['title']); ?>
                </h1>

                <p class="text-gray-700 leading-relaxed text-lg mb-6 fade-in">
                    <?php echo nl2br(htmlspecialchars($event['description'])); ?>
                </p>

                <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center fade-in">
                    <span class="flex items-center text-gray-500 text-lg mb-4 sm:mb-0">
                        <i class="far fa-clock mr-2 text-blue-600"></i>
                        <?php echo date('d F Y', strtotime($event['event_date'])); ?>
                    </span>
                    <span class="flex items-center text-gray-500 text-lg">
                        <i class="fas fa-map-marker-alt mr-2 text-red-500"></i>
                        <?php echo htmlspecialchars($event['location']); ?>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <!-- Call to Action Section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="bg-gradient-to-r from-blue-500 to-blue-700 text-white rounded-lg shadow-lg p-8 text-center">
            <h2 class="text-3xl font-bold mb-4">Ingin tahu lebih banyak tentang acara kami?</h2>
            <p class="mb-6">Gabung bersama kami dan jadilah bagian dari kegiatan KAMABA untuk masa depan yang lebih baik.</p>
            <a href="index.php" class="bg-white text-blue-700 font-bold px-6 py-3 rounded-md shadow hover:scale-105 transition-transform">
                Kembali ke Beranda
            </a>
        </div>
    </div>

    <!-- Footer -->
    <?php include_once 'components/detail_footer.php'; ?>
</body>
</html>
