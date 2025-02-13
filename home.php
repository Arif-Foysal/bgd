<?php
require 'config/config.php'; // Include your database connection
require_once 'config/Database.php';
require_once 'classes/News.php';
require_once 'classes/SessionManager.php';

SessionManager::startSession();

$news = new News();

$latest_news = $news->getLatestNews(6);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bangladesh Ganatantik Dol</title>
    <link rel="stylesheet" href="src/output.css">
</head>
<body>
<?php
     // require_once  'partials/language_nav.php';
        include_once 'nav.php';
    ?>
<section class="max-w-6xl mx-auto ">

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 w-full mx-auto ">
    <div class="col-span-1 md:col-span-2 lg:col-span-2  text-white flex flex-col items-start gap-2 justify-start p-4">

<img class="rounded-md" src="static/images/party-open-pic.jpg" alt="">
<h1 class="text-blue-900 text-3xl">ঘোষণা</h1>
<p class="text-black">আমরা গত ৩০ নভেম্বর ২০২৪ তারিখে এক সংবাদ সম্মেলনের মাধ্যমে বাংলাদেশে গণতান্ত্রিক পার্টি-BGP নামে নতুন রাজনৈতিক দলের ঘোষণা দিয়েছিলাম। কিন্তু আমরা লক্ষ করেছি যে, উক্ত নামে একটি পার্টি তাদের কার্যক্রম পরিচালনা করছে। সে কারনে জনমনে বিভ্রান্তি নিরসনের লক্ষ্যে গত ০৫/১২/২০২৪ খ্রিঃ তারিখে আমাদের পার্টির গঠনতন্ত্র উপ-কমিটি ও আহবায়ক কমিটির যৌথ সভায় পার্টির নাম পরিবর্তন করে বাংলাদেশ গণতান্ত্রিক দল-BGD করছি।</p>

    </div>
    <div class=" flex flex-col items-start justify-start p-4">
    <h1 class="text-blue-900 text-3xl">আপডেট</h1>

    <?php
              if (!empty($latest_news)) {
                $count = 0;
                foreach ($latest_news as $news_item) {
                  if ($count > 5) break;
                  echo '<p style="border-bottom: 1.5px solid red; 
                  width:100%; padding-top:10px;
                  padding-bottom:10px; text-align: left;">';
                  echo '<a href="news.php?id=' . $news_item['id'] . '">' . $news_item['news_title_bangla'] . '</a>';
                  echo '</p>';
                  $count++;
                }
                if (count($latest_news) > 5) {
                  echo '<p style="text-align: left;"><a href="news.php">আরও দেখুন</a></p>';
                }
              }
              ?>

    </div>
    <div class="flex flex-col items-start justify-center p-4 gap-2">
    <img src="static/images/newspaper-1.jpeg" alt="">
    <img src="static/images/newspaper-2.jpeg" alt="">
    </div>
</div>
<h1 class="text-blue-900 text-3xl">নিউজ আর্টিকেল</h1>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 w-full mx-auto p-4">
  <div class=" p-4 rounded-md">
  <img src="static/images/newspaper-1.jpeg" alt="Grid Item 1 Image" class="rounded-sm mb-2 w-full h-32 object-cover">
  <p>Additional text below the image for the first grid item.</p>
  </div>
  <div class=" p-4 rounded-md">
  <img src="static/images/newspaper-2.jpeg" alt="Grid Item 1 Image" class="rounded-sm mb-2 w-full h-32 object-cover">
  <p>Additional text below the image for the first grid item.</p>
  </div>
  <div class="p-4 rounded-md">
  <img src="static/images/newspaper-1.jpeg" alt="Grid Item 1 Image" class="rounded-sm mb-2 w-full h-32 object-cover">
  <p class="text-blue-900">Additional text below the image for the first grid item.</p>
  </div>
  <div class=" p-4 rounded-md">
  <img src="static/images/newspaper-2.jpeg" alt="Grid Item 1 Image" class="rounded-sm mb-2 w-full h-32 object-cover">
  <p>Additional text below the image for the first grid item.</p>
  </div>
</div>
    
</section>


</body>
</html>