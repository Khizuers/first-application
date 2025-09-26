<x-layout>
    <x-slot:heading>
        {{ $job->title }}
    </x-slot:heading>

    <div class="bg-gray-800 rounded-2xl p-8 shadow-2xl text-white max-w-2xl mx-auto">
        <h1 class="text-3xl font-bold mb-4">{{ $job->title }}</h1>
        <p class="text-xl text-indigo-400 mb-6">
            Pays ${{ number_format($job->salary) }} per year
        </p>

        <div class="flex gap-4">
            <a href="{{ route('jobs.edit', $job) }}" 
               class="px-6 py-2 rounded-lg bg-indigo-600 hover:bg-indigo-500 text-white font-semibold transition duration-200">
               Edit
            </a>
            <form method="POST" action="{{ route('jobs.destroy', $job) }}">
                @csrf
                @method('DELETE')
                <button type="submit" 
                    class="px-6 py-2 rounded-lg bg-red-600 hover:bg-red-500 text-white font-semibold transition duration-200">
                    Delete
                </button>
            </form>
        </div>
    </div>
</x-layout>
