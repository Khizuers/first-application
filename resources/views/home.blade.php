<x-layout>
    <x-slot:heading>Home Page</x-slot:heading>

    <div class="w-full max-w-5xl text-center">
        <!-- Hero Section -->
        <h1 class="text-5xl font-extrabold text-white mb-6">
            Welcome to <span class="text-indigo-500">BEEZHIRE</span>
        </h1>
        <p class="text-lg text-gray-300 mb-10">
            Your gateway to exciting job opportunities. Browse, apply, and connect with top employers.
        </p>

        <!-- Call to Action Buttons -->
        <div class="flex justify-center gap-6 mb-16">
            <a href="{{ route('jobs.index') }}" 
               class="px-6 py-3 rounded-lg bg-indigo-600 hover:bg-indigo-500 text-white font-semibold transition duration-200 shadow-lg">
                Browse Jobs
            </a>
            <a href="{{ route('jobs.create') }}" 
               class="px-6 py-3 rounded-lg bg-gray-700 hover:bg-gray-600 text-white font-medium transition duration-200 shadow-lg">
                Post a Job
            </a>
        </div>

        <!-- Features Section -->
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-8">
            <div class="bg-gray-800 bg-opacity-90 p-6 rounded-xl shadow-lg">
                <h3 class="text-xl font-bold text-indigo-400 mb-3">For Job Seekers</h3>
                <p class="text-gray-300 text-sm">
                    Explore hundreds of job listings tailored to your skills and career goals.
                </p>
            </div>
            <div class="bg-gray-800 bg-opacity-90 p-6 rounded-xl shadow-lg">
                <h3 class="text-xl font-bold text-indigo-400 mb-3">For Employers</h3>
                <p class="text-gray-300 text-sm">
                    Post job opportunities and connect with qualified candidates in minutes.
                </p>
            </div>
            <div class="bg-gray-800 bg-opacity-90 p-6 rounded-xl shadow-lg">
                <h3 class="text-xl font-bold text-indigo-400 mb-3">Secure & Reliable</h3>
                <p class="text-gray-300 text-sm">
                    Built with modern technologies and strong security to keep your data safe.
                </p>
            </div>
        </div>
    </div>
</x-layout>
