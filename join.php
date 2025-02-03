<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Join Us</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 min-h-screen py-12 px-4">
    <?php
        // include_once("nav.php");
    
    ?>


    <div class="max-w-4xl mx-auto bg-white p-8 rounded-lg shadow">
        <h1 class="text-2xl font-semibold text-red-600 mb-2">যোগ দাও</h1>
        <p>গণতন্ত্র রক্ষায় এগিয়ে আসুন, মানবাধিকারের জন্য আওয়াজ তুলুন।</p>
        <hr>
        <br>
        
        <form action="process_join.php" method="post" class="space-y-6">
            <!-- Full Name -->
            <div>
                <label for="fullName" class="block text-sm font-medium text-gray-700">পূর্ণ নাম*</label>
                <input type="text" id="fullName" name="fullName" required
                    class="mt-1 block w-full rounded-md border border-gray-300 px-3 py-1 focus:border-blue-500 focus:outline-none focus:ring-1 focus:ring-blue-500">
            </div>

            <!-- Gender -->
            <div>
                <label for="gender" class="block text-sm font-medium text-gray-700">লিঙ্গ*</label>
                <select id="gender" name="gender" required
                    class="mt-1 block w-full rounded-md border border-gray-300 px-3 py-1 focus:border-blue-500 focus:outline-none focus:ring-1 focus:ring-blue-500">
                    <option value="">Select gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
            </div>

            <!-- Date of Birth -->
            <div>
                <label for="dob" class="block text-sm font-medium text-gray-700">জন্ম তারিখ*</label>
                <input type="date" id="dob" name="dob" required
                    class="mt-1 block w-full rounded-md border border-gray-300 px-3 py-1 focus:border-blue-500 focus:outline-none focus:ring-1 focus:ring-blue-500">
            </div>

            <!-- Mobile -->
            <div>
                <label for="mobile" class="block text-sm font-medium text-gray-700">ফোন নম্বর*</label>
                <input type="tel" id="mobile" name="mobile" required
                    class="mt-1 block w-full rounded-md border border-gray-300 px-3 py-1 focus:border-blue-500 focus:outline-none focus:ring-1 focus:ring-blue-500">
                <p class="mt-1 text-sm text-gray-500">Please enter 11 digits of your phone number e.g: 017xxxxxxxx</p>
            </div>

            <!-- Email -->
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">ই-মেইল*</label>
                <input type="email" id="email" name="email" required
                    class="mt-1 block w-full rounded-md border border-gray-300 px-3 py-1 focus:border-blue-500 focus:outline-none focus:ring-1 focus:ring-blue-500">
            </div>

            <!-- Division -->
            <div>
                <label for="division" class="block text-sm font-medium text-gray-700">Division*</label>
                <select id="division" name="division" required
                    class="mt-1 block w-full rounded-md border border-gray-300 px-3 py-1 focus:border-blue-500 focus:outline-none focus:ring-1 focus:ring-blue-500">
                    <option value="">Please select a division</option>
                    <option value="dhaka">Dhaka</option>
                    <option value="chittagong">Chittagong</option>
                    <option value="rajshahi">Rajshahi</option>
                    <option value="khulna">Khulna</option>
                    <option value="sylhet">Sylhet</option>
                </select>
            </div>

            <!-- District -->
            <div>
                <label for="district" class="block text-sm font-medium text-gray-700">District*</label>
                <select id="district" name="district" required
                    class="mt-1 block w-full rounded-md border border-gray-300 px-3 py-1 focus:border-blue-500 focus:outline-none focus:ring-1 focus:ring-blue-500">
                    <option value="">Select a District</option>
                    <option value="district1">District 1</option>
                    <option value="district2">District 2</option>
                    <option value="district3">District 3</option>
                </select>
            </div>

            <!-- Constituency -->
            <!-- <div>
                <label for="constituency" class="block text-sm font-medium text-gray-700">Constituency*</label>
                <select id="constituency" name="constituency" required
                    class="mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 focus:border-blue-500 focus:outline-none focus:ring-1 focus:ring-blue-500">
                    <option value="">Select a Constituency</option>
                    <option value="constituency1">Constituency 1</option>
                    <option value="constituency2">Constituency 2</option>
                    <option value="constituency3">Constituency 3</option>
                </select>
            </div> -->

            <!-- Preference -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Preference*</label>
                <div class="space-y-2">
                    <div class="flex items-center">
                        <input type="checkbox" id="emailPreference" name="preference" value="email"
                            class="h-4 w-4 rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                        <label for="emailPreference" class="ml-2 text-sm text-gray-700">Email</label>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" id="phonePreference" name="preference" value="phone"
                            class="h-4 w-4 rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                        <label for="phonePreference" class="ml-2 text-sm text-gray-700">Phone</label>
                    </div>
                </div>
            </div>

            <!-- Submit Button -->
            <div>
                <button type="submit"
                    class="w-24 bg-red-500 hover:bg-red-600 text-white font-medium py-1 px-4 rounded focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">
                    Join
                </button>
            </div>
        </form>
    </div>
</body>
</html>