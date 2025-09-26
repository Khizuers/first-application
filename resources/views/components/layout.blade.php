<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'BEEZHIRE')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 min-h-screen flex flex-col text-gray-100">

    <!-- Navigation -->
    <header class="bg-gray-900 bg-opacity-90 shadow-md">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <div class="text-2xl font-bold text-purple-400">BEEZHIRE</div>
            <nav class="flex items-center space-x-6">
                <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
                <x-nav-link href="{{ route('jobs.index') }}" :active="request()->is('jobs')">Jobs</x-nav-link>
                <a href="{{ route('jobs.create') }}" class="ml-4 rounded-md bg-indigo-600 px-4 py-2 text-white font-semibold hover:bg-indigo-500">Create Job</a>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main class="flex-grow flex flex-col items-center justify-center px-6 py-16">
        {{ $slot }}
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 bg-opacity-90 shadow-inner mt-10">
        <div class="max-w-7xl mx-auto px-6 py-6 text-center text-gray-400">
            &copy; {{ date('Y') }} BEEZHIRE. All rights reserved.
        </div>
    </footer>

</body>
</html>
