<html>
<head>
  <title>Login Page</title>
  @vite('resources/css/app.css')
  <script src="https://registry.npmmirror.com/vue/3.3.11/files/dist/vue.global.js"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
  <div id="app" class="w-full max-w-xs">
    <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
          Username:
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Username">
      </div>
      <div class="mb-6">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
          Password:
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="Password">
      </div>
      <div class="flex items-center justify-between">
        <button class="bg-red-400 hover:bg-red-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
          Submit
        </button>
      </div>
    </form>
  </div>
  <script>
    const { createApp } = Vue
    createApp({}).mount('#app')
  </script>
</body>
</html>