<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Store New Project') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-md mx-auto sm:px-6 lg:px-8 bg-white shadow-md rounded-md">
            <form method="POST" action="{{ route('projects.store') }}" class="p-4" enctype="multipart/form-data">
                @csrf

                <!-- Email Address -->
                <div class="mb-2">
                    <x-input-label for="name" :value="__('Name')" />
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <div class="mb-2">
                    <x-input-label for="gitHubUrl" :value="__('GitHub Url')" />
                    <x-text-input id="gitHubUrl" class="block mt-1 w-full" type="text" name="gitHubUrl" :value="old('projectUrl')" required autofocus />
                    <x-input-error :messages="$errors->get('gitHubUrl')" class="mt-2" />
                </div>

                <div class="mb-2">
                    <x-input-label for="projectUrl" :value="__('Project Url')" />
                    <x-text-input id="projectUrl" class="block mt-1 w-full" type="text" name="projectUrl" :value="old('projectUrl')" autofocus />
                    <x-input-error :messages="$errors->get('projectUrl')" class="mt-2" />
                </div>

                <div class="mb-2">
                    <x-input-label for="projectDescription" :value="__('Project Description')" />
                    <textarea id="projectDescription" class="block mt-1 w-full resize-none" name="projectDescription" required autofocus rows="10" >{{ old('projectDescription') }}</textarea>
                    <x-input-error :messages="$errors->get('projectDescription')" class="mt-2" />
                </div>

                <div>
                    <x-input-label for="skills" :value="__('Skills')" />
                    <select id="skills" name="skills[]" multiple="multiple" class="skills bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-2" multiple>
                        @foreach($skills as $skill)
                            <option value="{{$skill->id}}">{{$skill->name}}</option>
                        @endforeach
                    </select>
                    <x-input-error :messages="$errors->get('skills')" class="mt-2" />
                </div>


                <div>
                    <x-input-label for="image" :value="__('Image')" />
                    <x-text-input id="image" class="block mt-1 w-full" type="file" name="image" :value="old('image')" autofocus />
                    <x-input-error :messages="$errors->get('image')" class="mt-2" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <x-primary-button class="ms-3">
                        {{ __('Store') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>

{{--<script>--}}
{{--    $(document).ready(function(){--}}
{{--        $('.skills').select2({--}}
{{--            placeholder: 'select',--}}
{{--            allowClear:true,--}}
{{--        });--}}
{{--    })--}}
{{--</script>--}}
