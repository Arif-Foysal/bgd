<?php
require_once __DIR__ . '/../classes/Policy.php';

if (!isset($_GET['category_id'])) {
    die("Invalid category");
}

$policy = new Policy();
$topics = $policy->getTopics($_GET['category_id']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Policy Topics</title>
</head>
<body>
    <h1>Policy Topics</h1>
    <ul>
        <?php foreach ($topics as $topic): ?>
            <li><a href="details.php?topic_id=<?= $topic['id']; ?>"><?= htmlspecialchars($topic['name']); ?></a></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
