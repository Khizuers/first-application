<x-layout>
    <x-slot:heading>
        Edit Job
    </x-slot:heading>

    <div class="w-full max-w-2xl bg-gray-800 bg-opacity-90 rounded-2xl shadow-2xl p-10">
        <h1 class="text-3xl font-extrabold text-white mb-2 text-center">Edit Job</h1>
        <p class="text-gray-400 text-center mb-8">Update the details of this job listing.</p>

        <!-- Update Form -->
        <form method="POST" action="{{ route('jobs.update', $job) }}" class="space-y-6">
            @csrf
            @method('PATCH')

            <!-- Job Title -->
            <div>
                <label for="title" class="block text-sm font-medium text-gray-300 mb-2">Job Title</label>
                <input 
                    type="text" 
                    name="title" 
                    id="title" 
                    value="{{ old('title', $job->title) }}"
                    placeholder="Shift Leader"
                    class="w-full rounded-lg bg-gray-700 text-white py-3 px-4 placeholder-gray-400 border 
                           @error('title') border-red-500 @else border-gray-600 @enderror 
                           focus:ring-2 focus:ring-indigo-500 focus:outline-none transition duration-200"
                >
                @error('title')
                    <p class="text-xs text-red-500 font-semibold mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Salary -->
            <div>
                <label for="salary" class="block text-sm font-medium text-gray-300 mb-2">Salary</label>
                <input 
                    type="text" 
                    name="salary" 
                    id="salary" 
                    value="{{ old('salary', $job->salary) }}"
                    placeholder="$50,000"
                    class="w-full rounded-lg bg-gray-700 text-white py-3 px-4 placeholder-gray-400 border 
                           @error('salary') border-red-500 @else border-gray-600 @enderror 
                           focus:ring-2 focus:ring-indigo-500 focus:outline-none transition duration-200"
                >
                @error('salary')
                    <p class="text-xs text-red-500 font-semibold mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Buttons -->
            <div class="flex justify-between items-center mt-6">
                <button type="button" onclick="window.location='{{ route('jobs.show', $job) }}'" 
                    class="px-6 py-2 rounded-lg bg-gray-600 hover:bg-gray-500 text-white font-medium transition duration-200">
                    Cancel
                </button>
                <div class="flex gap-4">
                    <button type="submit" 
                        class="px-6 py-2 rounded-lg bg-indigo-600 hover:bg-indigo-500 text-white font-semibold transition duration-200">
                        Update Job
                    </button>
                    <!-- Delete Button -->
                    <button form="delete-form" type="submit" 
                        class="px-6 py-2 rounded-lg bg-red-600 hover:bg-red-500 text-white font-semibold transition duration-200">
                        Delete
                    </button>
                </div>
            </div>
        </form>

        <!-- Hidden Delete Form -->
        <form method="POST" action="{{ route('jobs.destroy', $job) }}" id="delete-form" class="hidden">
            @csrf
            @method('DELETE')
        </form>
    </div>
</x-layout>
