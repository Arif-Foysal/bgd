<?php
require_once 'config/Database.php';
require_once 'classes/SessionManager.php';
require_once 'classes/News.php';


SessionManager::startSession();

// Instantiate the News class
$news = new News();

if (!isset($_SESSION["admin_id"])) {
    header("Location: login.php");
    exit();
}
$conn = Database::connect();

try {
    $stmt = $conn->query("SELECT * FROM join_requests");
    $joinRequests = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Error fetching data: " . $e->getMessage());
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/output.css">
    <title>Dashboard</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.4.7/flowbite.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.4.7/flowbite.min.js"></script>
</head>
<body>
    
<div class="p-4 flex justify-end">
    <a class="bg-red-700 text-white p-2 rounded-lg" href="logout.php">Log Out</a>
</div>

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <h1 class="font-semibold text-2xl p-4">Join Requests</h1>
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">ID</th>
                <th scope="col" class="px-6 py-3">Name</th>
                <th scope="col" class="px-6 py-3">Gender</th>
                <th scope="col" class="px-6 py-3">Status</th>
                <th scope="col" class="px-6 py-3"><span class="sr-only">Accept</span></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($joinRequests as $request): ?>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <?= htmlspecialchars($request['id']) ?>
                    </th>
                    <td class="px-6 py-4"><?= htmlspecialchars($request['full_name']) ?></td>
                    <td class="px-6 py-4"><?= htmlspecialchars($request['gender']) ?></td>
                    <td class="px-6 py-4"><?= htmlspecialchars($request['dob']) ?></td>
                    <td class="px-6 py-4 text-right">
                        <a href="edit_request.php?id=<?= $request['id'] ?>" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Accept</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<div class="p-4">
    <h1 class="font-semibold text-2xl p-4">News</h1>
    <div class="flex justify-end">
        <a href="add_news.php" class="rounded-md bg-green-800 text-white p-2">Add new news</a>
    </div>
    <div>
<?php
    $latestNews = $news->getLatestNews();

?>
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">ID</th>
                <th scope="col" class="px-6 py-3">Title</th>
                <th scope="col" class="px-6 py-3">Contents</th>
                <th scope="col" class="px-6 py-3"><span class="sr-only">Edit</span></th>
            </tr>
        </thead>
        <tbody>
            
            <?php foreach ($latestNews as $newsItem): ?>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <?= htmlspecialchars($newsItem['id']) ?>
                    </th>
                    <td class="px-6 py-4"><?= htmlspecialchars($newsItem['news_title_bangla']) ?></td>
                    <td class="px-6 py-4"><?= htmlspecialchars($newsItem['contents_bangla']) ?></td>
                    <td class="px-6 py-4 text-right">
                        <a href="edit_news.php?id=<?= $newsItem['id'] ?>" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    </div>
</div>


</body>
</html>