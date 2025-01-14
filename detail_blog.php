<?php
require_once 'config/db.php';

// Check if blog ID is provided
if (!isset($_GET['id'])) {
    header("Location: index.php");
    exit();
}

$blog_id = $_GET['id'];

// Fetch blog details
$stmt = $pdo->prepare("
    SELECT blogs.*, users.name as author_name 
    FROM blogs 
    JOIN users ON blogs.created_by = users.id 
    WHERE blogs.id = ?
");
$stmt->execute([$blog_id]);
$blog = $stmt->fetch();

if (!$blog) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($blog['title']); ?> - KAMABA</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <?php include_once 'components/detail_nav.php'; ?>

    <!-- Blog Detail Section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <?php if ($blog['image_url']): ?>
            <img class="w-full h-64 object-cover" 
                 src="<?php echo htmlspecialchars($blog['image_url']); ?>" 
                 alt="<?php echo htmlspecialchars($blog['title']); ?>">
            <?php endif; ?>
            <div class="p-6">
                <h1 class="text-3xl font-bold text-gray-900 mb-4">
                    <?php echo htmlspecialchars($blog['title']); ?>
                </h1>
                <div class="text-gray-600 mb-4">
                    <?php echo nl2br(htmlspecialchars($blog['content'])); ?>
                </div>
                <div class="flex justify-between items-center">
                    <span class="text-sm text-gray-500">
                        Oleh <?php echo htmlspecialchars($blog['author_name']); ?>
                    </span>
                    <span class="text-sm text-gray-500">
                        <?php echo date('d F Y', strtotime($blog['created_at'])); ?>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include_once 'components/footer.php'; ?>
</body>
</html>