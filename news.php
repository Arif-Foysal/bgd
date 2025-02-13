<?php
// Include necessary files
require_once 'classes/News.php';

// Instantiate the News class
$news = new News();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/output.css">
    <title>Document</title>
</head>
<body>
    <?php
    
    

// Check if 'id' is passed in the URL
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    // Fetch the single news by ID
    $newsItem = $news->getNewsById($_GET['id']);

    if ($newsItem) {
        // Display the full news item
        ?>

<section class="max-w-6xl mx-auto flex justify-center">
    <div class="flex justify-around gap-2 w-full">
        <div id="main-content" class="w-2/3">
            <h1 class="font-semibold text-3xl">খবর</h1>
            <div class="hs-accordion-group">
                <div class="hs-accordion active" id="hs-basic-with-arrow-heading-one">
                    <button class="hs-accordion-toggle hs-accordion-active:text-blue-600 py-3 inline-flex items-center gap-x-3 font-semibold text-start text-2xl text-gray-800 hover:text-gray-500 focus:outline-none rounded-lg disabled:opacity-50 disabled:pointer-events-none" aria-expanded="true" aria-controls="hs-basic-with-arrow-collapse-one">
                        <svg class="hs-accordion-active:hidden block size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m6 9 6 6 6-6"></path>
                        </svg>
                        <svg class="hs-accordion-active:block hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m18 15-6-6-6 6"></path>
                        </svg>
                        <?= htmlspecialchars($newsItem['news_title_bangla']); ?>
                    </button>
                    <div id="hs-basic-with-arrow-collapse-one" class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300" role="region" aria-labelledby="hs-basic-with-arrow-heading-one">
                        <p class="text-gray-800">
                            <?= nl2br(htmlspecialchars($newsItem['contents_bangla'])); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <p><strong>Published on: </strong><?= $newsItem['created_at']; ?></p>
</section>

        <?php
    } else {
        // If no news found with the given ID
        echo "News not found.";
    }
} else {
    // Fetch the latest news (up to 5 news items)
    $latestNews = $news->getLatestNews();
    
    if ($latestNews) {
        // Display a list of news titles
        foreach ($latestNews as $news_item) {
            ?>
            <p  style="border-bottom: 1.5px solid red; padding-bottom:10px; text-align: left;">
                <a class="text-blue-700" href="news.php?id=<?= $news_item['id']; ?>">
                    <?= htmlspecialchars($news_item['news_title_bangla']); ?>
                </a>
            </p>
            <?php
        }
        // Check if there are more than 5 results
        // if (count($latestNews) >= 5) {
        //     echo '<p><a href="all-news.php">See More</a></p>';
        // }
    } else {
        echo "No news available.";
    }
}

// Close the database connection
$news->closeConnection();
?>

<script src="./node_modules/preline/dist/preline.js"></script>
</body>
</html>
