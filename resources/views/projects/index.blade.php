<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Projects') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end m-2 p-2">
                <a href="{{route('projects.create')}}" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">New Project</a>
            </div>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Skill
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Image
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Project Description
                        </th>
                        <th scope="col" class="px-6 py-3">

                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($projects as $project)
                        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{$project->name}}
                            </th>
                            <td class="px-6 py-4">
                                @foreach($project->projectSkills as $key => $projectSkill)
                                    {{$projectSkill->skills->name}}{{ $key < $project->projectSkills->count() - 1 ? ',' : '' }}
                                @endforeach
                            </td>
                            <td class="px-6 py-4">
                                <img src="{{asset('/storage/' . $project->image)}}" class="w-12 h-12" alt="">
                            </td>
                            <td class="px-6 py-4">
                                <div class="whitespace-nowrap overflow-hidden overflow-ellipsis w-40" title="{{$project->projectDescription}}">
                                    {{$project->projectDescription}}
                                </div>
                            </td>
                            <td class="flex justify-end py-4 px-6">
                                <a href="{{route('projects.edit',$project->id)}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline mr-3">Edit</a>
                                <form action="{{ route('projects.destroy', $project->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td>
                                <h2>No Projects</h2>
                            </td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</x-app-layout>
