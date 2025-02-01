<?php
require_once __DIR__ . '/../classes/Policy.php';

$policy = new Policy(); 
$categories = $policy->getCategories();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Policy Categories</title>
</head>
<body>
    <h1>Policy Categories</h1>
    <ul>
        <?php foreach ($categories as $category): ?>
            <li><a href="topics.php?category_id=<?= $category['id']; ?>"><?= htmlspecialchars($category['name']); ?></a></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
