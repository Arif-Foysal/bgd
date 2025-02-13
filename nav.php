<?php
require_once __DIR__ . '/classes/SessionManager.php';

SessionManager::startSession();
// Check if the language is set via the query parameterf
if (isset($_GET['lang']) && $_GET['lang'] === 'en') {
    
        // Set session('en') to 1 when English is selected
        SessionManager::set('en', 1);
        // Remove Bangla session if present
}
elseif (isset($_GET['lang']) && $_GET['lang'] === 'bn') {
    
        // Set session('en') to 0 when Bangla is selected
        SessionManager::remove('en');
        // Remove English session if present
}

$englishBg = SessionManager::has('en') ? 'bg-red-700 text-white' : 'bg-gray-200';
$banglaBg = !SessionManager::has('en') ? 'bg-red-700 text-white' : 'bg-gray-200';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="src/output.css">
    <style>
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }
        .dropdown:hover .dropdown-content {
            display: block;
        }
    </style>
</head>
<body>
    <section class="sticky top-0 z-50">
    

<nav class="bg-white border-gray-200 px-4">
    <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-4">
        <a href="https://flowbite.com" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="static/images/logo.jpeg" class="h-16" alt="Bangladesh Ganatantrik Dol Logo" />
            <span class="self-center text-4xl font-semibold whitespace-nowrap ">বাংলাদেশ গণতান্ত্রিক দল</span>
        </a>
        <div class="flex items-center space-x-3 rtl:space-x-reverse">
        <div class="<?php echo $englishBg; ?> px-2 py-1 rounded-sm">
                <a href="<?php echo basename($_SERVER['PHP_SELF']) . '?' . http_build_query(array_merge($_GET, ['lang' => 'en'])); ?>">English</a>
            </div>
            <div class="<?php echo $banglaBg; ?> px-2 py-1 rounded-sm">
                <a href="<?php echo basename($_SERVER['PHP_SELF']) . '?' . http_build_query(array_merge($_GET, ['lang' => 'bn'])); ?>">বাংলা</a>
            </div>
        </div>
    </div>
</nav>
<!-- <nav class="bg-gray-50">
    <div class="max-w-screen-xl px-4 py-3 mx-auto">
        <div class="flex items-center">
            <ul class="flex flex-row font-medium mt-0 space-x-8 rtl:space-x-reverse text-sm">
                <li>
                    <a href="#" class="text-gray-900" aria-current="page">Home</a>
                </li>
                <li>
                    <a href="#" class="text-gray-900 hover:underline">Company</a>
                </li>
                <li>
                    <a href="#" class="text-gray-900  hover:underline">Team</a>
                </li>
                <li>
                    <a href="#" class="text-gray-900 hover:underline">Features</a>
                </li>
            </ul>
        </div>
    </div>
</nav> -->

<nav class="bg-gray-50 px-4">
        <div class="max-w-screen-xl px-4 py-3 mx-auto">
            <div class="flex items-center">
                <ul class="flex flex-row font-medium mt-0 space-x-8 rtl:space-x-reverse text-sm">
                    <li>
                        <a href="home.php" class="text-gray-900 font-semibold text-md flex items-center gap-1" aria-current="page">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
  <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5"/>
</svg>
                            <p>হোম</p>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="text-gray-900 font-semibold text-md" aria-current="page"><div class="flex items-center">
                            <p>দল</p>
                            &nbsp;
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
</svg>
                        </div></a>
                        <div class="dropdown-content">
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Dashboard</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Settings</a>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="text-gray-900 hover:underline font-semibold text-md"><div class="flex items-center">
                            <p>আপডেট</p>
                            &nbsp;
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
</svg>
                        </div></a>
                        <div class="dropdown-content">
                            <a href="about.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">About</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Careers</a>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="text-gray-900 hover:underline font-semibold text-md"><div class="flex items-center">
                            <p>ইতিহাস</p>
                            &nbsp;
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
</svg>
                        </div></a>
                        <div class="dropdown-content">
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Leadership</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Departments</a>
                        </div>
                    </li>
                    <li class="">
                        <a href="join.php" class="text-gray-900 hover:underline font-semibold text-md">যোগ দিন</a>
                    </li>
                     <li class="">
                        <a href="about.php" class="text-gray-900 hover:underline font-semibold text-md">আমাদের সম্পর্কে</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    </section>
<script>
        // Add down arrows to main menu items
        // document.querySelectorAll('.dropdown > a').forEach(function(link) {
        //     link.innerHTML += ' ﹀';
        // });

        // Optional: Close dropdowns when clicking outside
        document.addEventListener('click', function(event) {
            if (!event.target.closest('.dropdown')) {
                document.querySelectorAll('.dropdown-content').forEach(function(dropdown) {
                    dropdown.style.display = 'none';
                });
            }
        });
    </script>


</body>
</html>