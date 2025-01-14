<?php
require_once 'config/db.php';

// Fetch latest 5 blogs
$stmt = $pdo->query("
    SELECT blogs.*, users.name as author_name 
    FROM blogs 
    JOIN users ON blogs.created_by = users.id 
    ORDER BY blogs.created_at DESC 
    LIMIT 5
");
$blogs = $stmt->fetchAll();

// Fetch upcoming events
$stmt = $pdo->query("
    SELECT * FROM events 
    WHERE event_date >= CURRENT_DATE 
    ORDER BY event_date ASC 
    LIMIT 3
");
$events = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KAMABA - Keluarga Mahasiswa Blora</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        html {
            scroll-behavior: smooth;
        }

    </style>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        kamaba: {
                            bluee: '#0A75AD',
                            blue: '#7CC9D1',
                            yellow: '#FFD700',
                            green: '#228B22'
                        }
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <?php include_once 'components/nav.php'; ?>

    <!-- Hero Section with Oil Tower Background -->
    <?php include_once 'components/hero.php'; ?>

    <!-- About Section -->
    <?php include_once 'components/about.php'; ?>

    <!-- Latest News Section -->
    <?php include_once 'components/blog.php'; ?>

    <!-- Events Section -->
    <?php include_once 'components/event.php'; ?>

    <!-- Contact Section -->
    <?php include_once 'components/contact.php'; ?>

    <!-- Footer -->
    <?php include_once 'components/footer.php'; ?>
</body>
</html>