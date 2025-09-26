<x-layout>
    <x-slot:heading>
        Job Listings
    </x-slot:heading>

    <div class="grid gap-6 max-w-4xl mx-auto">
        @foreach ($jobs as $job)
            <div class="bg-gray-800 rounded-xl shadow-lg p-6 text-white">
                <h2 class="text-2xl font-bold mb-2">
                    <a href="{{ route('jobs.show', $job) }}" class="hover:underline">
                        {{ $job->title }}
                    </a>
                </h2>
                <p class="text-gray-400">
                    Pays ${{ number_format($job->salary) }} per year
                </p>
            </div>
        @endforeach
    </div>

    <div class="mt-8">
        {{ $jobs->links() }}
    </div>
</x-layout>
