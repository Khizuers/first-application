<x-layout>
    <x-slot:heading>
        {{ $job->title }}
    </x-slot:heading>

    <div class="max-w-2xl mx-auto bg-gray-800 p-6 rounded-xl shadow-lg">
        <h2 class="text-2xl font-bold text-white">{{ $job->title }}</h2>
        <p class="text-gray-400 mt-2">Salary: {{ $job->salary }}</p>
        <p class="text-gray-500 mt-4">Posted by: {{ $job->employer->name ?? 'Unknown' }}</p>

        <div class="flex justify-end mt-6">
            <a href="{{ route('jobs.edit', $job) }}" 
               class="px-6 py-2 rounded-lg bg-indigo-600 hover:bg-indigo-500 text-white font-semibold transition duration-200">
                Edit Job
            </a>
        </div>
    </div>
</x-layout>
