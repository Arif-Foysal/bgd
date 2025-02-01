<?php
// require_once 'partials/dbconnect.php';
require_once __DIR__ . '/classes/Policy.php';

$policy = new Policy();
$categories = $policy->getCategories();
$categoryId = isset($_GET['category_id']) ? $_GET['category_id'] : $categories[0]['id'];
$topicsWithDetails = $policy->getTopicsWithDetails($categoryId);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
     <link rel="stylesheet" href="src/output.css">
<!-- Bootstrap cdn -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <section class="max-w-7xl mx-auto flex justify-center ">
        <div class=" flex justify-around gap-2">
            <div id="main-content" class="w-2/3">
            <div class="hs-accordion-group ">
            <?php foreach ($topicsWithDetails as $topicDetails): ?>
  <div class="hs-accordion active" id="hs-basic-with-arrow-heading-one">
    <button class="hs-accordion-toggle hs-accordion-active:text-blue-600 py-3 inline-flex items-center gap-x-3  font-semibold text-start text-gray-800 hover:text-gray-500 focus:outline-none focus:text-gray-500 rounded-lg disabled:opacity-50 disabled:pointer-events-none" aria-expanded="true" aria-controls="hs-basic-with-arrow-collapse-one">
      <svg class="hs-accordion-active:hidden block size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <path d="m6 9 6 6 6-6"></path>
      </svg>
      <svg class="hs-accordion-active:block hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <path d="m18 15-6-6-6 6"></path>
      </svg>

      <?= htmlspecialchars($topicDetails['topic_description']); ?>
    </button>
    <div id="hs-basic-with-arrow-collapse-one" class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300" role="region" aria-labelledby="hs-basic-with-arrow-heading-one">
      <p class="text-gray-800">
        <?= htmlspecialchars($topicDetails['policy_content']); ?>
      </p>
    </div>
  </div>
<?php endforeach; ?>

</div>
            </div>
            <div id="navigators" class="">
                <section class="pb-2">
                    <h1 class="text-2xl font-semibold">About Us</h1>
                    <div class="h-1 bg-green-700"></div>
                </section>
                <section class="flex flex-col gap-2">
                <?php foreach ($categories as $category): ?>
                    <button
                        class=" rounded-md border border-2 border-slate-700 py-2 px-4 text-justify text-sm font-medium transition-all shadow-sm hover:shadow-lg text-black hover:text-white hover:bg-green-800 hover:border-green-800 focus:text-white focus:bg-green-800 focus:border-green-800 active:border-green-800 active:text-white active:bg-green-800 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                        type="button"
                        data-id="<?= $category['id']; ?>" 
            onclick="loadTopics(<?= $category['id']; ?>)">
                        <?= htmlspecialchars($category['name']); ?>
                    </button>
        <?php endforeach; ?>
                </section>
            </div>
        </div>
    </section>
    <script src="./node_modules/preline/dist/preline.js"></script>
</body>

</html>