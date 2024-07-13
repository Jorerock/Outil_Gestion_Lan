<!DOCTYPE html>
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Home page</title>
    </head>
  <body class="h-full">
    <div class="hidden md:block">
      <div class="ml-10 flex items-baseline space-x-4">
        <x-navigation href="/"      :active="request()->is('/')">Home</x-navigation>
        <x-navigation href="/games"      :active="request()->is('/games')">Games</x-navigation>

      </div>
      
      <header class="bg-white shadow">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
          <h1 class="text-3xl font-bold tracking-tight text-gray-900">        
            <?php echo $heading ?>
          </h1>
        </div>
      </header>
    </div>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">

      <main>
        <?php echo $slot ?>
      </main>
      

    </div>

  </body>
</html>