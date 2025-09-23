<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BEEZHIRE</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 min-h-screen flex flex-col text-gray-100">

    <!-- Navigation -->
    <header class="bg-gray-900 bg-opacity-90 shadow-md">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <div class="text-2xl font-bold text-purple-400">BEEZHIRE</div>
            <nav class="space-x-6">
                <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
                <x-nav-link href="/about" :active="request()->is('about')">About</x-nav-link>
                <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main class="flex-grow flex flex-col items-center justify-center px-6 py-16">
        <div class="bg-gray-800 bg-opacity-90 rounded-xl shadow-xl max-w-4xl w-full p-12">
            <h1 class="text-5xl font-extrabold text-white mb-8 text-center">{{ $heading ?? 'Page Title' }}</h1>
            <div class="text-gray-300 text-lg text-center space-y-4">
                {{ $slot }}
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 bg-opacity-90 shadow-inner mt-10">
        <div class="max-w-7xl mx-auto px-6 py-6 text-center text-gray-400">
            &copy; {{ date('Y') }} MySite. All rights reserved.
        </div>
    </footer>

</body>
</html>
