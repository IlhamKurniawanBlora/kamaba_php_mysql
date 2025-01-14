<?php
session_start();
require_once 'config/db.php';
$pageTitle = "Kamaba News || Edit Event"; // Judul default jika halaman tidak dikenali

// Check if user is logged in
include 'middleware.php';

$user_id = $_SESSION['user_id'];
$user_role = $_SESSION['user_role'];

// Check if the event ID is provided
$event_id = $_GET['id'] ?? null;

if (!$event_id) {
    header("Location: dashboard.php");
    exit();
}

// Fetch event details
$stmt = $pdo->prepare("SELECT * FROM events WHERE id = ?");
$stmt->execute([$event_id]);
$event = $stmt->fetch();

if (!$event || ($user_role === 'admin' && $event['created_by'] != $user_id)) {
    header("Location: dashboard.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $event_date = $_POST['event_date'];

    $stmt = $pdo->prepare("UPDATE events SET title = ?, description = ?, event_date = ? WHERE id = ?");
    $stmt->execute([$title, $description, $event_date, $event_id]);

    header("Location: dashboard.php");
    exit();
}
?>

<?php require 'layouts/_top.php'; ?>

<div class="max-w-3xl mx-auto py-6 sm:px-6 lg:px-8">
    <form method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <!-- Input Title -->
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="title">
                Event Title
            </label>
            <input type="text" name="title" id="title" value="<?php echo htmlspecialchars($event['title']); ?>"
                   class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                   required>
        </div>
        <!-- Input Description -->
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="description">
                Description
            </label>
            <textarea name="description" id="description" rows="4"
                      class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                      required><?php echo htmlspecialchars($event['description']); ?></textarea>
        </div>
        <!-- Input Event Date -->
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="event_date">
                Event Date
            </label>
            <input type="date" name="event_date" id="event_date" value="<?php echo htmlspecialchars($event['event_date']); ?>"
                   class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                   required>
        </div>
        <!-- Submit Button -->
        <div class="flex items-center justify-between">
            <button type="submit" 
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Save Changes
            </button>
        </div>
    </form>
</div>

<?php require 'layouts/_bottom.php'; ?>
