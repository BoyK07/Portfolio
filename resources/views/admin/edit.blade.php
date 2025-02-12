<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-200 leading-tight">
            {{ __('Edit Project') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6">
                <h3 class="text-2xl font-bold mb-4 text-gray-200">Edit Project</h3>
                <form action="{{ route('admin.projects.update', $project->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div>
                        <div class="mb-4">
                            <label for="title" class="block text-gray-400 text-sm font-bold mb-2">Project Name:</label>
                            <input type="text" name="title" id="title" value="{{ $project->title }}" class="shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline bg-gray-700 text-gray-200" required>
                        </div>
                        <div class="mb-4">
                            <label for="description" class="block text-gray-400 text-sm font-bold mb-2">Description:</label>
                            <textarea name="description" id="description" rows="4" class="shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline bg-gray-700 text-gray-200" required>{{ $project->description }}</textarea>
                        </div>
                        <div class="mb-4">
                            <label for="url" class="block text-gray-400 text-sm font-bold mb-2">URL:</label>
                            <input type="text" name="url" id="url" value="{{ $project->url }}" class="shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline bg-gray-700 text-gray-200">
                        </div>
                        <div class="mb-4">
                            <label for="github" class="block text-gray-400 text-sm font-bold mb-2">GitHub:</label>
                            <input type="text" name="github" id="github" value="{{ $project->github }}" class="shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline bg-gray-700 text-gray-200">
                        </div>
                        <div class="mb-4">
                            <label for="tags" class="block text-gray-400 text-sm font-bold mb-2">Tags:</label>
                            <input type="text" name="tags" id="tags" value="{{ $project->tags }}" class="shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline bg-gray-700 text-gray-200">
                        </div>
                    </div>
                    <div class="flex items-center justify-between">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            Update Project
                        </button>
                        <a href="{{ route('admin.projects.index') }}" class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800">
                            Cancel
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
