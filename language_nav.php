<?php
require_once __DIR__ . '/classes/SessionManager.php';

SessionManager::startSession();
// Check if the language is set via the query parameter
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

$englishBg = SessionManager::has('en') ? 'bg-green-800 text-white' : 'bg-gray-200';
$banglaBg = !SessionManager::has('en') ? 'bg-green-800 text-white' : 'bg-gray-200';

?>
<html>
    <nav class="px-4 py-2 bg-gray-200">
        <section class="flex justify-start">
            <div class="<?php echo $englishBg; ?> px-2 py-1">
                <a href="about.php?<?php echo http_build_query(array_merge($_GET, ['lang' => 'en'])); ?>">English</a>
            </div>
            <div class="<?php echo $banglaBg; ?> px-2 py-1">
                <a href="about.php?<?php echo http_build_query(array_merge($_GET, ['lang' => 'bn'])); ?>">বাংলা</a>
            </div>
        </section>
    </nav>
</html>