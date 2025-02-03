<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/output.css">
    <title>Admin Log In</title>
</head>
<body>

    <h1 class="text-4xl font-extrabold text-center p-4">Admin Log In</h1>
    <br><br>

<form class="max-w-sm mx-auto" action="login.php" method="POST">
  <div class="mb-5">
    <label for="username" class="block mb-2 text-sm font-medium text-gray-900">Your username</label>
    <input type="username" name="username" id="username" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" placeholder="Enter Username" required />
  </div>
  <div class="mb-5">
    <label for="password"  class="block mb-2 text-sm font-medium text-gray-900 ">Your password</label>
    <input type="password" name="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" placeholder="Enter Password" required />
  </div>
  <div class="flex items-start mb-5">
    <div class="flex items-center h-5">
      <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded-sm bg-gray-50 focus:ring-3 focus:ring-blue-300" required />
    </div>
    <label for="remember" class="ms-2 text-sm font-medium text-gray-900 ">Remember me</label>
  </div>
  <button type="submit" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Log In</button>
</form>

</body>
</html>