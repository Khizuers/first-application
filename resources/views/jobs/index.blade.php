<x-layout>
    <x-slot:heading>
        Job Listings
    </x-slot:heading>

    <!-- Flash Success Message -->
    @if(session('success'))
        <div class="bg-green-100 text-green-800 p-4 rounded mb-6">
            {{ session('success') }}
        </div>
    @endif


    <!-- Jobs List -->
    <ul class="space-y-4">
        @forelse ($jobs as $job)
            <li class="mb-4">
                <div>
                    <a href="{{ route('jobs.show', $job) }}" class="block px-4 py-6 border border-gray-200 rounded-lg hover:shadow">
                        <!-- Employer Name -->
                        <div class="font-bold text-blue-500 text-sm">
                            {{ $job->employer->name ?? 'N/A' }}
                        </div>

                        <!-- Job Title & Salary -->
                        <div>
                            <strong>{{ $job->title }}</strong>: Pays {{ $job->salary }} per year.
                        </div>
                    </a>
                </div>

                <!-- Tags -->
                @if($job->tags->count() > 0)
                    <div class="px-4 py-2">
                        @foreach($job->tags as $tag)
                            <span class="bg-gray-200 text-gray-700 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded-full">
                                {{ $tag->name }}
                            </span>
                        @endforeach
                    </div>
                @endif
            </li>
        @empty
            <li class="text-gray-500">No jobs found.</li>
        @endforelse
    </ul>

    <!-- Pagination Links -->
    <div class="mt-6">
        {{ $jobs->links() }}
    </div>
</x-layout>
