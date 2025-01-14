<?php
session_start();
require_once 'config/db.php';
require_once 'session.php';
$pageTitle = "Kamaba News || Home"; // Judul default jika halaman tidak dikenali

// Check if user is logged in
include 'middleware.php';

if ($user_role === 'admin') {
    // Fetch blogs and events created by the admin
    $stmt = $pdo->prepare("
        SELECT blogs.*, users.name as author_name, 
               (SELECT COUNT(*) FROM activities WHERE activities.blog_id = blogs.id) as activity_count
        FROM blogs 
        JOIN users ON blogs.created_by = users.id 
        WHERE blogs.created_by = :users_id
        ORDER BY blogs.created_at DESC
    ");
    $stmt->execute(['users_id' => $user_id]);
    $blogs = $stmt->fetchAll();

    $stmt = $pdo->prepare("
        SELECT * FROM events 
        WHERE created_by = :users_id 
        ORDER BY event_date ASC
    ");
    $stmt->execute(['users_id' => $user_id]);
    $events = $stmt->fetchAll();
} elseif ($user_role === 'super_admin') {
    // Fetch all blogs and events
    $stmt = $pdo->query("
        SELECT blogs.*, users.name as author_name, 
               (SELECT COUNT(*) FROM activities WHERE activities.blog_id = blogs.id) as activity_count
        FROM blogs 
        JOIN users ON blogs.created_by = users.id 
        ORDER BY blogs.created_at DESC
    ");
    $blogs = $stmt->fetchAll();

    $stmt = $pdo->query("
        SELECT * FROM events 
        ORDER BY event_date ASC
    ");
    $events = $stmt->fetchAll();
} else {
    // Handle unauthorized access (optional)
    die("Unauthorized access.");
}

// Handle blog deletion
if (isset($_POST['delete_blog'])) {
    $blog_id = $_POST['blog_id'];
    $stmt = $pdo->prepare("DELETE FROM blogs WHERE id = ?");
    $stmt->execute([$blog_id]);
    header("Location: dashboard.php");
    exit();
}

// Handle event deletion
if (isset($_POST['delete_event'])) {
    $event_id = $_POST['event_id'];
    $stmt = $pdo->prepare("DELETE FROM events WHERE id = ?");
    $stmt->execute([$event_id]);
    header("Location: dashboard.php");
    exit();
}

?>
<?php require 'layouts/_top.php'; ?>


<div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
    <div class="px-4 py-6 sm:px-0">
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
    <div class="px-4 py-6 sm:px-0">
        <!-- Blog Posts Section -->
        <div class="mb-10">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-bold text-gray-900">Blog Posts</h2>
                <a href="create_blog.php" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">
                    Create New Post
                </a>
            </div>
            <div class="bg-white shadow overflow-hidden sm:rounded-md">
                <ul class="divide-y divide-gray-200">
                    <?php if (empty($blogs)): ?>
                        <li class="px-6 py-4 text-center text-gray-500">No blogs available.</li>
                    <?php else: ?>
                        <?php foreach ($blogs as $blog): ?>
                            <li class="px-6 py-4">
                                <div class="flex items-center justify-between">
                                    <div>
                                        <h3 class="text-lg font-medium text-gray-900">
                                            <?php echo htmlspecialchars($blog['title']); ?>
                                        </h3>
                                        <p class="text-sm text-gray-500">
                                            By <?php echo htmlspecialchars($blog['author_name']); ?> | 
                                            <?php echo date('F j, Y', strtotime($blog['created_at'])); ?> |
                                            <?php echo $blog['activity_count']; ?> activities
                                        </p>
                                    </div>
                                    <div class="flex space-x-2">
                                        <a href="edit_blog.php?id=<?php echo $blog['id']; ?>" 
                                           class="text-blue-600 hover:text-blue-800">Edit</a>
                                        <?php if ($_SESSION['user_role'] === 'super_admin'): ?>
                                            <form method="POST" class="inline" onsubmit="return confirm('Are you sure?');">
                                                <input type="hidden" name="blog_id" value="<?php echo $blog['id']; ?>">
                                                <button type="submit" name="delete_blog" 
                                                        class="text-red-600 hover:text-red-800">Delete</button>
                                            </form>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </ul>
            </div>
        </div>

        <!-- Events Section -->
        <div>
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-bold text-gray-900">Upcoming Events</h2>
                <a href="create_event.php" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">
                    Create New Event
                </a>
            </div>
            <div class="bg-white shadow overflow-hidden sm:rounded-md">
                <ul class="divide-y divide-gray-200">
                    <?php if (empty($events)): ?>
                        <li class="px-6 py-4 text-center text-gray-500">No events available.</li>
                    <?php else: ?>
                        <?php foreach ($events as $event): ?>
                        <li class="px-6 py-4">
                            <div class="flex items-center justify-between">
                                <div>
                                    <h3 class="text-lg font-medium text-gray-900">
                                        <?php echo htmlspecialchars($event['title']); ?>
                                    </h3>
                                    <p class="text-sm text-gray-500">
                                        <?php echo date('F j, Y', strtotime($event['event_date'])); ?>
                                    </p>
                                    <p class="text-sm text-gray-500">
                                        <?php echo htmlspecialchars($event['description']); ?>
                                    </p>
                                </div>
                                <div class="flex space-x-2">
                                    <a href="edit_event.php?id=<?php echo $event['id']; ?>" 
                                    class="text-blue-600 hover:text-blue-800">Edit</a>
                                    <?php if ($_SESSION['user_role'] === 'super_admin'): ?>
                                    <form method="POST" class="inline" onsubmit="return confirm('Are you sure?');">
                                        <input type="hidden" name="event_id" value="<?php echo $event['id']; ?>">
                                        <button type="submit" name="delete_event" 
                                                class="text-red-600 hover:text-red-800">Delete</button>
                                    </form>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </li>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>
</div>

    </div>
</div>

</body>
</html>