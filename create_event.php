<?php
session_start();
require_once 'config/db.php';
$pageTitle = "Kamaba News || Create Event"; // Judul default jika halaman tidak dikenali

include 'middleware.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $event_date = $_POST['event_date'];
    $created_by = $_SESSION['user_id'];

    $stmt = $pdo->prepare("INSERT INTO events (title, description ,event_date, created_by) VALUES (?, ?, ?, ?)");
    $stmt->execute([$title, $description, $event_date, $created_by]);

    header("Location: dashboard.php");
    exit();
}
?>

<?php require_once 'layouts/_top.php'; ?>

<div class="max-w-3xl mx-auto py-6 sm:px-6 lg:px-8">
    <form method="POST" enctype="multipart/form-data" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="title">
                Event title
            </label>
            <input type="text" title="title" id="title" name="title"
                   class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>
        <!-- Input Description -->
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="description">
                Description
            </label>
            <textarea title="description" id="description" rows="4" name="description"
                      class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                      required></textarea>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="event_date">
                Event Date
            </label>
            <input type="date" title="event_date" id="event_date" name="event_date"
                   class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>
        <div class="flex items-center justify-between">
            <button type="submit" 
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Add Event
            </button>
        </div>
    </form>
</div>

<?php require 'layouts/_bottom.php'; ?>
