<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-200 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6">
                <h3 class="text-2xl font-bold mb-4 text-gray-200">Manage Projects</h3>
                <a href="{{ route('admin.projects.create') }}" class="text-right bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-700">Add New Project</a>
                <table class="min-w-full mt-4">
                    <thead>
                        <tr>
                            <th class="px-6 py-3 border-b-2 border-gray-600 text-left leading-4 text-blue-400 tracking-wider">Project Name</th>
                            <th class="px-6 py-3 border-b-2 border-gray-600 text-left leading-4 text-blue-400 tracking-wider">Description</th>
                            <th class="px-6 py-3 border-b-2 border-gray-600"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($projects ?? [] as $project)
                            <tr>
                                <td class="px-6 py-4 border-b border-gray-600 text-gray-200">{{ $project->name }}</td>
                                <td class="px-6 py-4 border-b border-gray-600 text-gray-200">{{ $project->description }}</td>
                                <td class="px-6 py-4 border-b border-gray-600 text-right">
                                    <a href="{{ route('admin.projects.edit', $project->id) }}" class="bg-yellow-500 text-white px-4 py-2 rounded-lg hover:bg-yellow-700">Edit</a>
                                    <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST" class="inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-700">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
